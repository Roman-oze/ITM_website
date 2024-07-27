@extends('layout.app')

@section('headerpage')
<div class="highlight mt-5 ">
    <h1 class="mt-4 text-white">Alumni</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item text-white"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item text-white">Alumni List </li>
    </ol>

   </div>



@endsection


@section('content')




   <div class="container mt-5 ">
       <div class="row">

        @foreach( $alumns as $alumn)
         <div class="col-md-3 p-2">
         <div class="flip-card  ">
          <div class="flip-card-inner">
            <div class="flip-card-front flip-custom">
      <div class="child-div">
              <div class="mb-4 "><img src="{{ asset($alumn->image) }}" alt="Image" class="alumni-custom"></div>
              <div class="text p-3">
              <h2>{{$alumn->name}}</h2>
              <p class="text-muted">{{$alumn->designation}}</p>
          </div>
          </div>
          </div>

            <div class="flip-card-back p-3 text-right" style="line-height:22px;">
                  <h4>{{$alumn->name}}</h4>
                  <hr>
                      Student Id: {{$alumn->roll}}<br>

                      Batch: {{$alumn->batch}}<br>

                      Passing Year: {{$alumn->pass_year}}<br>

                      Organization: {{$alumn->organization}}<br>

                      Designation: {{$alumn->designation}}<br>

                      Phone No: {{$alumn->phone}}<br>

                      <p>Email: {{$alumn->email}}<br>


                      <p> Office Address: {{$alumn->address}}</p>

                      <div class="social-links text-center">

                      </div>
            </div>
          </div>
        </div>
        </div>
        @endforeach


        </div>
        </div>

@endsection
