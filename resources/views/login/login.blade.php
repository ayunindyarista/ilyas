<html lang="en"><head>
	<title>LPPM | Dashboard</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('login_v14/images/icons/favicon.ico') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login_v14/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login_v14/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login_v14/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login_v14/vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('login_v14/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login_v14/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login_v14/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('login_v14/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('login_v14/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('login_v14/css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('{{ asset('login_v14/images/icons/LPPM.jpg') }}');">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w" action="/login/cek" method="POST">
                    {{ csrf_field() }}
                        <span class="login100-form-title p-b-32">
                            Account Login
                        </span>

                        @if ($message = Session::get('daftar'))
                            <div class="alert alert-success alert-block">
                                <strong>{{ $message }}</strong>
                            </div>
				        @endif

                        <span class="txt1 p-b-11">Username</span>
                        <div class="wrap-input100 validate-input m-b-36" data-validate="Username is required">    
                            <input class="input100" type="text" name="username">
                            <span class="focus-input100"></span>
                        </div>
                        @if ($message = Session::get('fusername'))
					        <strong style="margin-bottom:5px;font-family:inherit;color:#DC143C">{{ $message }}</strong>
				  	    @endif

                        <span class="txt1 p-b-11">Password</span>
                        <div class="wrap-input100 validate-input m-b-12" data-validate="Password is required">
                            <!-- <span class="btn-show-pass"><i class="fa fa-eye"></i></span> -->
                            <input class="input100" type="password" name="pass">
                            <span class="focus-input100"></span>
                        </div>
                        @if ($message = Session::get('fpassword'))
					        <strong style="margin-bottom:5px;font-family:inherit;color:#DC143C">{{ $message }}</strong>
				  	    @endif
                        
                        <div class="flex-sb-m w-full p-b-48">
                            <div class="contact100-form-checkbox">
                                <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                                <label class="label-checkbox100" for="ckb1">
                                    Remember me
                                </label>
                            </div>

                            <!-- <div>
                                <a href="#" class="txt3">
                                    Forgot Password?
                                </a>
                            </div> -->
                        </div>

                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                Login
                            </button>
                        </div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('js/main.js') }}"></script>


</body></html>