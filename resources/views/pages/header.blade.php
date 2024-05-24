<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MegaBuy101 </title>
    <link rel="icon" href="{{ asset('images/megabuy.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="../css/home.css">
    @stack('home-style')
    @stack('login-style')
    @stack('page-style')
    @stack('item-style')
    @stack('admin-style')
    @stack('homestyle')

</head>
<body>
    <header>
        <div id="hidden-navbar" class="container-fluid d-lg-none d-block w-100 d-flex fs-6 position-fixed z-3 bg-white">
            <div class="mx-2 my-2 text-center">
                <i class="fa-solid fa-house"></i>
                Home
            </div>
            <div class="mx-2 my-2 text-center">
                <i class="fa-regular fa-copy"></i>
                Categories
            </div>
            <div class="mx-2 my-2 text-center">
                <i class="fa-solid fa-shirt"></i>
                Fashion
            </div>
            <div class="mx-2 my-2 text-center">
                <i class="fa-regular fa-user"></i>
                Profile
            </div>
            <div class="mx-2 my-2 text-center">
                <i class="fa-solid fa-cart-shopping"></i>
                Cart
            </div>
        </div>

        <!-- navbar-start -->
        <div class="container-fluid" id="navbar">
            <nav class="navbar d-flex">
                <a href="#" class="navbar-brand text-white d-flex">
                    <div class="fs-5"><i class="fa-solid fa-circle-notch text-dark"></i></div>
                    <div class="fs-5 fw-bold px-2 py-0 my-0 text-uppercase text-dark">Megabuy</div>
                </a>
                <a href="#" class="d-lg-flex d-none text-decoration-none">
                    <div id="address-img"><img class="img-fluid m-2" src="../images/indianflag.jpeg" alt="flag"></div>
                    <div class="ms-3">
                        <div class="font-14 text-dark">Deliver to <i class="fa-solid fa-angle-down ms-3"></i></div>
                        <div class="font-14 text-dark fw-bold">Location</div>
                    </div>
                </a>
                <form action="" id="search-bar">
                    <input type="search" placeholder="what are you looking for?" class="form-control d-lg-block d-none">
                    <div class="input-group d-lg-none">
                        <input type="text" class="form-control" placeholder="Search this blog">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <div class="d-flex">
                    <a href="" class="text-decoration-none text-dark d-lg-block d-none"><div class="border-end border-dark px-2">English</div></a>
                    <a href="" class="text-decoration-none text-dark d-lg-flex d-none border-end border-dark px-2"><span>Log in </span><i class="fa-regular fa-user fs-6 mt-1 px-1 fw-lighter"></i></a>
                    <a href="" class="text-decoration-none text-dark d-flex border-lg-end border-dark px-2"><span class="d-lg-block d-none">Wishlist </span> <i class="fa-regular fa-heart fs-6 mt-1 px-1 fw-lighter"></i></a>
                    <a href="" class="text-decoration-none text-dark d-lg-flex d-none border-end border-dark px-2"><span>Cart </span><i class="fa-solid fa-cart-shopping fs-6 mt-1 px-1"></i></a>
                </div>
            </nav>
        </div>
        <!-- navbar-end -->
