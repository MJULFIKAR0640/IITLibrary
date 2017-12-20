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
	@else
	@include('nav.adminNav')  
	@endif 
	
    <div id="app" style="margin-bottom: 40px;">
        @yield('content')
    </div>
    @include('inc.footer')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
