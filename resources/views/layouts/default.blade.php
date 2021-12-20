<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head')
</head>
<body>
    @include('partials.header')
    <main>@yield('content')</main>
    @include('partials.footer')
</body>
</html>