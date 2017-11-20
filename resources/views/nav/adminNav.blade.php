@include('inc.head')
<nav class="navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">

      <li><a href="#">Account Approval</a></li>
      <li><a href="#">Set due date</a></li>
      <li><a href="#">Set fine</a></li>
      <li id="student_info" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Manage User<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Apporeve Request</a></li>
          <li><a href="#">Delete request</a></li>
        </ul>
      </li>
      
    </ul>
    
    <ul class="nav navbar-nav navbar-right">
      <!-- Authentication Links -->
      @if (Auth::guest())
        <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
      @else
      <li id="student_info" class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class=" glyphicon glyphicon-user" style="padding-right: 5px"></span><span  style="padding-right: 5px">{{ Auth::user()->name }}</span><span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li>
            <a href="{{route('password.request')}}"><span>Reset Password</span></a>
          </li>
          <li>
            <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"><span> Log Out</span>
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
</nav>



