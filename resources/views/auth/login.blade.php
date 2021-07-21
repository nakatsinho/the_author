@extends('layouts.auth')

@section('auth')
<div class="sign">
    <div class="container">
        <div class="row">
            <div class="bg-form">
                <div class="sinheader">
                    <div class="col-md-6">
                        <!-- <img src="images/header/logo.png" alt=""> -->
                    </div>
                    <div class="sings col-md-6">
                        <a href="{{route('register')}}">Sign up here</a> &nbsp;
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                    </div>
                    <div class="clearfix">
                    </div>
                    <div class="sform">
                        <h1>Sign in</h1>
                        <span>Hello there! Sign in and start managing your items.</span>
                        <form class="sinup" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="input-container">
                                <input class="input-field" type="text" placeholder="Email" name="email">
                                <i class="fa fa-envelope icon"></i>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="input-container">
                                <input class="input-field" type="password" placeholder="Password" name="psw">
                                <i class="fa fa-eye-slash" aria-hidden="true"></i>
                            </div>

                            <button type="submit" class="btn">Sign in</button>
                            <div class="forgets">
                                <a href="{{ route('password.request') }}">
                                    Forgot password?
                                </a>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="footer-sign">
                    <div class="p-left col-md-8 footermenu">
                        <ul>
                            <li><a href="#">About </a></li>
                            <li><a href="#"> Privacy policy</a></li>
                            <li><a href="#">Term and conditions </a></li>
                            <li><a href="#">Sitemap</a></li>
                        </ul>
                    </div>
                    <div class="p-left col-md-4 copyrightsign text-right">
                        <a target="_blank" href="https:wa.me/+258825248888">Kelton Cumbe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="container">
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