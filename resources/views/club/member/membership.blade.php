@extends('club.layout.club_master')

@include('club.layout.header')


@section('main_content')
<div class="container mt-5">
    <div class="text-center d-block m-auto mt-1">
    <h2 class="d-block m-auto text-muted ">Club Members</h2>
</div>
    <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fa-solid fa-star"></i></div>
        <div class="divider-custom-line"></div>
    </div>
    <div class="row mt-5 p-5">


        <div class="col-lg-4 col-6 text-center p-5">
            <span data-purecounter-start="0" data-purecounter-end="26" data-purecounter-duration="0" class="purecounter">26</span>
            <p class="text-color">Committee</p>
          </div>

        <div class="col-lg-4 col-6 text-center  p-5">
          <span data-purecounter-start="0" data-purecounter-end="421" data-purecounter-duration="0" class="purecounter">1</span>
          <p class="text-color">Memebers</p>
        </div>


        <div class="col-lg-4 col-6 text-center p-5">
          <span data-purecounter-start="0" data-purecounter-end="10000" data-purecounter-duration="0" class="purecounter">15</span>
          <p class="text-color">Total Event</p>
        </div>

      </div>
    <div class="row mt-5">
        <!-- Member Card 1 -->
        @foreach ($students as $student)
            <div class="col-md-4 mb-4">
                <div class="card  rounded shadow">
                    <div class="card-body ">
                        <h5 class="card-title text-muted">ID: <span class="text-dark"><strong>{{ $student->roll }}</strong></span></h5>
                        <h4 class="card-text text-white bg-dark rounded p-2">{{ $student->name }}</h4>
                        <p class="card-text">Batch: {{ $student->batch->batch_name }}</p>
                        <p class="card-text">Email: {{ $student->email }}</p>
                        <p class="card-text">Mobile: {{ $student->mobile }}</p>
                        <p class="card-text">Address: {{ $student->address }}</p>
                        <p>
                            @if($student->type == 'active')
                            <h3 class="badge badge-success text-success btn"><i class="fa-solid fa-circle text-success fa-lg"></i> Active</h3>
                            @else
                            <h3 class="badge badge-danger text-danger btn "><i class="fa-solid fa-ban text-danger fa-lg"></i> Inactive</h3>
                           @endif
                       </p>

                    </div>
                </div>

            </div>
        @endforeach
    </div>
</div>

@endsection
