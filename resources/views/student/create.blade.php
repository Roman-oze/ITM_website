


 <!-- resources/views/students/create.blade.php -->

 @extends('club._club_master')
 @section('main_content')




        <!-- resources/views/students/create.blade.php -->



        <div class="container bg-image">
            <div id="layoutAuthentication">
                <div id="layoutAuthentication_content">
                    <main class="">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-4">
                                    <div class="card shadow-lg border-0 rounded-lg  bg-black">
                                        <div class="card-header text-center">
                                            <h4 class=" text-white">Student Registration <i class="fa fa-user text-dangers"></i></h4>
                                        </div>
                                        <div class="card-body">
                                            <form method="post" action="{{ route('store') }}">
                                                @csrf
                                                <div class="form-group mb-3">

                                                    <input type="text" class="form-control" name="name" required placeholder="Name">
                                                    <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                                                </div>
                                                <div class="form-group mb-3">

                                                    <input type="text" class="form-control" name="roll" required placeholder="ID">
                                                    <span class="text-danger">@error('roll'){{ $message }}@enderror</span>
                                                </div>
                                                <div class="form-group mb-3">

                                                    <input type="text" class="form-control" name="batch" required placeholder="Batch">
                                                    <span class="text-danger">@error('batch'){{ $message }}@enderror</span>
                                                </div>
                                                <div class="form-group mb-3">

                                                    <input type="email" class="form-control" name="email" required placeholder="Email">
                                                    <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" name="blood" required placeholder="Blood">
                                                    <span class="text-danger">@error('blood'){{ $message }}@enderror</span>
                                                </div>
                                                <div class="form-group mb-3">

                                                    <input type="text" class="form-control" name="address" required placeholder="Address">
                                                    <span class="text-danger">@error('address'){{ $message }}@enderror</span>
                                                </div>
                                                <div class="form-group mb-3">

                                                    <input type="text" class="form-control" name="mobile" required placeholder="Mobile">
                                                    <span class="text-danger">@error('mobile'){{ $message }}@enderror</span>
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label for="type" class="text-white">Status</label>
                                                    <select name="type" class="form-select">
                                                        <option value="active">Active</option>
                                                        <option value="inactive">Inactive</option>
                                                    </select>
                                                    <span class="text-danger">@error('type'){{ $message }}@enderror</span>
                                                </div>
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-outline-danger">
                                                        <i class="fas fa-paper-plane"></i> Submit
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
@endsection



 <!-- resources/views/students/create.blade.php -->

 {{-- @extends('layout.master')
 @section('content')

     <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt " data-tilt>
					<img src="{{asset('frontend/image/clubimage.png')}}" alt="IMG"  class="loginimage">
				</div>

                <form action="{{route('store')}}"  method="POST" enctype="multipart/form-data" class="login100-form validate-form">

                    @csrf

					<span class="login100-form-title">
						Student Registration
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
						<input class="input100" type="name" name="name" placeholder="Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                        <span class="text-danger">
                            @error('name')
                         {{$message}}
                        @enderror
                      </span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="roll" placeholder="ID">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                        <span class="text-danger">
                            @error('roll')
                         {{$message}}
                        @enderror
                      </span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="batch" placeholder="Batch">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                        <span class="text-danger">
                            @error('batch')
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
						<input class="input100" type="text" name="blood" placeholder="Blood">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                        <span class="text-danger">
                            @error('blood')
                            {{$message}}
                           @enderror
                       </span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="address" name="address" placeholder="Address">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                        <span class="text-danger">
                            @error('address')
                            {{$message}}
                           @enderror
                       </span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="mobile" name="mobile" placeholder="Mobile">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                        <span class="text-danger">
                            @error('mobile')
                            {{$message}}
                           @enderror
                       </span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<label for="type">Status</label>
                                                <select name="type" class="form-select">
                                                    <option value="active">Active</option>
                                                    <option value="inactive">Inactive</option>
                                                </select>
                        <span class="text-danger">
                            @error('type')
                            {{$message}}
                           @enderror
                       </span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
					</div>
                    <div class="card-footer text-center py-3">
                        <div class="small"><a href="{{route('reset_password')}}" class="txt2 text-muted">Username / Password?</a></div>
                    </div>

                    <div class="text-center p-t-136">
						<a class="txt3 text-muted" href="{{route('registration')}}">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>

				</form>
			</div>
		</div>
	</div>
 @endsection --}}



