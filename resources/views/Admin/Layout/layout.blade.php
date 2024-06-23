<!DOCTYPE html>
<html lang="en">
<head>
    @include('Admin.Includes.header')
</head>
<body class="loading" data-layout-color="light" data-layout-mode="default" data-layout-size="fluid" data-topbar-color="light" data-leftbar-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='true'>
    <div id="wrapper">
        @include('Admin.Includes.navbar')
        @yield('content')
    </div>
    @include('Admin.Includes.footer')
    @include('Admin.Includes.scripter')
</body>
</html>