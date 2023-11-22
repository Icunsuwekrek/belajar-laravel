<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 9 | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
.divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}
}
</style>

<body>
  
  {{-- <header class="text-gray-600 body-font"> --}}
    <header div class="container mx-auto flex flex-wrap p-5 flex-col mb-3 md:flex-row items-center">
      {{-- <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
        <img src="img/Logomark.svg" alt="">
        <span class="ml-3 text-xl font-bold">Aksacademy</span>
      </a>
      <nav class=" md:ml-4 md:py-1 md:pl-4 hidden lg:flex  flex-wrap items-center text-base justify-center">
        <a href="/slicing/home.html" class="mr-10 font-bold text-blue-700 hover:text-blue-700">Homeee</a>
        <a href="/slicing/home.html" class="mr-10 hover:text-gray-900">Eventsss</a>
        <a href="/slicing/home.html" class="mr-10 hover:text-gray-900">Pricing</a>
        <a href="/slicing/home.html" class="mr-10 hover:text-gray-900">Contact</a>
      </nav>

      <div class="items-center gap-4 mt-4 ml-auto hidden lg:flex">
        <!-- <div class="flex"> -->
          <a class="block rounded-full bg-gray-900 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-gray-600 sm:block"
            href="home.html">Masuk
          </a>
          <a class="block rounded-full bg-gray-100 px-5 py-2.5 text-sm font-medium text-teal-600 transition hover:text-teal-600/75 sm:block"
            href="home.html">Daftar  
          </a>
        <!-- </div> -->
      <!-- </button> -->
    </div> --}}
            <div class="login-box">
            <form method="POST" action="">  
                @csrf                 
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
              <form>
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                </div>
                <!-- Email input -->
                <div class="form-outline mb-4">
                  
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-3">
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                <div class="mb-3">
                                        
                    <button class="btn btn-primary form-control">Login</button>
                    <div class="login-box">
                        
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <!-- Checkbox -->
                  <div class="form-check mb-0">  
              </form>
            </div>
          </div>
        </div>
        <div>
         <div class="flex items-center justify-center px-6 pt-12 text-sm">
          <!-- Copyright -->
          {{-- <div class="text-white mb-3 mb-md-0"> --}}
            <span class="text-gray-500 text-sm text-center sm:text-left"> Copyright © 2023. All rights reserved. ^-^ </span>
          </div>
        </div>
      </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
</body>
</html>