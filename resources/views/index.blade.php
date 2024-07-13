<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PT. AnakAmbis Tbk. | Welcome</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    {{-- <header>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0093e9" fill-opacity="1" d="M0,288L48,272C96,256,192,224,288,208C384,192,480,192,576,165.3C672,139,768,85,864,90.7C960,96,1056,160,1152,197.3C1248,235,1344,245,1392,250.7L1440,256L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg>
    </header> --}}

    <div class="box">
        <div class="row mt-4 mb-2">
            <h1>PT. AnakAmbis Tbk.</h1>
        </div>
        <hr>
        <div class="row mt-4 mb-2">
            <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
        </div>
        <div class="row mb-2 text-center">
            <h4>or</h4>
        </div>
        <div class="row mb-5">
            <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
        </div>
    </div>

    {{-- <footer>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0093e9" fill-opacity="1" d="M0,160L48,160C96,160,192,160,288,181.3C384,203,480,245,576,224C672,203,768,117,864,101.3C960,85,1056,139,1152,154.7C1248,171,1344,149,1392,138.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </footer> --}}
</body>
</html>