<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login | Qusero </title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/favicon.png') }}">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box">
					<div class="content">
						<div class="header">
							<div class="logo text-center"><img src="assets/img/logo.png" alt="DiffDash"><a href="/">xd</a></div>
							<p class="lead">{{ __('Login') }}</p>
						</div>
                        <form class="form-auth-small"  method="POST" action="{{ route('quesero.auth.loginQuesero') }}">
                            @csrf
                            
							<div class="form-group">
								<label for="signin-email" class="control-label sr-only">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                @if (Session::has('error'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ Session::get('error') }}</strong>
                                    </span>
                                @endif
							</div>
							<div class="form-group">
								<label for="signin-password" class="control-label sr-only">{{ __('Password') }}</label>
								<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
							</div>
							<div class="form-group clearfix">
								<label class="fancy-checkbox element-left">
                                        <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <span class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </span>
								</label>
								<!--span class="helper-text element-right">Don't have an account? <a href="page-register.html">Register</a></span-->
							</div>
							<button type="submit" class="btn btn-primary btn-lg btn-block">{{ __('Login') }}</button>
							<div class="bottom">
								@if (Route::has('password.request'))
									<span class="helper-text"><i class="fa fa-lock"></i> <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a></span>
								@endif
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
