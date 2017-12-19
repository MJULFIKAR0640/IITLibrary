@include('inc.head')
@include('inc.header')
<!DOCTYPE html>
<body>
	@include('nav.commonNav')

    <div id="app">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
@include('inc.footer')
</html>
