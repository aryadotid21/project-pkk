<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <title>Welcome Page</title>
</head>

<body style="height:100%">
    <nav class="navbar navbar-light sticky-top justify-content-between" id="navbar">
        <a class="navbar-brand font-weight-bold" style="color:#3C4858;" data-aos="fade-right" data-aos-duration="3000">Jakarta <span class="text-info">Laptop</span></a>
    <form class="form-inline">
            <div class="dropdown show">
            <a class="navbar-brand mr-3 " style="color:#3C4858;text-decoration:none" data-aos="fade-left" data-aos-duration="3000" href="{{route('logout')}}">{{ session()->get('nama') }}</a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="/operator/laptop">Data Laptops</a>
                <a class="dropdown-item" href="/logout">Logout</a>
              </div>
            </div>
        </form>
    </nav>
    <div class="container" data-aos="fade-up" data-aos-duration="3000">
        <div class="row align-items-center">
            <div class="col-lg-12 mt-5">
                <h1 class="heading mb-3">Selamat Datang Di Halaman Operator</h1>
               </div>
        </div>
    </div>
    <script>
        window.addEventListener('scroll', (e) => {
            const nav = document.querySelector('.navbar');
            if (window.pageYOffset > 0) {
                nav.classList.add("add-shadow");
            } else {
                nav.classList.remove("add-shadow");
            }
        });

        AOS.init();
    </script>
@include('sweetalert::alert')
</body>

</html>
