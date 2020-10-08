<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Cube</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="/dashboard">Dashboard<span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            @auth
            {{Auth::user()->name}}
                @else
                Account
            @endauth
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            @guest
            <a class="dropdown-item" href="/login">Login</a>
            <a class="dropdown-item" href="/register">Register</a>
            @else
            {{-- <div class="dropdown-divider"></div> --}}
            <a class="dropdown-item" href="{{route('profile.edit')}}">Profile</a>
            <a class="dropdown-item" href="/logout"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit()">Logout</a>
            <form action="/logout" method="POST" id="logout-form">@csrf</form>
            @endguest
          </div>
        </li>

      </ul>
    </div>
  </nav>