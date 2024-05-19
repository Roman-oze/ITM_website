
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
                                    <div class="card-header"><h3 class="title text-success">Student Login <i class="fa fa-user text-black"></i></h3></div>
                                    <div class="card-body">
                                        <div class="container mt-5">


                                                <form method="post" action="{{route('store')}}">
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
                                                    <br>

                                                    @if(session('success'))
                                                    <div class="alert alert-success" role="alert">
                                                        {{ session('success') }}
                                                    </div>
                                                @endif
                                                </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="{{route('create')}}">Need an account? Sign up!</a></div>
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
{{--
    <div class="form-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="form-container">
                            <div class="form-icon"><i class="fa fa-user"></i></div>
                            <h3 class="title">Login</h3>
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label>email</label>
                                    <input class="form-control" type="email" name="email" placeholder="email address">
                                </div>
                                <div class="form-group">
                                    <label>password</label>
                                    <input class="form-control" type="password" name="password" placeholder="password">
                                </div>
                                <button type="button" class="btn btn-default">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

@endsection

