
 <!-- resources/views/students/create.blade.php -->

@extends('layout.app')
<!-- Sweet alert -->
@include('include.alerts')
@section('content')

<style>
    .password-toggle {
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    color: #666666;
    font-size: 16px;
    pointer-events: auto;
    font-size: 15px;

}
.password-toggle:hover {
    color: #57b846;

}

</style>

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

					<div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" name="password" id="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                        <span class="password-toggle">
                            <i class="fa fa-eye" id="toggle-password" style="cursor: pointer;" aria-hidden="true"></i>
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

                    {{-- <div class="card-footer text-center py-3">
                        <div class="small"><a href="{{route('password.request')}}" class="txt2 text-muted">Username / Password?</a></div>
                    </div> --}}

                    <div class="text-end p-t-136 m-2">
						<a class="small text-bold text-muted " href="{{route('password.request')}}">
                           <strong>Username / Password ?</strong>
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>

				</form>
			</div>
		</div>
	</div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
    const togglePassword = document.getElementById('toggle-password');
    const passwordField = document.getElementById('password');

    togglePassword.addEventListener('click', function () {
        // Toggle password visibility
        const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordField.setAttribute('type', type);

        // Toggle eye icon
        this.classList.toggle('fa-eye');
        this.classList.toggle('fa-eye-slash');
    });
});

    </script>
 @endsection

