

@extends('layout.dashboard')
@include('include.alerts')
@section('main')
<main>
     <div class="limiter mt-5">
        <h4>
            <a href="{{url('users')}}" class=" m-1 p-3"><i class="fa-solid fa-arrow-left text-dark"></i></a>
        </h4>
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt " data-tilt>
                    <img src="{{asset('frontend/image/Itmfullogo.png')}}" alt="IMG"  class="loginimage">

				</div>

                <form action="{{route('users.store')}}"  method="POST" enctype="multipart/form-data" class="login100-form validate-form">

                    @csrf


					<span class="login100-form-title text-dark">
                        <h2>User Registration</h2>
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


					<div class="wrap-input100 validate-input" data-validate="At least one role must be selected">
                        <label for="roles" class="form-label fw-bold mb-3">Select Roles</label>
                        <div class="role-checkbox-container d-flex flex-wrap gap-3">
                            @foreach($roles as $role)
                                <div class="role-checkbox">
                                    <input
                                        class="role-checkbox-input"
                                        type="checkbox"
                                        name="roles[]"
                                        id="role-{{ $role->id }}"
                                        value="{{ $role->id }}">
                                    <label class="role-checkbox-label" for="role-{{ $role->id }}">
                                        <div class="role-icon"><i class="fas fa-user-shield"></i></div>
                                        <span class="role-name">{{ $role->name }}</span>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                        <span class="text-danger mt-2">
                            @error('roles')
                                {{ $message }}
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
.role-checkbox-container {
    display: flex;
    flex-wrap: wrap;
    gap: 15px;
    justify-content: center;
}

/* Role checkbox card */
.role-checkbox {
    position: relative;
    width: 200px;
    height: 100px;
    border: 2px solid #e0e0e0;
    border-radius: 12px;
    overflow: hidden;
    background-color: #f9f9f9;
    transition: all 0.3s ease;
    cursor: pointer;
}

.role-checkbox:hover {
    transform: scale(1.05);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    border-color: #4fd163;
}

/* Hide default checkbox */
.role-checkbox-input {
    display: none;
}

/* Label styles */
.role-checkbox-label {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
    cursor: pointer;
}

/* Icon for role */
.role-icon {
    font-size: 2rem;
    color: #6c757d;
    margin-bottom: 8px;
    transition: color 0.3s ease;
}

/* Role name */
.role-name {
    font-size: 1.1rem;
    font-weight: bold;
    color: #333;
    transition: color 0.3s ease;
}

/* Checked state */
.role-checkbox-input:checked + .role-checkbox-label {
    background-color:#084d52;
    color: #fff;
    border-color: #4fd1c5;
}

.role-checkbox-input:checked + .role-checkbox-label .role-icon {
    color: #fff
}
/* Container for role checkboxes */
.role-checkbox-container {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    justify-content: center;
}

/* Role checkbox card */
.role-checkbox {
    position: relative;
    width: 120px;
    height: 80px;
    border: 1.5px solid #e0e0e0;
    border-radius: 8px;
    overflow: hidden;
    background-color: #f9f9f9;
    transition: all 0.3s ease;
    cursor: pointer;
}

.role-checkbox:hover {
    transform: scale(1.05);
    box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
    border-color: #4fd1c5;
}

/* Hide default checkbox */
.role-checkbox-input {
    display: none;
}

/* Label styles */
.role-checkbox-label {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 100%;
    height: 100%;
    cursor: pointer;
}

/* Icon for role */
.role-icon {
    font-size: 1.5rem;
    color: #6c757d;
    margin-bottom: 4px;
    transition: color 0.3s ease;
}

/* Role name */
.role-name {
    font-size: 0.9rem;
    font-weight: bold;
    color: #333;
    transition: color 0.3s ease;
    text-align: center;
}

/* Checked state */
.role-checkbox-input:checked + .role-checkbox-label {
    background-color: #084d52;
    color: #fff;
    border-color: #4fd1c5;
}

.role-checkbox-input:checked + .role-checkbox-label .role-icon {
    color: #fff;
}

.role-checkbox-input:checked + .role-checkbox-label .role-name {
    color: #fff;
}


</style>

 @endsection
