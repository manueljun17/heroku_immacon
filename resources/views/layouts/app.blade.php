<!DOCTYPE html>
<html>
<head>
    <title>ImmaconAngelesCiityPH</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::to('src/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{!! elixir('css/app.css') !!}">
    <link rel="stylesheet" type="text/css" href="{!! elixir('css/clock.css') !!}">
    <link href="{{ URL::to('src/js/jqueryui/jquery-ui.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('src/js/jqueryui/jquery-ui.theme.min.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('src/fa/css/font-awesome.css') }}">
</head>
<body>
    <header>          
 
    <nav class="navbar navbar-inverse navbar-toggleable-md">
      <div class="container">
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExampleContainer" aria-controls="navbarsExampleContainer" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="/">ImmaconAngelesCityPH CHURCH</a>

        <div class="navbar-collapse collapse" id="navbarsExampleContainer" aria-expanded="false">
                        

                @if(!Auth::check())
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item"><a  class="nav-link" href="/events">Events</a></li>
                        <li class="nav-item"><a  class="nav-link" href="/organizations">Organizations</a></li>
                        <li class="nav-item"><a  class="nav-link" href="/parishofficers">Parish Officers</a></li>
                        <li class="nav-item"><a  class="nav-link" href="/about">About</a></li>
                        <li class="nav-item"><a  class="nav-link" href="/contact">Contact Us</a></li>   
                        <li class="nav-item"><a  class="nav-link" href="/login">Login</a></li>
                        <li class="nav-item"><a  class="nav-link" href="/register">Register</a></li>
                    </ul>
                @else
                    @if(Auth::user()->hasRole('Admin'))
                        <ul class="nav navbar-nav mr-auto">   
                            <li class="nav-item"><a  class="nav-link" href="/admin/parishofficers">Parish Officers</a></li>
                            <li class="nav-item"><a  class="nav-link" href="/admin/organizations">Organizations</a></li>
                            <li class="nav-item"><a  class="nav-link" href="/admin/events">Events</a></li>
                            <li class="nav-item"><a  class="nav-link" href="/admin/about">About</a></li>
                            <li class="nav-item"><a  class="nav-link" href="/admin/contact">Contact Us</a></li>
                            <li class="nav-item"><a  class="nav-link" href="/admin/configs">Config</a></li>
                            <li class="nav-item"><a  class="nav-link" href="/admin/users">Users</a></li>
                            <li class="nav-item"><a  class="nav-link" href="/logout">Logout</a></li>
                        </ul>
                    @else
                        <ul class="nav navbar-nav mr-auto">   
                            <li class="nav-item"><a  class="nav-link" href="/logout">Logout</a></li>
                        </ul>
                    @endif
                @endif
 
        </div>
      </div>
    </nav>
   
</header>
<div class="container">
    @yield('content')
</div>
    <script src="{{ URL::to('src/js/jquery/jquery.js') }}"></script>
    <script src="{{ URL::to('src/js/tether/tether.js') }}"></script>
    <script src="{{ URL::to('src/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::to('src/js/jqueryui/jquery-ui.min.js') }}"></script>
    <script src="{!! elixir('js/clock.js') !!}"></script>
 
</body>
</html>