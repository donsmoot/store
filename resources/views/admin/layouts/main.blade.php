<!doctype html>
<html lang="en">
@include('admin.layouts.head')
<body>
<div class="wrapper">
    @include('admin.layouts.header')
    @include('admin.layouts.left_menu')
    @yield('content')
</div>
@include('admin.layouts.footer_scripts')
</body>
</html>
