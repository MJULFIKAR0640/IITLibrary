@include('inc.head')
@include('inc.header')
<!DOCTYPE html>
<body>
	@include('nav.commonNav')

    <div id="app" style="margin-bottom: 40px;>
        @yield('content')
    </div>
	@include('inc.footer')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
