@include('inc.head')
@include('inc.header')
<!DOCTYPE html>
<body>
    <div id="app">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
@include('inc.footer')
</html>
