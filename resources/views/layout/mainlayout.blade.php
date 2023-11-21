<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="img/Logomark.png">
    <title>Laravel 9 | @yield('title')</title>

    {{-- css only --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="--bs-bg-opacity: .80;">
        <div class="container-fluid">
          <img src="img/Logomark.svg" alt="">
            <span class="navbar-brand fs-4 items-center ml-3 text-xl fw-bold">Aksacademy</span>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active font-bold" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/student">Student</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/class">Class</a>
                    </li>
                    <div class="flex items-center gap-4">
                      <div class="sm:flex sm:gap-4">
                      </div>
                  </div>
                </ul>
                <ul class="navbar-nav">
                    <div class="nav-item flex-auto" id="navbarSupportedContent">
                        @auth
                            <a class="nav-link" href="/logout">LogOut</a>
                        @endauth
                        @guest
                            <a class="nav-link" href="/login">Login</a>
                        @endguest
                    </li>
                </ul>
            </div>
        </div>
    </nav> 
    <div class="container ">
        @yield('content')
    </div>

    <div>
        @include('layout.footer')
    </div>

        {{-- javascript bundle --}}
</body>

</html>
