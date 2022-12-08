<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="@yield('icon')" type="image/x-icon">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.2.3-dist/css/bootstrap.min.css') }}">
</head>

<body>
    <div class="container mt-5">
        @yield('content')
    </div>
</body>

</html>
