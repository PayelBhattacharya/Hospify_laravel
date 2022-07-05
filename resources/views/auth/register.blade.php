<x-guest-layout>
    {{-- <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card> --}}
    {{-- <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
                <x-jet-validation-errors class="mb-4" />
				<form class="login100-form validate-form" action="{{route('register')}}" method="post">
                    @csrf
					<!--<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>-->
          <img src="{{asset('admin/img/logo.png')}}" class="img-responsive center-block d-block mx-auto">


					<span class="login100-form-title p-b-34 p-t-27">
						SIGN UP
					</span>

                    <div>
                        <x-jet-label for="name" value="{{ __('Name') }}" />
                        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" Placeholder="Enter the name" required autofocus autocomplete="name" />
                    </div>
                    <div class="mt-4">
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" Placeholder="Enter Email" required />
                    </div>
					<div class="mt-4">
                        <x-jet-label for="password" value="{{ __('Password') }}" />
                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" Placeholder="Enter Password contain 8 words" required autocomplete="new-password" />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                        <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password" />
                    </div>
                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                        <x-jet-label for="terms">
                            <div class="flex items-center">
                                <x-jet-checkbox name="terms" id="terms"/>

                                <div class="ml-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-jet-label>
                    </div>
                @endif

					<div class="container-login100-form-btn">
						<x-jet-button class="ml-4">
							REGISTER
                        </x-jet-button>

					</div>

					<p style="color: white;margin-top: 1rem;">ALREADY REGISTERD? <a href="{{route('login')}}" style="color: white;" onMouseOver="this.style.textDecoration='underline'">LOGIN</a></p>

<br /><br />
				</form>
			</div>
		</div>
	</div> --}}

    <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="{{asset('admin2/images/hospital_logo2.png')}}" alt="Image" class="img-fluid" style="    height: 30rem;
          width: 47rem;
          margin-left: -108px;">
        </div>
        <div class="col-md-6 contents" style="border: solid 0px #88gfb;
        box-shadow: 6px 20px 33px #3c8f7d;
        border-radius: 20px;
        ">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
                <div class="row"> <img src="{{asset('admin/images/logo2.png')}}" class="logo" style="height: 48px;
                    margin-left: -79px;
                    margin-top: 28px;"> </div>
              <h3>Register yourself</h3>

              <p class="mb-4" style="color: black;
              font-size: 20px">Welcome to Hospify</p>
            </div>
            <form  method="post" action="{{route('register')}}">
                @csrf
                <div>
                    <x-jet-label for="name" value="{{ __('Name') }}" />
                    <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" Placeholder="Enter the name" required autofocus autocomplete="name" style="    margin-left: 77px;
                    height: 44px;
                    background-color: #efe2e2;
                    padding: 10px;
                    border-radius: 20px" />
                </div>
                <div class="mt-4">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" Placeholder="Enter Email" required  style="    margin-left: 77px;
                    height: 44px;
                    background-color: #efe2e2;
                    padding: 10px;
                    border-radius: 20px"/>
                </div>
                <div class="mt-4">
                    <x-jet-label for="password" value="{{ __('Password') }}" />
                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" Placeholder="Enter Password" required autocomplete="new-password"  style="    margin-left: 49px;
                    height: 44px;
                    background-color: #efe2e2;
                    padding: 10px;
                    border-radius: 20px"/>
                </div>

                <div class="mt-4">
                    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password" style="    margin-left: 0px;
                    height: 44px;
                    background-color: #efe2e2;
                    padding: 10px;
                    border-radius: 20px" />
                </div>
                <div class="mt-4">
                    {{-- <x-jet-label for="usertype" value="{{ __('usertype') }}" />
                    <x-jet-input id="usertype" class="block mt-1 w-full" type="text" placeholder="Register As" name="usertype"  :value="old('usertype')" style="    margin-left: 0px;
                    height: 44px;
                    background-color: #efe2e2;
                    padding: 10px;
                    border-radius: 20px" /> --}}
                    <select class="form-control selcls" class="btn btn2 dropdown-toggle" type="button"
                    id="about-us" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    name="usertype" id="usertype">
                    <div class="dropdown-menu" class="btn btn2 dropdown-toggle" type="button"
                        id="about-us" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <option value="User">User</option>
                        {{-- <option value="Admin">Admin</option> --}}
                        <option value="Hospital User">Hospital</option>


                    </div>
                </select>
                </div>
                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

                <div class="container-login100-form-btn">
                    <x-jet-button class="ml-4" style="width: 6.5rem;
                        width: 10.5rem;
                       height: 2.3rem;
                       border-radius: 20px;
                    margin-left: 133px;
                    background-color: #3c8f7d;
                    box-shadow: 6px 6px 10px #678a7b;
                     color: white;
                     margin-top:29px;">
                        REGISTER
                    </x-jet-button>

                </div>

                <p style="color: rgb(5, 41, 245);margin-top: 1rem;">ALREADY REGISTERD? <a href="{{route('login')}}" style="color: rgb(40, 67, 240);" onMouseOver="this.style.textDecoration='underline'">LOGIN</a></p>

<br /><br />
            </form>
        </div>
    </div>
</div>
</div>
    </div></div>


    {{-- <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script> --}}


<div id="dropDownSelect1"></div>

        <?php
	// }
		?>
      </form>

</x-guest-layout>
