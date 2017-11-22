@include('inc.head')
@include('inc.header')
<!DOCTYPE html>
<body>

	@if(Auth::user()->type =='admin')
	    @include('nav.adminNav')
	  @elseif(Auth::user()->type =='librarian')
	    @include('nav.librarianNav')
	  @elseif(Auth::user()->type ==('student'|| 'teacher'))
	    @include('nav.studentTeacherNav')
	@endif

    <div id="app">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
@include('inc.footer')
</html>
