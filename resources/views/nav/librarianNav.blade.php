@include('inc.head')
<nav class="navbar-inverse">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      <li><a href="{{route('searchBookByLibrarian')}}">Search Book</a></li>
      <li><a href="{{route('issued_book_list')}}">Issued Book List</a></li>
      <li id="student_info" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Requests <span class="badge" style="padding-left: 5px">7</span><span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="{{route('book_issue_approval')}}">Book Issue <span class="badge" style="padding-left: 5px">7</span></a></li>
          <li><a href="{{route('book_remark_approval')}}">Book Remark <span class="badge" style="padding-left: 5px">7</span></a></li>
          <li><a href="{{route('time_extension_approval')}}">Time Extention <span class="badge" style="padding-left: 5px">7</span></a></li>
        </ul>
      </li>
      <li><a href="{{route('manageBook')}}">Manage Book</a></li>
      <li><a href="{{route('new_book_request')}}">New Book Requests</a></li>

    </ul>
    <ul class="nav navbar-nav navbar-right">
      <!-- Authentication Links -->
      @if (Auth::guest())
        <li><a href="{{route('register') }}"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="{{route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
      @else
      <li id="student_info" class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class=" glyphicon glyphicon-user" style="padding-right: 5px"></span><span  style="padding-right: 5px">{{ Auth::user()->name }}</span><span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li>
            <a href="{{route('password.request')}}"><span>Change Password</span></a>
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
