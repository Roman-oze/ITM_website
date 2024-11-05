@extends('layout.dashboard')


@section('main')
<main>

    <div class="container-fluid px-4">
    <h1 class="mt-4">Service </h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Service</li>
    </ol>

    <h3 class="mt-1 p-5">
        <a href="{{ route('services.create')}}" class="btn btn-outline-info">Create</a>
    </h3>

{{--
    <div class="card mb-4" style="max-width: 100%; background-color: #f8f9fa; border: none;">
        @foreach ($services as $service)
        <div class="col-xl-3 col-md-6 d-flex align-items-stretch aos-init aos-animate p-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">

                <img src="{{asset($service->image )}}" class=" img-decorate " alt="Transport">

                <h4><a target="_blank" href="{{ $service->link }}" class="btn btn-outline-info text-dark  mt-3">Transport</a>
                </h4>

               <p>{{ $service->description }}</p>
            </div>
          </div>

        @endforeach
      </div> --}}
      <div class="container mt-5">
        <div class="row">
            @foreach ($services as $service)
            <div class="col-xl-3 col-md-6 d-flex align-items-stretch aos-init aos-animate p-2" data-aos="zoom-in" data-aos-delay="100">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset($service->image)}}" class="card-img-top" alt="Small Image" style="height: 150px; width: 150px; object-fit: cover;">
                    <div class="card-body">
                        <a href="{{ $service->link }}" class="btn btn-primary">{{ $service->link_name }}</a>
                        <p class="card-text">{{ $service->description }}</p>
                    </div>
                    <div class="mt-1 p-1 d-flex justify-content-evenly" >


                        <a href="{{route('services.edit',$service->id)}}" class="btn btn-outline-info">Edit</a>

                        @can('manage-user')
                        <form action="{{ route('services.destroy', $service->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');" class="mt-3">
                            @csrf
                            @method('DELETE')
                            {{-- <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                                <i class="fa-solid fa-trash fa-2x"></i>
                            </button> --}}
                            <button type="submit"  class=" btn btn-outline-danger p-3 " onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash-can text-black  fa-lg "></i></button>

                            @endcan
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


</main>
@endsection
