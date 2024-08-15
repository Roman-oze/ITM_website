

@extends('layout.app')

@section('content')

<section id="services" class="services section-bg text-left" >
    <div class="container aos-init aos-animate text-left" data-aos="fade-up">
      <div class="section-title text-left">
        <h2 class=" text-dark text-left mt-5">Routine</h2>


        <div class="container">
            <div class="row">
    <div class="col-md-12 mt-3  text-center">
        <a href="">
            <h1 class="text-dark btn btn-outline-info">Click here for get routine by email <a href="itmoffice@daffodilvarsity.edu.bd"> <i class="fa-solid fa-envelope "></i></a>
            </h1>
        </a>
    </div>
</div>

<div class="row p-3">
<div class="col-md-8 ">

    <img src="{{asset('frontend/image/routine.png')}}" alt="" class="img-fluid">

</div>

<div class="col-md-4">

<table class="table table-striped  rounded ">
    <tbody class="text-center">
        <thead class="">
        <h4 class="text-dark bg-light p-2 text-center rounded">Semester</h4>

    </thead>
    <tbody class="text-center">

        @foreach($routines as $routine)

    {{-- <td class="text-dark">{{($routine->file) }}</td> --}}
        <td class="text-dark text-capitalize text-center"><h5>{{$routine->type}}</h5></td>
        <td class="d-flex justify-content-evenly">

            <a href="" class="p-3 text-dark h5"><i class="fa-solid fa-eye text-success  fa-lg "></i> view</a>
            <a href="{{url('/download',$routine->file)}}" class="p-3 text-dark h5"><i class="fa-solid fa-circle-down text-info  fa-lg"></i> Download</a>



  </tr>

  @endforeach
    </tbody>
</table>

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
