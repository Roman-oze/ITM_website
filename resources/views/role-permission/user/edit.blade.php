


@extends('layout.dashboard')

@section('main')
<main>
     <div class="limiter mt-5">
        <h4>
            <a href="{{url('users')}}" class=" m-1 p-3 "><i class="fa-solid fa-arrow-left text-dark"></i></a>
        </h4>
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt " data-tilt>
                    <img src="{{asset('frontend/image/Itmfullogo.png')}}" alt="IMG"  class="loginimage">

				</div>

                <form action="{{url('users',$user->id)}}" method="POST">

                    @csrf
                    @method('PUT')


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
						Edit User
					</span>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="name" name="name" placeholder="Name" value="{{$user->name}}">
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
						<input class="input100" type="email" name="email" placeholder="Email" value="{{$user->email}}">
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
						<input class="input100" type="password" name="password" placeholder="Password" value="{{$user->passsword}}">
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


                        <div class="mb-3">
                            <label for="name" class="form-label">Roles</label>
                            <select name="roles[]" class="form-control" multiple>
                                @foreach($roles as $role)
                                <option value="{{$role}}" {{in_array($role, $userRoles) ? 'selected' :''}}>
                                    {{$role}}
                                </option>
                                @endforeach
                                </select>
                                @error('roles')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
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
