@extends('layouts.masterlogin')

@section('css')
	<link href="{{ asset("css/login/popuo-box.css") }}" rel="stylesheet" type="text/css" media="all"/>
	<link rel="stylesheet" href="{{ asset("css/login/style.css") }}" type="text/css" media="all">
	<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
@endsection

@section('content')
	<div class="w3layoutscontaineragileits">
		<h2>Login here</h2>
		<form action="{{ route('checkLogin') }}" method="post">
			@csrf
			<input type="email" name="email" placeholder="EMAIL" required="">
			<input type="password" name="password" placeholder="PASSWORD" required="">
			<ul class="agileinfotickwthree">
				<li>
					<a href="{{ route('account-foget') }}">Forgot password?</a>
				</li>
			</ul>
			<div class="aitssendbuttonw3ls">
				<input type="submit" value="LOGIN">
				<p> To register new account <span>→</span> <a class="w3_play_icon1" href="#small-dialog1"> Click Here</a></p>
				<div class="clear"></div>
			</div>
		</form>
	</div>
	
	<!-- for register popup -->
	<div id="small-dialog1" class="mfp-hide">
		<div class="contact-form1">
			<div class="contact-w3-agileits">
				<h3>Register</h3>
				<form action="{{ route('createUser') }}" method="post">
					@csrf
					<div class="form-sub-w3ls">
						<input placeholder="User Name"  type="text" required="" name="username">
					</div>
					<div class="form-sub-w3ls">
						<input placeholder="Email" class="mail" type="email" required="" name="email">
					</div>
					<div class="form-sub-w3ls">
						<input placeholder="Password" class="password"  type="password" required="" name="password">
					</div>
					<div class="form-sub-w3ls">
						<input placeholder="Confirm Password" class="confirmpassword"  type="password" required="">
					</div>
					<div class="submit-w3l">
						<input type="submit" value="Register" class="regis-submit">
					</div>
				</form>
			</div>
		</div>	
	</div>
@endsection

@section('js')
	@if (\Session::has('checklogin'))
		<script>
			alert("ERROR!!! Your email or password")
		</script>
		@php
			\Session::forget('checklogin');
		@endphp
	@endif
	@if (\Session::has('recoveryid'))
		<script>
			alert('Change password correct !');
		</script>
		@php
			\Session::forget('recoveryid');
		@endphp
	@endif
	<script type="text/javascript" src="{{ asset("js/login/jquery-2.1.4.min.js") }}"></script>
	<script src="{{ asset("js/login/jquery.magnific-popup.js") }}" type="text/javascript"></script>
	<script>
		$(document).ready(function() {
			$('.w3_play_icon1').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});
																		
		});
		$('.regis-submit').click(function(e){
			if (($('.password').val()).length < 8) {
				e.preventDefault();
				alert("Password length more than 8 characters !!!")
			}
			if($('.password').val() != $('.confirmpassword').val()) {
				e.preventDefault();
				alert("Confirm Password Error !!!")
			}
		})
	</script>
@endsection