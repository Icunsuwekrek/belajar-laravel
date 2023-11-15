<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Laravel 9 | @yield('title')</title>

    {{-- css only --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <nav class="navbar navbar-expand-lg bg-black navbar-dark" style="--bs-bg-opacity: .80;">
        <div class="container-fluid">
          <img src="img/Logomark.svg" alt="">
            <span class="navbar-brand fs-4 items-center ml-3 text-xl fw-bold">Aksacademy</span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="flex-auto" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
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



    <script src="https://cdn.tailwindcss.com"></script>x
    {{-- javascript bundle --}}
</body>

</html>
