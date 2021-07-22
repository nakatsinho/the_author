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
                                <input class="input-field" type="password" placeholder="Password" name="password">
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
@endsection