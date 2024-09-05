

@extends('layout.app')

@section('content')

<section id="services" class="services section-bg text-center" >
    <div class="container aos-init aos-animate text-left" data-aos="fade-up">
      <div class="section-title text-left">
        <h2 class=" text-dark text-left mt-5">Routine</h2>




<div class="row p-3">
<div class="col-md-8 ">

    <img src="{{asset('frontend/image/routine.png')}}" alt="" class="img-fluid">

</div>

<div class="col-md-4 p-2 text-center">



        @foreach($falls as $fall)

    {{-- <td class="text-dark">{{($routine->file) }}</td> --}}
        {{-- <td class="text-dark text-capitalize text-center"><h5>{{$routine->type}}</h5></td>
        <td class="d-flex justify-content-evenly">

            <a href="" class="p-3 text-dark h5"><i class="fa-solid fa-eye text-success  fa-lg "></i> </a>
            <a href="{{url('/download',$routine->file)}}" class="p-3 text-dark h5"><i class="fa-solid fa-circle-down text-info  fa-lg"></i></a> --}}

            <div class="card text-center shadow-lg" style="width: 20rem; border-radius: 15px; overflow: hidden;">
                <div class="card-header bg-color text-white" style="font-size: 1.2rem; padding: 20px 10px;">
                  <i class="fas fa-calendar-alt"></i> {{ $fall->type }}
                </div>
                <div class="card-body" style="background-image: url('https://example.com/background.jpg'); background-size: cover; padding: 30px;">
                  <p class="card-text text-dark mb-4" style="font-size: 1rem;">{{ $fall->name }}</p>
                  <a href="{{route('routine.show',$fall->id)}}" class="btn btn-light btn-block mb-2" style="border-radius: 20px;"><i class="fas fa-eye"></i> View</a>
                  <a href="{{route('files.download',$fall->id)}}" class="btn btn-light btn-block" style="border-radius: 20px;"><i class="fas fa-download"></i> Download</a>
                </div>
                <div class="card-footer text-muted">
                  {{-- Last updated: 2 days ago --}}
                  Last updated:    <strong> {{ $fall->uploaded_at }}</strong>

                </div>
              </div>

@endforeach


{{--
<div class="row">
    {{ $record->links('pagination::bootstrap-5') }}
</div> --}}

</div>
</div>
</div>
</div>
</section>
@endsection
