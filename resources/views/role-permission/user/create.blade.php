

@extends('layout.dashboard')

@section('main')
<main>
     <div class="limiter mt-5">
        <h4>
            <a href="{{url('users')}}" class="btn btn-dark m-1">Back</a>
        </h4>
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt " data-tilt>
                    <img src="{{asset('frontend/image/Itmfullogo.png')}}" alt="IMG"  class="loginimage">

				</div>

                <form action="{{route('users.store')}}"  method="POST" enctype="multipart/form-data" class="login100-form validate-form">

                    @csrf


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




					<span class="login100-form-title text-dark">
						Super-Admin Registration
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="name" name="name" placeholder="Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
                        <i class="fa-solid fa-user " aria-hidden="true"></i>
						</span>
                        <span class="text-danger">
                            @error('name')
                         {{$message}}
                        @enderror
                      </span>
					</div>

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

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
                            <label for="name" class="form-label">Roles</label>
                        <select name="roles[]" class="form-control" multiple>
                            @foreach($roles as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                        <span class="text-danger">
                            @error('password')
                            {{$message}}
                           @enderror
                       </span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Register
						</button>
					</div>


				</form>
			</div>
		</div>
	</div>
</main>

 @endsection
