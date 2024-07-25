@extends('layout.app')

@section('content')

<div class="container-fluid mt-5 ">
    <div class="row p-5">

<div class="accordion " id="accordionExample">
    <div class="accordion-item mb-2">
<div class="accordion-header" id="heading1">
<button class="accordion-button collapsed h3 text-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
        B.Sc. in Information Technology and Management (ITM)
</button>
</div>
<div id="collapse1" class="collapse show" aria-labelledby="heading1" data-bs-parent="#accordionExample">
    <div class="card-body p-3">
<div class="row pt-2 pb-2 bg-light">
<div class="col-md-5">Credit Hours</div>
<div class="col-md-7">142</div>
</div>
<div class="row pt-2 pb-2 mt-2 bg-light">
<div class="col-md-5">Program Duration</div>
<div class="col-md-7">4 Years</div>
</div>
<div class="row pt-2 pb-2 mt-2 bg-light">
<div class="col-md-5">Admission Fees (Tk)</div>
<div class="col-md-7">54500</div>
</div>
<div class="row pt-2 pb-2 mt-2 bg-light">
<div class="col-md-5">Semester Cost (Tk)</div>
<div class="col-md-7">85,000</div>
</div>
<div class="row pt-2 pb-2 mt-2 bg-light">
<div class="col-md-5">Total Tuition Fees (Tk)</div>
<div class="col-md-7">509,900</div>
</div>
<div class="row pt-2 pb-2 mt-2 bg-light">
<div class="col-md-5">Total Fees (Tk)</div>
<div class="col-md-7">727,100</div>
</div>
</div>
</div>
</div>
</div>



</div>
</div>
@endsection
