@extends('layout.app')

@section('content')

<section id="services" class="services section-bg text-left mt-5">

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="section-title text-center">
            <h2 class="text-dark">Scholarship</h2>
        </div>
        @foreach ($scholars as $scholar)
            <div class="col-md-3 p-2">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front flip-custom">
                            <div class="child-div">
                                <div class="mb-4">
                                    <img src="{{ asset($scholar->image) }}" alt="Image" class="scholar-custom">
                                </div>
                                <div class="text p-1">
                                    <h2 class="text-white">{{ $scholar->name }}</h2>
                                    <p class="h5 text-white-50">{{ $scholar->country }}</p>
                                    <h4 class="text-warning">
                                        <i class="fa-solid fa-hands-bubbles"></i> Congratulations!
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card-back text-left" style="line-height: 22px;">
                            <h4>{{ $scholar->name }}</h4>
                            <hr>
                            <p>Student ID: {{ $scholar->roll }}</p>
                            <p>Batch: {{ $scholar->batch }}</p>
                            <p>Duration: {{ $scholar->duration }}</p>
                            <p>Email: <br>{{ $scholar->email }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</section>
@endsection
