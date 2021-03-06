<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mb Wek Center Customer app</title>
    @include('includes.style')
</head>
<body>
    <!-- Navbar -->
    @if(Auth::user() && Auth::user()->roles == 'ADMIN')
        @include('includes.admin.navbar')

    @elseif(Auth::user() && Auth::user()->roles == 'USER')
        @include('includes.customer.navbar')
    
    @else
        @include('includes.navbar')

    @endif

    <!-- Content -->
    @yield('content')

    <!-- Footer -->
    @include('includes.footer')

    <!-- Script -->
    @include('includes.script')

</body>
</html>