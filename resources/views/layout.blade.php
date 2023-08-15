<!DOCTYPE html>
<html lang="en">


@include('partials.header')


<body>
    @include('partials.navbar')
    @yield('content')
    @yield('name')
    @include('partials.footer')


    @include('partials.scripts')
</body>

</html>
