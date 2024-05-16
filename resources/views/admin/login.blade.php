
 <!-- resources/views/students/create.blade.php -->
 @extends('admin._master')

 @section('admin_content')




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


                                                 <form method="post" action="{{route('register')}}">
                                                     @csrf

                                                     <div class="form-group">
                                                         <label for="name">User name</label>
                                                         <input type="text" class="form-control" name="name" required>
                                                     </div>

                                                     <div class="form-group">
                                                         <label for="department">Password</label>
                                                         <input type="text" class="form-control" name="department" required>
                                                     </div>
                                                     <span>
                                                         <a href="" class="text-danger text-bold">Forget password</a>
                                                     </span>

                                                     <br>
                                                     <br>
                                                     <button type="submit" class="btn btn-primary">Submit</button>

                                                     @if(session('success'))
                                                     <div class="alert alert-success" role="alert">
                                                         {{ session('success') }}
                                                     </div>
                                                 @endif
                                                 </form>
                                     </div>
                                     <div class="card-footer text-center py-3">
                                         <div class="small"><a href="{{route('registration')}}">Need an account? Sign up!</a></div>
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

