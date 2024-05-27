


 <!-- resources/views/students/create.blade.php -->

 @extends('club._club_master')
 @section('main_content')




        <!-- resources/views/students/create.blade.php -->




         </div>
         <div id="layoutAuthentication">
             <div id="layoutAuthentication_content">
                 <main>
                     <div class="container">
                         <div class="row justify-content-center">
                             <div class="col-lg-5">
                                 <div class="card shadow-lg border-0 rounded-lg mt-5">
                                     <div class="card-header"><h3 class="title text-danger">Create Student Registration  <i class="fa fa-user text-black"></i></h3></div>
                                     <div class="card-body">
                                         <div class="container mt-5">
                                            <form method="post" action="{{route('store')}}">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="name">Name</label>
                                                    <input type="text" class="form-control" name="name" required>
                                                    <input type="hidden" class="form-control" value="user" name="role" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="name">Email</label>
                                                    <input type="email" class="form-control" name="email"  required>
                                                    <input type="hidden" class="form-control" value="user" name="role" required>

                                                </div>

                                                <div class="form-group">
                                                    <label for="department">Department:</label>
                                                    <input type="text" class="form-control" name="department" required>

                                                </div>

                                                <div class="form-group">
                                                    <label for="address">Address</label>
                                                    <input type="text" class="form-control" name="address" required>
                                                    <input type="hidden" class="form-control" value="user" name="role" required>

                                                </div>

                                                <div class="form-group">
                                                    <label for="mobile">Mobile:</label>
                                                    <input type="text" class="form-control" name="mobile" required>
                                                    <input type="hidden" class="form-control" value="user" name="role" required>

                                                </div>
                                                
                                                <br>
                                                <br>

                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>




                                     </div>
                                     <div class="card-footer text-center py-3">
                                         <div class="small"><a href="{{route('sign_in')}}">Need an account? Sign up!</a></div>
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

