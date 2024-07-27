


 <!-- resources/views/students/create.blade.php -->

 @extends('layout.dashboard')
 @section('main')




        <!-- resources/views/students/create.blade.php -->
<div class="container">
    <h1 class="mt-4">Scholarship</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Scholarship Create</li>
    </ol>
</div>

        <div class="container bg-image ">
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
                                            <form action="{{route('store.scholarship') }}"  enctype="multipart/form-data" method="POSt" >
                                                @csrf

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

                                                    <input type="file" class="form-control" name="image" required placeholder="image">
                                                    <span class="text-danger">@error('image'){{ $message }}@enderror</span>
                                                </div>
                                                <div class="form-group mb-3">

                                                    <input type="text" class="form-control" name="name" required placeholder="Name">
                                                    <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                                                </div>
                                                <div class="form-group mb-3">

                                                    <input type="text" class="form-control" name="country" required placeholder="Country">
                                                    <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                                                </div>
                                                <div class="form-group mb-3">

                                                    <input type="text" class="form-control" name="roll" required placeholder="ID">
                                                    <span class="text-danger">@error('roll'){{ $message }}@enderror</span>
                                                </div>
                                                <div class="form-group mb-3">

                                                    <input type="text" class="form-control" name="batch" required placeholder="Batch">
                                                    <span class="text-danger">@error('batch'){{ $message }}@enderror</span>
                                                </div>
                                                <div class="form-group mb-3">

                                                    <input type="text" class="form-control" name="duration" required placeholder="Duration year">
                                                    <span class="text-danger">@error('duration'){{ $message }}@enderror</span>
                                                </div>
                                                <div class="form-group mb-3">

                                                    <input type="text" class="form-control" name="email" required placeholder="Email">
                                                    <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                                                </div>



                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-outline-dark">
                                                        <i class="fas fa-paper-plane"></i> Submit
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
