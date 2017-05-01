<!DOCTYPE html>
<html lang="en">

    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible">
      <title>Prisons Management System</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="Prisons System" />
      <meta name="keywords" content="" />
      <meta name="author" content="Getty" />

        <!-- Facebook and Twitter integration -->
      <meta property="og:title" content=""/>
      <meta property="og:image" content=""/>
      <meta property="og:url" content=""/>
      <meta property="og:site_name" content=""/>
      <meta property="og:description" content=""/>
      <meta name="twitter:title" content="" />
      <meta name="twitter:image" content="" />
      <meta name="twitter:url" content="" />
      <meta name="twitter:card" content="" />

      <link rel="shortcut icon" href="{{ asset ('imondcorp.ico')}}">

        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Jun">

        <!-- Font Awesome -->
        <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="{{asset('css/gentelella.min.css')}}" rel="stylesheet">


    </head>

    <body class="nav-md">
        <div class="container body has-header">

            <div class="main_container">

                @include('includes/sidebar')

                @include('includes/topbar')

                @yield('main_container')

            </div>
        </div>

        <footer class="imond">
            <div class="pull-right">
                System By <a href="#">Getty</a>
            </div>
            <div class="clearfix"></div>
        </footer>

        <!-- jQuery -->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <!-- Bootstrap -->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <!-- Custom Theme Scripts -->
        <script src="{{asset('js/gentelella.min.js')}}"></script>

    </body>
</html>
