<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>STUDENT | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand mx-5" href="#">LOGO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('add-student') }}">Add Student</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ route('manage-student') }}">Manage Student</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();" href="#">Logout</a>
                <form action="{{ route('logout') }}" method="post" id="logoutForm">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</nav>
@yield('body')

<script src="{{ asset('/assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('/assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
