<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Eldoret &mdash; Prison System</title>

              <!-- Animate.css -->
      	<link rel="stylesheet" href="{{ asset ('css/animate.css')}}">
      	<!-- Icomoon Icon Fonts-->
      	<link rel="stylesheet" href="{{ asset ('css/icomoon.css')}}">
      	<!-- Magnific Popup-->
      	<link rel="stylesheet" href="{{ asset ('css/magnific-popup.css')}}">
      	<!-- Owl Carousel -->
      	<link rel="stylesheet" href="{{ asset ('css/owl.carousel.min.css')}}">
      	<link rel="stylesheet" href="{{ asset ('css/owl.theme.default.min.css')}}">
      	<!-- Bootstrap  -->
      	<link rel="stylesheet" href="{{ asset ('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{ asset ('/css/font-awesome.min.css')}}" media="screen" title="no title">

      	<!-- Cards -->
      	<link rel="stylesheet" href="{{ asset ('css/cards.css')}}">

        <link rel="shortcut icon" href="{{ asset ('imondcorp.ico')}}">

    </head>
    <div id="getty-page">


  		<div class="getty-cover getty-cover-style-2 js-full-height imond" data-stellar-background-ratio="0.5" data-next="yes">

  			<div class="getty-overlay"></div>
  			<div class="getty-cover-text">
  				<div class="container">
  					<div class="row">

              <div class="col-md-6 col-md-offset-3 full-height text-center">
              <div class="getty-cover-intro">

                <br><br><img src="images/prisons.jpg" width="150" height="150" alt="" /><br><br><br><br>
                <div class="panel panel-body imonda">
                  <h1 class="rgb(69,196,111)">Eldoret Prisons System</h1>
                  <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                      {{ csrf_field() }}

                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                          <div class="col-md-6">
                              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                              @if ($errors->has('email'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                          <label for="password" class="col-md-4 control-label">Password</label>

                          <div class="col-md-6">
                              <input id="password" type="password" class="form-control" name="password" required>

                              @if ($errors->has('password'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('password') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-md-6 col-md-offset-4">
                              <div class="checkbox">
                                  <label>
                                      <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                  </label>
                              </div>
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-md-8 col-md-offset-4">
                              <button type="submit" class="btn btn-primary">
                                  Login
                              </button>

                              <a class="btn btn-link" href="{{ route('password.request') }}">
                                  Forgot Your Password?
                              </a>
                              <a class="btn btn-link" href="{{ route('register') }}">
                                  Register
                              </a>
                          </div>
                      </div>
                  </form>
                </div>
              </div>
            </div>
  					</div>
  				</div>
  			</div>
  		</div>

      <!-- jQuery -->
	<script src="{{ asset ('js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{ asset ('js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset ('js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
   <script src="{{ asset ('js/jquery.waypoints.min.js')}}"></script>
	<!-- Owl Carousel -->
	<script src="{{ asset ('js/owl.carousel.min.js')}}"></script>
	<!-- Magnific Popup -->
	<script src="{{ asset ('js/jquery.magnific-popup.min.js')}}"></script>
	<!-- Stellar -->
	<script src="{{ asset ('js/jquery.stellar.min.js')}}"></script>
	<!-- countTo -->
	<script src="{{ asset ('js/jquery.countTo.js')}}"></script>
	<!-- WOW -->
	<script src="{{ asset ('js/wow.min.js')}}"></script>
	<script>
		new WOW().init();
	</script>
	<!-- Main -->
	<script src="{{ asset ('js/main.js')}}"></script>

    </body>
</html>
