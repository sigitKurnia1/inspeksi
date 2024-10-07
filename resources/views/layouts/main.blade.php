<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')

    <title>@yield('title')</title>
</head>
<body>
    @include('sweetalert::alert')

    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            @include('layouts.navbar')

            @include('layouts.sidebar')

            @yield('content')

            @include('layouts.footer')
        </div>
    </div>

    @include('layouts.script')
</body>
</html>