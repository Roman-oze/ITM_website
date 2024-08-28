@extends('layout.app')



@section('content')


<section id="services" class="services section-bg text-left mt-5" >
    <div class="container aos-init aos-animate text-left" data-aos="fade-up">
      <div class="section-title text-center">


      <h2 class=" text-dark text-left">Alumni</h2>

 </p>
</div>
</div>
</div>
</section>


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
              <h3 class="text-white">{{$alumn->name}}</h3>
              <p class="text-white">{{$alumn->designation}}</p>
          </div>
          </div>
          </div>

            <div class="flip-card-back p-3 text-right" style="line-height:22px;">
                  <h4>{{$alumn->name}}</h4>
                  <hr>
                  <div class="p-1">
                      Student Id: {{$alumn->roll}}<br>

                      Batch: {{$alumn->batch}}<br>

                      Passing Year: {{$alumn->pass_year}}<br>

                      Organization: {{$alumn->organization}}<br>

                      Designation: {{$alumn->designation}}<br>

                      Phone No: {{$alumn->phone}}<br>

                     Email: {{$alumn->email}}<br>


                      Office Address: {{$alumn->address}}
                    </div>

            </div>
          </div>
        </div>
        </div>
        @endforeach


        </div>
        </div>

@endsection
