<x-guest-layout>
    {{-- <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card> --}}
    {{-- <div class="form">
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <form class="login100-form validate-form" method="post" action="{{route('login')}}" name="login">
                        @csrf
                            <img src="{{ asset('admin/img/logo.png')}}" class="img-responsive center-block d-block mx-auto">

                        <span class="login100-form-title p-b-34 p-t-27">
                            Log in
                        </span>

                        <div class="wrap-input100 validate-input" data-validate = "Enter username">
                            <input class="input100" type="email" name="email" placeholder="Enter Registered Phone Number">
                            <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                            <input class="input100" type="password" name="password" placeholder="Password">
                            <span class="focus-input100" data-placeholder="&#xf191;"></span>
                        </div>

                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn" value="Login" style="width: 2.5rem; height: 2.3rem;">
                                Login
                            </button>
                        </div>

                        <p style="color: white; margin-top: 1rem;">Not registered yet? <a href="{{route('register')}}" style="color:white;"  onMouseOver="this.style.textDecoration='underline'">Register Here</a></p>

    <br /><br />
                    </form>
                </div>
            </div>
        </div> --}}
        <div class="content">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <img src="{{asset('admin2/images/hospital_logo2.png')}}" alt="Image" class="img-fluid" style="height: 30rem;
                  width: 47rem;
                  margin-left: -108px;">
                </div>
                <div class="col-md-6 contents" style="border: solid 0px #88gfb;
                box-shadow: 6px 20px 33px #3c8f7d;
                border-radius: 20px
                ">
                  <div class="row justify-content-center">
                    <div class="col-md-8">
                      <div class="mb-4">
                        <div class="row"> <img src="{{('admin/images/logo2.png')}}" class="logo" style="height: 48px;
                            margin-left: -79px;
                            margin-top: 28px;"> </div>
                      <h3>Log In</h3>

                      <p class="mb-4" style="color: black;
                      font-size: 20px">Welcome to Hospify</p>
                    </div>
                    @if(session('status'))
<div class="alert alert-success">
{{ session('status') }}
</div>
@endif
                    <form  method="post" action="{{route('login')}}" name="login">
                        @csrf
                        <div class="wrap-input100 validate-input" data-validate = "Enter username">
                            <input class="input100" type="email" name="email" placeholder="Enter Registered Phone Number" style="    margin-bottom: 31px;
                            width: 23rem;
                            height: 3rem;
                            font-size: 1.2rem;
                            border-radius: 16px;
                            padding: 22px">
                            <span class="focus-input100" data-placeholder="&#xf207;"></span>
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Enter password">


                            <input class="input100" type="password" name="password" placeholder="Password" style="    margin-bottom: 31px;
                            width: 23rem;
                            height: 3rem;
                            font-size: 1.2rem;
                            border-radius: 16px;
                            padding: 22px">
                            <span class="focus-input100" data-placeholder="&#xf191;"></span>
                        </div>


                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn" value="Login" style="width: 6.5rem;
                            height: 2.3rem;
                            border-radius: 16px;

                            margin-left: 133px;
                            background-color: #3c8f7d;
                            box-shadow: 6px 6px 10px #678a7b;
                             color: white;">
                                Login
                            </button>
                        </div>

                        <p style="color: blue
                        ; margin-top: 1rem;">Not registered yet? <a href="{{route('register')}}" style="color:blue;"  onMouseOver="this.style.textDecoration='underline'">Register Here</a></p>
                      {{-- <span class="d-block text-left my-4 text-muted">&mdash; or login with &mdash;</span> --}}

                      {{-- <div class="social-login">
                        <a href="#" class="facebook">
                          <span class="icon-facebook mr-3"></span>
                        </a>
                        <a href="#" class="twitter">
                          <span class="icon-twitter mr-3"></span>
                        </a>
                        <a href="#" class="google">
                          <span class="icon-google mr-3"></span>
                        </a>
                      </div> --}}
                    </form>
                    </div>
                  </div>

                </div>

              </div>
            </div>
          </div>


            {{-- <script src="js/jquery-3.3.1.min.js"></script>
            <script src="js/popper.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/main.js"></script> --}}


        <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->


    <?php
    //  }
    ?>


    </body>
    </html>
</x-guest-layout>
