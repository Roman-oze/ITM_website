
 <!-- resources/views/students/create.blade.php -->

 @extends('layout.dashboard')
 @section('main')




        <!-- resources/views/students/create.blade.php -->
<div class="container">
    <h1 class="mt-4">Scholarship</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Scholarship Edit</li>
    </ol>
</div>

        <div class="container  ">
            <div id="layoutAuthentication">
                <div id="layoutAuthentication_content">
                    <main class="">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-4">
                                    <div class="card shadow-lg border-0 rounded-lg  ">
                                        <div class="card-header text-center">
                                        </div>
                                        <div class="card-body">
                                            <form action="{{route('update.scholarship',$scholars->id) }}"  enctype="multipart/form-data" method="POST" >
                                                @csrf
                                                @method('PUT')

                                                @if (session()->has('success'))

                                                <div class="alert alert-success">
                                                    {{ session()->get('success') }}
                                                    </div>

                                                @endif

                                                @if (session()->has('error'))

                                                <div class="alert alert-danger">
                                                    {{ session()->get('error') }}
                                                    </div>

                                                @endif


                                                <div class="form-group mb-3">

                                                    <input type="file" class="form-control" name="image" value="{{$scholars->image}}" required placeholder="image">
                                                    <span class="text-danger">@error('image'){{ $message }}@enderror</span>
                                                </div>
                                                <div class="form-group mb-3">

                                                    <input type="text" class="form-control" name="name" value="{{$scholars->name}}" required placeholder="Name">
                                                    <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                                                </div>
                                                <div class="form-group mb-3">
                                                <div class="form-group mb-3">

                                                    <input type="text" class="form-control" name="country" value="{{$scholars->country}}" required placeholder="Country">
                                                    <span class="text-danger">@error('country'){{ $message }}@enderror</span>
                                                </div>
                                                <div class="form-group mb-3">

                                                    <input type="text" class="form-control" name="roll" value="{{$scholars->roll}}" required placeholder="ID">
                                                    <span class="text-danger">@error('roll'){{ $message }}@enderror</span>
                                                </div>
                                                <div class="form-group mb-3">

                                                    <input type="text" class="form-control" name="batch" value="{{$scholars->batch}}" required placeholder="Batch">
                                                    <span class="text-danger">@error('batch'){{ $message }}@enderror</span>
                                                </div>
                                                <div class="form-group mb-3">

                                                    <input type="text" class="form-control" name="duration" value="{{$scholars->duration}}"  required placeholder="Duration">
                                                    <span class="text-danger">@error('duration'){{ $message }}@enderror</span>
                                                </div>
                                                <div class="form-group mb-3">

                                                    <input type="email" class="form-control" name="email" value="{{$scholars->email}}" required placeholder="Email">
                                                    <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                                                </div>

                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-outline-danger">
                                                        <i class="fas fa-paper-plane"></i> Update
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
@endsection


