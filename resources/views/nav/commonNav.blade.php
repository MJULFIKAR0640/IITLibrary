@include('inc.head')
<nav class="navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="/">Home</a></li>
      <li><a href="/about">About</a></li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <!-- Authentication Links -->
      @if (Auth::guest())
      <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>

      @else
      <li>
        <li>
          <a href="#"><span class=" glyphicon glyphicon-user"></span><span style="padding-left: 5px">{{ Auth::user()->name }}</span></a>
        </li>
        </li>
        <li>
          <a class="btn btn-link" href="{{route('password.request')}}">Reset Password</a>
        </li>
        <li>
          <a href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();"><span class="glyphicon glyphicon-log-out"></span><span> Log Out</span>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
        </li>
    @endif
    </ul>
  </div>
</nav>