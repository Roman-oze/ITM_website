@extends('layout.dashboard')


@section('main')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Hero Section </h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Hero Section </li>
        </ol>

        <h3 class="mt-1 p-5">
            <a href="{{ route('herosection.create')}}" class="btn btn-outline-info">Create</a>
        </h3>

    <div class="card mb-4" style="max-width: 100%; background-color: #f8f9fa; border: none;">
        @foreach ($herosections as $hero)
        <div class="row g-0 align-items-center">
          <!-- Image Column -->
          <!-- Content Column -->

          <div class="col-md-6">
              <div class="card-body">
                  <h2 class="card-title">{{  $hero->title}}</h2>
                  <h5 class="card-text">
                      {{ $hero->description }}
                    </h5>
                    <a href="{{ $hero->link }}" class="btn btn-outline-dark mt-5">Club</a>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{asset($hero->image)}}" class="img-fluid rounded-center" alt="Hero Image">
            </div>
            <div class="text-center">

                <form action="{{ route('herosection.destroy', $hero->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');" class="mt-3">
                    @csrf
                    @method('DELETE')
                    {{-- <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                        <i class="fa-solid fa-trash fa-2x"></i>
                    </button> --}}
                    <button type="submit"  class=" btn btn-outline-danger p-3 " onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash-can text-black  fa-lg "></i></button>

                </form>
            </div>
        </div>


        @endforeach
      </div>

</main>
@endsection
