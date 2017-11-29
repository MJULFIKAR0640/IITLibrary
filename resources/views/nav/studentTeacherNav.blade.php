@include('inc.head')
<nav class="navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="{{route('homeUser')}}">Home</a></li>
      <li><a href="{{route('remark_book')}}">Remark Book</a></li>
      <li><a href="{{route('extend_time')}}">Extend Time</a></li>
      <li><a href="{{route('reserve_book')}}">Reserve Book</a></li>
      <li><a href="{{route('request_new_book')}}">Request New Book</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{route('borrowed_book_list')}}">Requested / Borrowed Books</a></li>
      <!-- Authentication Links -->
      @if (Auth::guest())
        <li><a href="{{route('register') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="{{route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
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
