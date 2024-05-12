
 <!-- resources/views/students/create.blade.php -->

@extends('layout.master')
@section('content')




       <!-- resources/views/students/create.blade.php -->



           <div class="container mt-5">
                            <h3 class="title text-danger">Login <i class="fa fa-user"></i></h3>

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

