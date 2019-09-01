@extends('layouts.app')

@section('content')

    @include('includes.navbar')

        <div class="u-flex-container">
            <div class="section-login">
                <div class="login-container u-margin-top-medium">
                    <h2 class="heading-secondary">What will you listen to <br> today?</h2>
                    <div class="login-container__o-auth-buttons u-margin-top-small">
                        <button class="o-auth-btn o-auth-btn--facebook">
                            <svg class="o-auth-btn__icon">
                                <use xlink:href="img/facebook-icon.svg#Capa_1"></use>
                            </svg>        
                            <span class="o-auth-btn__text">Facebook</span>
                        </button>
                        <button class="o-auth-btn o-auth-btn--google">
                            <svg class="o-auth-btn__icon">
                                <use xlink:href="img/google-icon.svg#Layer_1"></use>
                            </svg>        
                            <span class="o-auth-btn__text">Google</span>
                        </button>
                    </div>
                    <!-- Login form -->
                    <form action="{{ route('login') }}" method="post">
                        @csrf

                        <div class="login-container__inputs u-margin-top-medium">

                            <!-- Make red outline when user writes invalid email -->
                            <input class="login-container__input u-margin-bottom-small" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus id="email" placeholder="Email address">

                            <input class="login-container__input" type="password" name="password" id="password" required autocomplete="current-password" placeholder="Password">
                        </div>

                        <div class="btn-center">
                            <button type="submit" class="btn btn__primary--red u-margin-top-small">Log in</button>
                        </div>
                    </form>
                    <!-- @if (Route::has('password.request')) -->
                        <a href="{{ route('password.request') }}" class="login-container__btn-link u-margin-top-small">
                            {{ __('Forgotten your password?') }}
                        </a>
                        <p class="login-container__not-registered">Not registered on Deezer yet?<a href="/register" class="login-container__not-registered--bold"> Sign up</a></p>
                    <!-- @endif  -->
                </div>
                
                
            </div>
            <div class="img-right">
                <img src="img/login_img.jpg" alt="Login img">
            </div>
        </div>
        



    @include('includes.footer')


@endsection
