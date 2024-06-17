<!doctype html>
<html lang="en">
<head>
    @include('Admin.Includes.header')
</head>
<body>
    <div class="wrapper">
        @include('Admin.Includes.navbar')
        @yield('content')
        @include('Admin.Includes.footer')
    </div>
    @include('Admin.Includes.scripter')
</body>
</html>