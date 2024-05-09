<!DOCTYPE html>
<html>
<head>
    <title>Diet</title>
    <!-- Bootstrap 4.6.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
          integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- Font Awesome 6.4.2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!-- Font Awesome 4.7.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Box icons -->
    <link href='https://onpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Bootstrap 5.0.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Style CSS -->
    @vite('resources/css/modal_style.css')
    @vite('resources/css/index_style.css')
    @vite('resources/css/aboutus_style.css')
    @vite('resources/css/contact_style.css')
</head>

<body class="bg-gradient">

<nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><i class='bx bxs-bowl-hot'>Bite Station</i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="{{ route('home') }}">@lang('app.home')</a>
                <a class="nav-link" href="{{ route('about-us') }}">@lang('app.aboutUs')</a>
                <a class="nav-link" href="{{ route('contact') }}">@lang('app.contact')</a>

                @auth
                    <a class="nav-link" href="{{ route('recipes') }}">@lang('app.recipes')</a>
                    <a class="nav-link" href="{{ route('profile') }}">@lang('app.profile')</a>
                    <a class="nav-link" href="{{ route('favorites') }}">@lang('app.favorites')</a>
                    <a class="nav-link btn btn-dark" href="{{ route('logout') }}">@lang('app.logout')</a>
                @else
                    <div class="dropdown">
                        <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                            @lang('app.loginRegister')
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="{{ route('login') }}">@lang('app.login')</a></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}">@lang('app.register')</a>
                            </li>
                        </ul>
                    </div>
                @endauth
                <div class="switch">
                    <form action="{{ route('language-switch') }}" method="POST" class="inline-block">
                        @csrf
                        <select name="language" onchange="this.form.submit()"
                                class="form-select p-2 rounded bg-dark text-light">
                            <option value="en" {{ app()->getLocale() === 'en' ? 'selected' : '' }}>En</option>
                            <option value="ro" {{ app()->getLocale() === 'ro' ? 'selected' : '' }}>Ro</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>
    </div>
</nav>


