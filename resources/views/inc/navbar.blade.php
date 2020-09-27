<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
      <div class="navbar-header">
          <!-- Branding Image -->
          <span class="navbar-brand">
            {{ config('app.name', 'Laravel') }}
          </span>
      </div>

      <div class="collapse navbar-collapse" id="app-navbar-collapse">
          <!-- Left Side Of Navbar -->
          <ul class="nav navbar-nav  mr-auto">
            <li><a class="nav-link" href="/">Home</a></li>
            <li><a class="nav-link" href="/about">About</a></li>
            <li><a class="nav-link" href="/events">Events</a></li>
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="nav navbar-nav">
              <!-- Authentication Links -->
              @if (Auth::guest())
                  <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                  <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
              @else
                  <li class="dropdown">
                      <a href="#" class="nav-link dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenuLink">
                          <li><a class="btn btn-block" href="/dashboard">Dashboard</a></li>
                          <hr>
                          <li>
                              <a class="btn btn-block" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                  Logout
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                              </form>
                          </li>
                      </ul>
                  </li>
              @endif
          </ul>
      </div>

      <!-- Collapsed Hamburger -->
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#app-navbar-collapse" aria-controls="app-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  </div>
</nav>