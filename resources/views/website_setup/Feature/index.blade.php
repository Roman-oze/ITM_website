@extends('layout.dashboard')
@section('main')
<main>

    <div class="container-fluid px-4">
        <h1 class="mt-4">Features </h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Feature</li>
        </ol>

<div class="card mb-4">
    <div class="card-header float-end">
        <h3 class=" float-end">
            <a href="{{route('feature.create')}}" class="btn btn-outline-dark">Create</a>
        </h3>
        </div>
</div>


    <div class="container-fluid">
<div class="row p-3">
    @foreach ($features as $feature)
    <div class="col-md-3 p-3 ">
      <div class="flip-card flip-shadow ">
       <div class="flip-card-inner ">
          <div class="flip-card-front flip-custom-2 " style="background: #37517e;">
              <div class="child-div-2 " style="background: rgb(237, 240, 240)";>
      <img src="{{asset ( $feature->image )}}" alt="" class="img-fluid"><br>
      <h4 style="text-white p-2">{{ $feature->title }}</h4>

       </div>
       </div>
         <div class="flip-card-back p-3 text-left " style="line-height:22px;">
               <h5>{{ $feature->title }}</h5>
               <hr>
               <p style="font-size: small"> {{ $feature->description }} </p>

                   <div class="social-links text-center">

                   </div>
         </div>
       </div>
     </div>
     <div class="d-flex justify-content-evenly mt-1">

        <a href="{{route('feature.edit',$feature->id)}}" class=" btn btn-info">Edit</a>

        <form action="{{ route('feature.delete',$feature->id)}}" method="POST">
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure !')">Delete</button>
        </form>

     </div>
     </div>

     @endforeach
     </div>
     </div>

    </main>
    @endsection
