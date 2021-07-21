@extends('layouts.auth')

@section('auth')
<div class="sign">
    <div class="container">
        <div class="row">
            <div class="bg-form">
                <div class="sinheader">
                    <div class="col-md-6">
                        <img src="images/header/logo.png" alt="">
                    </div>
                    <div class="sings col-md-6">
                        <a href="signin.html">Have an already account! Sign in here</a> &nbsp;
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                    </div>
                    <div class="clearfix">
                    </div>
                    <div class="sform">
                        <h1>Sign Up</h1>
                        <span>Hello there! Sign up and start managing your item.</span>
                        <form class="sinup" action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="input-container">
                                <input class="input-field" type="text" placeholder="Complete Name (Name & Surname)" name="name">
                            </div>
                            <div class="input-container">
                                <p>Select Date</p>
                                <input class="input-field form-control" type="date" placeholder="Birthday Date" name="bith">
                            </div>
                            <div class="input-container">
                                <p>Select Gender</p>

                                @foreach($gender as $id=>$value)
                                <label class="checkcontainer">
                                    <input type="checkbox" name="gender_id[]" value="{{$id}}">
                                    <span class="checkmark"></span>
                                    <span>{{$value}}</span>
                                </label>
                                @endforeach

                            </div>

                            <div class="custom1-select">
                                <select name="country_id">
                                    <option value="0">Select Country:</option>
                                    @foreach($country as $id=>$value)
                                    <option value="{{$id}}">{{$value}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="input-container">
                                <input class="input-field" type="text" placeholder="Email" name="email">

                            </div>

                            <div class="input-container">
                                <input class="input-field" type="password" placeholder="Password" name="password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="input-container">
                                <input id="password-confirm" placeholder="Re-type Password" type="password" class="input-field" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <button type="submit" class="btn">Next</button>

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