<!DOCTYPE html>

<html>
@include('include/head');
@include('include/navigation');
<body>
    <div class="container">
        @yield('content');
    </div>

    {{-- TODO: Extract footer to separate file--}}
    @yield('footer');
</body>

</html>
