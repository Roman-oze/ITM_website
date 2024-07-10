
 <!-- resources/views/students/create.blade.php -->

 @extends('layout.master')
 @section('content')









         {{-- <div id="layoutAuthentication">
             <div id="layoutAuthentication_content">
                 <main>
                     <div class="container">
                         <div class="row justify-content-center">

                                 <div class="card shadow border-0 rounded-lg mt-5">
                                     <div class="card-header"><h3 class="title text-success">Admin Login <i class="fa fa-user text-black"></i></h3></div>
                                     <div class="card-body">
                                         <div class="container ">


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
                                         <div class="small"><a href="{{route('registration')}}">Need an account? Sign up!</a></div>
                                     </div>
                                 </div>
                             </div>

                     </div>
                 </main>
             </div> --}}

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
                                <small>Don't have an account? <a href="{{route('registration')}}">Sign up</a></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

     <br>
     <br>
     <br> --}}



     <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt " data-tilt>
					<img src="{{asset('frontend/image/Itmfullogo.png')}}" alt="IMG"  class="loginimage">
				</div>

                <form action="{{route('loginUser')}}"  method="POST" enctype="multipart/form-data" class="login100-form validate-form">

                    @csrf

					<span class="login100-form-title">
						Admin Login
					</span>
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




					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                        <span class="text-danger">
                            @error('email')
                         {{$message}}
                        @enderror
                      </span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                        <span class="text-danger">
                            @error('password')
                            {{$message}}
                           @enderror
                       </span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1 ">
							Forgot
						</span>
						<a class="txt2 text-dark" href="{{route('reset_password')}}">
							Username / Password?
						</a>
					</div>

                    <div class="card-footer text-center">
                        <small class="text-muted">Don't have an account? <a href="{{route('registration')}}" class="text-info">Sign up</a></small>
                    </div>
				</form>
			</div>
		</div>
	</div>









 @endsection

