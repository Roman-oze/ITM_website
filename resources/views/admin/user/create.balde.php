

 <!-- resources/views/students/create.blade.php -->
 @extends('admin.Admin layout._master')


@section('main')

     <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt " data-tilt>
					<img src="{{asset('frontend/image/Itmfullogo.png')}}" alt="IMG"  class="loginimage">
				</div>

                <form action="{{route('store')}}"  method="POST" enctype="multipart/form-data" class="login100-form validate-form">





					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="name" name="name" placeholder="Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
                        <i class="fa-solid fa-user " aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>

					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>

					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							create user
						</button>
					</div>



				</form>
			</div>
		</div>
	</div>
 @endsection




