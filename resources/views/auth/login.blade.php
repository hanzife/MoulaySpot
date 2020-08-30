<link rel="stylesheet" href="{{ asset('css/Signup.css') }}" />

    <title>Login</title>
@extends('layouts.master')

@section('content')

<div class="sb1-blank-51"></div>

<div class="sb1-container">
    <div class="sb1-sub-container">
        <div><img src="images/logos/logo3.svg" alt="" /></div>
        <div class="sb1-title">Join MoulaySpot</div>
        <div class="sb1-form">
            <form method="POST" action="{{ route('login') }}">
            @csrf

                <label for="email">Email</label><br />
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="example@domaine.com" value="{{ old('email') }}" required autocomplete="email" autofocus>

                <!-- <input type="text" id="li-id" name="" required placeholder="example@domaine.com" /><br /> -->
                <div class="sb1-blank-20"></div>





                <label for="password">Password</label><br />
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="••••••••"  required autocomplete="current-password">
               
                <!-- <input type="password" id="li-pass" name="" placeholder="••••••••" required /><br /> -->

                <div id="li-pass-error" class="sb1-error"></div>

                <div class="sb1-blank-20"></div>

                <div class="sb1-submit">

                    <button class="sb1-continue" type="submit" value="Submit" name="" id="li-login">
                        Sign up
                    </button>
                </div>
            </form>
        </div>
        <div class="sp1-fancySeperator"></div>
        <div class="sp1-cpmtExist">
            Don't have an account yet? <a href="">Sign up → </a>
        </div>
    </div>
</div>

<div class="sb1-blank-50"></div>

<!-- 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
