@include('inc.head')
<nav class="navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="/">Home</a></li>
      <li><a href="/about">About</a></li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
<<<<<<< HEAD
      <!-- Authentication Links -->
        <li><a href="{{route('register') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="{{route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
  </ul>
</div>
=======
     <!--  <li><button class="btn btn-default navbar-btn">Search Book</button></li> -->
      <li><span class="glyphicon glyphicon-user" data-toggle="modal" data-target="#signUp"></span> Sign Up</a></li>
      <li><span class="glyphicon glyphicon-log-in" data-toggle="modal" data-target="#signIn"></span> Login</a></li>
    </ul>
  </div>
>>>>>>> master
</nav>