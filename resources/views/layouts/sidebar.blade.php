<ul class="sidebar navbar-nav">
			<li class="nav-item active">
				<a href="/"><img src="{{asset('images/menu-icon/Homeicon.png')}}" title="" alt="">
					<div class="fos" id="foo">Home</div>
				</a>
			</li>
			<li><a href="{{ route('books.create') }}"><img src="{{asset('images/menu-icon/Categoryicon.png')}}" title="" alt="">
					<div class="fos" id="foo1"> Adding Book </div>
				</a></li>
			<li><a href="{{ route('books.index') }}"><img src="{{asset('images/menu-icon/Categoryicon.png')}}" title="" alt="">
					<div class="fos" id="foo1"> My Books </div>
				</a></li>
			<li><a href="{{ route('profile.create') }}"><img src="{{asset('images/menu-icon/flag.png')}}" title="" alt="">
					<div class="fos" id="foo2">Find Profiles</div>
				</a></li>

			<li> <a href="{{ route('sharing.index')}}"><img src="{{asset('images/menu-icon/info.png')}}" title="" alt="">
					<div class="fos" id="foo8">Shared Books</div>
				</a></li>
			<li> <a href="#"><img src="{{asset('images/menu-icon/setting.png')}}" title="" alt="">
					<div class="fos" id="foo9">Setting</div>
				</a></li>
			<li class="mpadding"><a href="#"><img src="{{asset('images/menu-icon/user.png')}}" title="" alt="">
					<div class="fos" id="foo10"> Send Feedback</div>
				</a></li>

		</ul>