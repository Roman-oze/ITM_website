


 <!-- resources/views/students/create.blade.php -->

 @extends('club._club_master')
 @section('main_content')




        <!-- resources/views/students/create.blade.php -->




        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header text-center">
                                        <h3 class="title text-danger">Create Student Registration <i class="fa fa-user text-black"></i></h3>
                                    </div>
                                    <div class="card-body">
                                        <form method="post" action="{{ route('store') }}">
                                            @csrf
                                            <div class="form-group mb-3">
                                                <label for="name">Name</label>
                                                <input type="text" class="form-control" name="name" required>
                                                <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="roll">ID</label>
                                                <input type="text" class="form-control" name="roll" required>
                                                <span class="text-danger">@error('roll'){{ $message }}@enderror</span>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="batch">Batch</label>
                                                <input type="text" class="form-control" name="batch" required>
                                                <span class="text-danger">@error('batch'){{ $message }}@enderror</span>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" name="email" required>
                                                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="blood">Blood</label>
                                                <input type="text" class="form-control" name="blood" required>
                                                <span class="text-danger">@error('blood'){{ $message }}@enderror</span>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="address">Address</label>
                                                <input type="text" class="form-control" name="address" required>
                                                <span class="text-danger">@error('address'){{ $message }}@enderror</span>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="mobile">Mobile</label>
                                                <input type="text" class="form-control" name="mobile" required>
                                                <span class="text-danger">@error('mobile'){{ $message }}@enderror</span>
                                            </div>
                                            <div class="form-group mb-4">
                                                <label for="type">Status</label>
                                                <select name="type" class="form-select">
                                                    <option value="active">Active</option>
                                                    <option value="inactive">Inactive</option>
                                                </select>
                                                <span class="text-danger">@error('type'){{ $message }}@enderror</span>
                                            </div>
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-success">
                                                    <i class="fas fa-paper-plane"></i> Submit
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Uncomment if needed -->
                                    <!-- <div class="card-footer text-center py-3">
                                        <div class="small"><a href="{{route('sign_in')}}">Need an account? Sign up!</a></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>


     <br>
     <br>
     <br>
 @endsection

