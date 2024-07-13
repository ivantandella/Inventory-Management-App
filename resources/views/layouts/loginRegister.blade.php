<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | PT. AnakAmbis Tbk.</title>
    <link rel="stylesheet" href="{{ asset('css/signin-up.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body style="background-color:#0093e9;">
    <div class="signup">
        <div class="signup-connect">
            <h1>@yield('subtitle')</h1>
        </div>
        <div class="signup-classic">
            @yield('content')
        </div>
    </div>
</body>
</html>