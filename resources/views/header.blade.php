<!DOCTYPE html>
<html>
<head>
	<title> Student management </title>
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/parsley.css')}}">
</head>
<body>


<div class="container" style="width:100%;">

<!-- Static navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Laravel CRUD Project</a>
    </div>


    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{route('index')}}">Home</a></li>
        <li><a href="{{route('create')}}">Create</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
          @if(Auth::check())
          <li><a href="{{route('home')}}">Dashbord</a></li>
          @else
          <li><a href="{{route('login')}}">Login</a></li>
          <li><a href="{{route('register')}}">Registration</a></li>
          @endif
      </ul>
 
  
    </div><!--/.nav-collapse -->
  </div><!--/.container-fluid -->
</nav>

<!-- Main component for a primary marketing message or call to action -->


</div>
 <!-- /container -->

 <div class="container">
      @yield('content')
 </div>


<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/parsley.min.js')}}"></script>

</body>
</html>