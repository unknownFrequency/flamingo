<!DOCTYPE html>

<html>
@include('include/head')
<body>
@include('include/navigation')

    <div class="container">
        @yield('content')
    </div>

@include('include/footer')
</body>
</html>
