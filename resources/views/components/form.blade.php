
                {{-- <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input100" type="{{$type}}" name="{{$name}}" placeholder="{{$placeholder}}">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                    <i class="fa-solid fa-user " aria-hidden="true"></i>
                    </span>
                    <span class="text-danger">
                        @error('name')
                     {{$message}}
                    @enderror
                  </span>
                </div> --}}

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <label for="">{{$label}}</label>
                    <input class="input100" type="{{$type}}" name="{{$name}}" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                    {{-- <span class="text-danger">
                        @error({{$name}})
                     {{$message}}
                    @enderror
                  </span> --}}
                </div>



