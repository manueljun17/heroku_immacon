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
                        <!--<li class="nav-item"><a  class="nav-link" href="/login">Login</a></li>
                        <li class="nav-item"><a  class="nav-link" href="/register">Register</a></li>-->
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
    <div class="banner">
        <img src="{{asset($contact_info['image_banner'])}}">

    </div>
</header>