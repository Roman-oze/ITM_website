
 <!-- resources/views/students/create.blade.php -->

 @extends('layout.master')
 @section('content')




        <!-- resources/views/students/create.blade.php -->




         </div>
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

                                                 <form action="{{route('loginUser')}}" method="post">
                                                     @csrf

                                                     <div class="form-group">
                                                         <label for="name">Eamil</label>
                                                         <input type="text" class="form-control" name="name" placeholder="Enter Email" value="{{old('email')}}">
                                                         <span class="text-danger">@error('name'){{$message}}@enderror</span>
                                                     </div>

                                                     <br>

                                                     <div class="form-group">
                                                         <label for="">Password</label>
                                                         <input type="password" class="form-control" name="password" placeholder="Enter password" value="{{old('email')}}">
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

     <br>
     <br>
     <br>


 @endsection

