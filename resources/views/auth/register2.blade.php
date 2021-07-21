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
							<a href="signup.html">Sign up here</a> &nbsp;
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</div>
						<div class="clearfix">
						</div>
						<div class="sform">
							<h1>Sign Up</h1>
							<span>Hello there! Sign up and start managing your item.</span>
							<form class="sinup" action="#">
								<div class="signprofile">
									<img src="images/profile/profile.png" alt="">
									<div class="sinup-img">
									<a href="#">	
										<img src="images/profile/editicon.png" alt="">
									</a>
									</div>
								</div>
								
								<div class="profilename">
									John Doe
									<p>Pages with profile pictures show up higher in search result.</p>
								</div>
								<div class="addpic" id="OpenImgUpload">
									<button class="addborder">Add a Profile Picture</button>
									<input type="file" name="myfile">
									<p>A square photo or logo works well here</p>
								</div>
								<a href="signupnext.html" class="black">back</a>
								<a href="singupcover.html" class="btn">Next</a>
							</form>

						</div>
					</div>
					<div class="footer-sign">
						<div class="p-left col-md-8 footermenu">
							<ul>
								<li><a href="#">About  </a></li>
								<li><a href="#">Faq’s</a></li>
								<li><a href="#"> Privacy policy</a></li>
								<li><a href="#">Advertise</a></li>
								<li><a href="#">career</a></li>
								<li><a href="#">Term and conditions </a></li>
								<li><a href="#">Press</a></li>
								<li><a href="#">Sitemap</a></li>
								<li><a href="#">Tags</a></li>
								<li><a href="#">Blogs</a></li>
							</ul>
						</div>
						<div class="p-left col-md-4 copyrightsign text-right">
							<a target="_blank" href="https://www.templateshub.net">Templates Hub</a>
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