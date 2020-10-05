<!DOCTYPE html>
<html lang="en">
@include('admin.layout.head');
<body>
@include('admin.layout.nav');
@include('admin.layout.aside');

@yield('content')
@include('admin.layout.script')
@include('admin.layout.footer')

</body>
</html>