
@extends('layout.dashboard')

@section('main')

{{-- <form  action="records" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" >
    <div class="input-group">
        <input class="form-control" type="text" placeholder="Search for..." name="search" aria-label="Search for..." aria-describedby="btnNavbarSearch" />
        <button class="btn btn-primary" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>

    </div>

</form> --}}

<main>

    <div class="container mt-5">
        <h1 class="mt-4">Notice</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Notice Edit</li>
        </ol>
        <br>

            <div class="card">
                <div class="card-header">
                    <h5>
                        <a href="{{route('notice.create')}}" class="btn btn-primary float-end">Add notice</a>
                    </h5>
                </div>

            </div>


<div class="row">
    @foreach ($notices as $notice)
    <div class="col-md-6">
        <div class="card p-3 mt-3">
              <div class="card-body p-3 mt-3">
                <h2  class="text-danger text-center mt-2">{{ $notice->title }}</h2>
                        <p class=" badge text-dark text-right">{{ $notice->created_at->format('F j, Y, g:i a') }}</p>
                        <p class="mt-2 p-3">{{ $notice->content }}</p>
                        <div style="display: flex; justify-content: space-evenly; align-items: center;">
                            <a href="{{ route('notice.edit', $notice->id) }}" class="btn btn-info">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>

                            <form action="{{ route('notice.delete', $notice->id) }}" method="POST" style="margin: 0;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>

                            <a href="{{ url('/pdf_generate') }}" class="btn btn-dark">
                                <i class="fa-solid fa-circle-down"></i>
                            </a>
                        </div>

            </div>
        </div>
    </div>
@endforeach
</div>

</div>
</div>

</main>

@endsection




