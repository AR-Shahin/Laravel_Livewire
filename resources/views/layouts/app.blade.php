<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    @livewireStyles
    <title>LiveWire</title>
</head>

<body>
    @yield('content')

    @livewireScripts
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>
