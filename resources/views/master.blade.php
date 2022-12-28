<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/')}}front/css/all.css">
    <link rel="stylesheet" href="{{asset('/')}}front/css/bootstrap.css">
    <title>@yield('title') - Coding Challenge TechVillage</title>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-info">
    <div class="container">
        <a href="{{route('home')}}" class="navbar-brand">Logo</a>
            <ul class="navbar-nav ms-auto">
                <li><a href="{{route('home')}}" class="nav-link text-white">Home</a></li>
                <li><a href="{{route('users.create')}}" class="nav-link text-white">Add Users</a></li>
                <li><a href="{{ route('users.index') }}" class="nav-link text-white">Manage Users</a></li>
                <li><a href="{{ route('results.index') }}" class="nav-link text-white">Result</a></li>
            </ul>
    </div>
</nav>
@yield('body')

<section class="py-3 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="text-white text-center">Copyright&copy;{{date('Y')}} | All rights reserved by Kamrul</p>
            </div>
        </div>
    </div>
</section>
    <script src="{{asset('/')}}front/js/bootstrap.bundle.min.js"></script>
</body>
</html>
