@extends('layouts.app')

@section('content')

    @include('includes.navbar')

        <div class="u-flex-container">
            <div class="section-register">
                <div class="register-container u-margin-top-medium">
                    <h2 class="heading-secondary">Ready to sign up?</h2>
                    <div class="register-container__o-auth-buttons u-margin-top-small">
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

                    <!-- Register form -->
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="register-container__inputs u-margin-top-medium">
                            <input class="register-container__input u-margin-bottom-small @error('name') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus id="email" placeholder="Email address">
                            <input class="register-container__input u-margin-bottom-small" type="text" name="username" id="username" required placeholder="Username">
                            <input class="register-container__input" type="password" name="password" id="password" required autocomplete="current-password" placeholder="Password">
                            <div class="register-container__selects-container u-margin-top-small">
                                
                                <select class="register-container__select" name="gender" id="gender">
                                    <option selected disabled>Gender </option>
                                    <option value="Female">Female</option>
                                    <option value="Male">Male</option>
                                    <option value="Other">Other</option>
                                </select>

                                
                                <select class="register-container__select" name="age" id="age">
                                    <option selected disabled>Age</option>
                                    @for($i = 10; $i < 100; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>

                        <div class="btn-center">
                            <button type="submit" class="btn btn__primary--red u-margin-top-small">Sign up</button>
                        </div>
                    </form>
                    <p class="register-container__accept-terms u-margin-top-small">By clicking on "Sign up", you accept the <br><a href="/legal/tac" class="register-container__btn-link"> Terms and Conditions of Use</a></p>
                    
                </div>
                @if(count($errors) > 0)
                    @foreach($errors->all() as $error)
                    <div class="u-center-text">
                        <strong>{{ $error }}</strong>
                    @endforeach
                    </div>
                @endif
            </div>
            <div class="img-right">
                <img src="img/signup_girl.jpg" alt="Login img">
            </div>
        </div>
        



    @include('includes.footer')


@endsection
