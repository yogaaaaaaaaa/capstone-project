{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hang Siji Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    @include('admin.partials.link')
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h5 class="text-primary"><i class="fa fa-user-edit me-2"></i>Hang Siji</h5>
                            </a>
                            <h5>Log In</h5>
                        </div>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" :value="old('email')" required autofocus autocomplete="username">
                                <label for="email">Email address</label>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password" required autocomplete="current-password">
                                <label for="password">Password</label>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="remember_me">
                                    <label class="form-check-label" for="remember_me" name="remember">Check me out</label>
                                </div>
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">Forgot Password</a>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary w-100">{{ ('Log in') }}</button>
                            <a href="{{route('google.login')}}" class="signin-google btn btn-outline-primary text-white w-100 mt-3 mb-3" type="">
                                <?xml version="1.0" ?><svg id="Capa_1" style="enable-background:new 0 0 150 150;" version="1.1" viewBox="0 0 150 150" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30px"><style type="text/css">
                                  .st0{fill:#030304;}
                                  .st1{fill:#EA4335;}
                                  .st2{fill:#4285F4;}
                                  .st3{fill:#FBBC04;}
                                  .st4{fill:#34A853;}
                                  .st5{fill:#4CAF50;}
                                  .st6{fill:#1E88E5;}
                                  .st7{fill:#E53935;}
                                  .st8{fill:#C62828;}
                                  .st9{fill:#FBC02D;}
                                  .st10{fill:#1565C0;}
                                  .st11{fill:#2E7D32;}
                                  .st12{fill:#F6B704;}
                                  .st13{fill:#E54335;}
                                  .st14{fill:#4280EF;}
                                  .st15{fill:#34A353;}
                                  .st16{clip-path:url(#SVGID_2_);}
                                  .st17{fill:#188038;}
                                  .st18{opacity:0.2;fill:#FFFFFF;enable-background:new    ;}
                                  .st19{opacity:0.3;fill:#0D652D;enable-background:new    ;}
                                  .st20{clip-path:url(#SVGID_4_);}
                                  .st21{opacity:0.3;fill:url(#_45_shadow_1_);enable-background:new    ;}
                                  .st22{clip-path:url(#SVGID_6_);}
                                  .st23{fill:#FA7B17;}
                                  .st24{opacity:0.3;fill:#174EA6;enable-background:new    ;}
                                  .st25{opacity:0.3;fill:#A50E0E;enable-background:new    ;}
                                  .st26{opacity:0.3;fill:#E37400;enable-background:new    ;}
                                  .st27{fill:url(#Finish_mask_1_);}
                                  .st28{fill:#FFFFFF;}
                                  .st29{fill:#0C9D58;}
                                  .st30{opacity:0.2;fill:#004D40;enable-background:new    ;}
                                  .st31{opacity:0.2;fill:#3E2723;enable-background:new    ;}
                                  .st32{fill:#FFC107;}
                                  .st33{opacity:0.2;fill:#1A237E;enable-background:new    ;}
                                  .st34{opacity:0.2;}
                                  .st35{fill:#1A237E;}
                                  .st36{fill:url(#SVGID_7_);}
                                  .st37{fill:#FBBC05;}
                                  .st38{clip-path:url(#SVGID_9_);fill:#E53935;}
                                  .st39{clip-path:url(#SVGID_11_);fill:#FBC02D;}
                                  .st40{clip-path:url(#SVGID_13_);fill:#E53935;}
                                  .st41{clip-path:url(#SVGID_15_);fill:#FBC02D;}
                                </style><g><path class="st14" d="M120,76.1c0-3.1-0.3-6.3-0.8-9.3H75.9v17.7h24.8c-1,5.7-4.3,10.7-9.2,13.9l14.8,11.5   C115,101.8,120,90,120,76.1L120,76.1z"/><path class="st15" d="M75.9,120.9c12.4,0,22.8-4.1,30.4-11.1L91.5,98.4c-4.1,2.8-9.4,4.4-15.6,4.4c-12,0-22.1-8.1-25.8-18.9   L34.9,95.6C42.7,111.1,58.5,120.9,75.9,120.9z"/><path class="st12" d="M50.1,83.8c-1.9-5.7-1.9-11.9,0-17.6L34.9,54.4c-6.5,13-6.5,28.3,0,41.2L50.1,83.8z"/><path class="st13" d="M75.9,47.3c6.5-0.1,12.9,2.4,17.6,6.9L106.6,41C98.3,33.2,87.3,29,75.9,29.1c-17.4,0-33.2,9.8-41,25.3   l15.2,11.8C53.8,55.3,63.9,47.3,75.9,47.3z"/></g></svg>
                                {{ ('Log in With Google') }}
                            </a>
                        </form>
                        <p class="text-center mb-0">Don't have an Account? <a href="{{route('register')}}">Register</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

    <!-- JavaScript Libraries -->
    @include('admin.partials.script')
</body>

</html>
