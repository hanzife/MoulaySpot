<link rel="stylesheet" href="{{ asset('css/Signup.css') }}" />

@extends('layouts.master')

@section('content')
<div class="sb1-container">
        <div class="sb1-sub-container">
            <div><img src="images/logos/logo3.svg" alt="" /></div>
            <div class="sb1-title">Join MoulaySpot</div>
            <div class="sb1-form">
                <form method="POST" action="{{ route('register') }}">
                @csrf
                    <!-- Name -->
                    <label for="name">Full Name</label><br />
                    <!-- <input type="text" id="li-id" name="" required placeholder="Your Name" /><br /> -->
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Your Name" autofocus><br>
                    <div id="li-id-error" class="sb1-error"></div>
                    <div class="sb1-blank-20"></div>

                    <!-- Email -->
                    <label for="email">Email</label><br />
                    <!-- <input type="text" id="li-id" name="" required placeholder="example@domaine.com" /><br /> -->
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="example@domaine.com" autocomplete="email">
                    <div class="sb1-blank-20"></div>

                    <!-- Password -->
                    <label for="password">Password</label><br />
                    <!-- <input type="password" id="li-pass" name="" placeholder="••••••••" required /><br /> -->
                    <input id="password" type="password" placeholder="••••••••" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"><br>

                    <div id="li-pass-error" class="sb1-error"></div>

                    <div class="sb1-blank-20"></div>

                    <label for="password-confirm"> password-confirm</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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
                Already have an account yet? <a href="">Log in → </a>
            </div>
        </div>
</div>

<!-- 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
