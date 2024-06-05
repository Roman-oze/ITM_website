
 <!-- resources/views/students/create.blade.php -->

 @extends('layout.master')
 @section('content')









         <div id="layoutAuthentication">
             <div id="layoutAuthentication_content">
                 <main>
                     <div class="container">
                         <div class="row justify-content-center">
                             <div class="col-lg-5">
                                 <div class="card shadow-lg border-0 rounded-lg mt-5">
                                     <div class="card-header"><h3 class="title text-success">Admin Login <i class="fa fa-user text-black"></i></h3></div>
                                     <div class="card-body">
                                         <div class="container mt-5">


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

                                            <form action="{{route('loginUser')}}" method="POST" enctype="multipart/form-data">
                                                @csrf

                                                     <div class="form-group">
                                                         <label for="name">Email</label>
                                                         <input type="text" class="form-control" name="email">
                                                         <span class="text-danger">@error('email'){{$message}}@enderror</span>
                                                     </div>

                                                     <br>

                                                     <div class="form-group">
                                                         <label for="">Password</label>
                                                         <input type="password" class="form-control" name="password">
                                                         <span class="text-danger">@error('password'){{$message}}@enderror</span>
                                                     </div>
                                                     <br>
                                                     <span>
                                                         <a href="{{route('reset_password')}}" class="text-danger text-bold">Forget password</a>
                                                     </span>

                                                     <br>
                                                     <br>
                                                     <button type="submit" class="btn btn-primary">Submit</button>


                                                 </form>
                                     </div>
                                     <div class="card-footer text-center py-3">
                                         <div class="small"><a href="{{route('admin_registration')}}">Need an account? Sign up!</a></div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </main>
             </div>

             {{-- <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card mt-5">
                            <div class="card-header text-center">
                                <h3>Login</h3>
                            </div>
                            <div class="card-body">



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






                                <form action="{{route('loginUser')}}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control"   name="email" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control"  name="password"  required>
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center">
                                <small>Don't have an account? <a href="{{route('admin_registration')}}">Sign up</a></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

     <br>
     <br>
     <br> --}}


 @endsection

