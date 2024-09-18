<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://unpkg.com/bs-brain@2.0.4/components/pricings/pricing-2/assets/css/pricing-2.css">
    <title>Practice Project 1</title>
</head>

<body>
    @include('layout.header')

    @yield('content')

    @include('layout.footer')

    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
</body>

</html>
