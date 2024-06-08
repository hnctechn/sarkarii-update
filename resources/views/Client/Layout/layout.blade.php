<!doctype html>
<html lang="en">
<head>
    @include('Client.Includes.header')
</head>
<body>
    <div class="wrapper">
        @include('Client.Includes.navbar')
        @yield('content')
        @include('Client.Includes.footer')
    </div>
    @include('Client.Includes.scripter')
</body>
</html>