
 <!-- resources/views/students/create.blade.php -->

 @extends('layout.app')
 @section('content')

     <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt " data-tilt>
					<img src="{{asset('frontend/image/Itmfullogo.png')}}" alt="IMG"  class="loginimage">
				</div>

                <form action="{{route('login')}}"  method="POST" enctype="multipart/form-data" class="login100-form validate-form">

                    @csrf

					<span class="login100-form-title">
						Login
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







                    <div class="row mb-5">
                        <div class="col">
                            <input class="form-check-input me-2" type="checkbox" name="remember" id="remember-check" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember-check">
                                Remember me
                            </label>
                        </div>

                    </div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
					</div>

                    <div class="card-footer text-center py-3">
                        <div class="small"><a href="{{route('password.request')}}" class="txt2 text-muted">Username / Password?</a></div>
                    </div>

                    <div class="text-center p-t-136">
						<a class="txt3 text-muted" href="{{route('register')}}">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>

				</form>
			</div>
		</div>
	</div>
 @endsection

