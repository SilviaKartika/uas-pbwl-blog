<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistem Informasi Music Player</title>
        <link type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('bootstrap/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
		<script src="{{ asset('bootstrap/js/jquery.min.js') }}"></script>
  <script src="{{ asset('bootstrap/js/bootstrap.min.css') }}"></script>
        <link type="text/css" href="{{ asset('css/theme.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('images/icons/css/font-awesome.css') }}" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
		<style>
			.footer {
			   position: fixed;
			   left: 0;
			   bottom: 0;
			   padding:20px 0;
			   width: 100%;
			   background-color: black;
			   color: white;
			   text-align: center;
			}
		</style>
    </head>
    <body style="background-color:#FFFAFA;">
       	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="{{ url('/home') }}">Home</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Category
      </a>
      <div class="dropdown-menu">
     	 <a class="dropdown-item" href="{{ url('/category') }}">Tampil</a>
        <a class="dropdown-item" href="{{ url('category/create') }}">Tambah</a>
      </div>
    </li>
  </ul>
  <ul class="navbar-nav">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Post
      </a>
      <div class="dropdown-menu">
     	 <a class="dropdown-item" href="{{ url('/post') }}">Tampil</a>
        <a class="dropdown-item" href="{{ url('post/create') }}">Tambah</a>
      </div>
    </li>
  </ul>
  <ul class="navbar-nav">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Photo
      </a>
      <div class="dropdown-menu">
     	 <a class="dropdown-item" href="{{ url('/photo') }}">Tampil</a>
        <a class="dropdown-item" href="{{ url('photo/create') }}">Tambah</a>
      </div>
    </li>
  </ul>
  <ul class="navbar-nav">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Album
      </a>
      <div class="dropdown-menu">
     	 <a class="dropdown-item" href="{{ url('/album') }}">Tampil</a>
        <a class="dropdown-item" href="{{ url('album/create') }}">Tambah</a>
      </div>
    </li>
  </ul>
  <a class="navbar-brand" href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
</nav>
            <div class="container">
                <div class="row">
                    <div class="span3">
                        
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            @yield('content')
                            <!--/.module-->
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container" align="center">
                <b class="copyright">&copy; 2020 Silvia Kartika</b>
            </div>
        </div>
        <script src="{{ asset('scripts/jquery-1.9.1.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('scripts/jquery-ui-1.10.1.custom.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('scripts/flot/jquery.flot.js') }}" type="text/javascript"></script>
        <script src="{{ asset('scripts/flot/jquery.flot.resize.js') }}" type="text/javascript"></script>
        <script src="{{ asset('scripts/datatables/jquery.dataTables.js') }}" type="text/javascript"></script>
        <script src="{{ asset('scripts/common.js') }}"" type="text/javascript"></script>
      
    </body>