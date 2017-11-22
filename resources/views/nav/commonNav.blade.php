@include('inc.head')
<nav class="navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="/">Home</a></li>
      <li><a href="/about">About</a></li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <!-- Authentication Links -->
        <li><a href="{{route('register') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="{{route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
  </ul>
</div>
</nav>