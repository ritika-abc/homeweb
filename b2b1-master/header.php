<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <link rel="stylesheet" href="assets/css/megadrop.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/vendor/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/vendor/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
        <script src="assets/vendor/OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>

        <script src="assets/vendor/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>

        <style>
                body {
                        background-color: #fdfdfd !important;
                        font-family: "Roboto", sans-serif;
                }
        </style>
</head>

<body>

        <!-- top nav start here -->
         <section class="d-none d-sm-none d-md-none d-lg-block">
        <div class="top_nav">
                <div class="container">
                        <div class="row">
                                <div class="col-12">
                                        <ul class="nav ">
                                                <li class="nav-item"><a href="" class="nav-link text-white">Hi User! <u class="mx-1">sign
                                                                        in</u></a></li>
                                                <li class="nav-item   w-50"><a href="" class="nav-link text-white">
                                                                <marquee behavior="" direction="">Lorem, ipsum dolor sit amet consectetur adipisicing
                                                                        elit. Quisquam, et.</marquee>
                                                        </a></li>
                                                <li class="nav-item ms-auto "><a href="" class="nav-link  text-white">345345345453</a></li>
                                                <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                For Buyers
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                                <li>
                                                                        <hr class="dropdown-divider">
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                        </ul>
                                                </li>
                                                <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                For Seller
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                                <li>
                                                                        <hr class="dropdown-divider">
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                        </ul>
                                                </li>
                                        </ul>
                                </div>
                        </div>
                </div>
        </div>
        <!-- top nav end here -->

        <!-- logo here -->
        <div class="header_top">

                <ul class="nav p-3 border shadow-sm">
                        <li class="nav-item me-auto"><a href="" class="nav-link"><img src="assets/image/logo/logo.webp" height="50px" width="180px" alt=""></a></li>
                        <li class="nav-item mt-3">
                                <form action="search-product.php" method="GET">
                                        <div class="input_box   ">
                                                <input type="search" placeholder="Search Here By Product Name / Company Name" name="query" class="p-2 px-3 border-end">
                                                <button class="px-2" type="submit">Submit</button>
                                        </div>
                                </form>
                        </li>
                        <li class="nav-item mt-2 mx-3"><a href="" class=" ">
                                        <div class="user_icon text-center">
                                                <img src="image/icon/mailgif.gif" height="25px" width="25px" alt=""> <br>
                                                <a href="" class="text-decoration-none"><small>Sign In</small></a> / <a href="" class="text-decoration-none"><small>Join</small></a>

                                        </div>
                                </a>
                        </li>
                        <li class="nav-item mt-2 mx-2"><a href="" class=" ">
                                        <div class="user_icon text-center">
                                                <img src="image/icon/user.png" height="25px" width="25px" alt=""> <br>
                                                <a href="" class="text-decoration-none"> <a href="" class="text-decoration-none"><small>Message</small></a>

                                        </div>
                                </a>
                        </li>
                        <li class="nav-item mt-2 mx-2"><a href="" class=" ">
                                        <div class="user_icon text-center">
                                                <img src="image/icon/fastcartgif.gif" height="25px" width="25px" alt=""> <br>
                                                <a href="" class="text-decoration-none"> <a href="" class="text-decoration-none"><small>Inquiry
                                                                        Basket</small></a>

                                        </div>
                                </a>
                        </li>
                </ul>
        </div>
        </section>
        <!-- logo here -->

        <!-- sm mobile nav start here -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary d-flex d-sm-flex d-md-flex d-lg-none">
                <div class="container-fluid">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link" href="#">Link</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Dropdown
                                                </a>
                                                <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li>
                                                                <hr class="dropdown-divider">
                                                        </li>
                                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                </ul>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                        </li>
                                </ul>
                                <form class="d-flex" role="search">
                                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                        <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                        </div>
                </div>
        </nav>
        <!-- sm mobile nav end here -->
        <!-- lg nav bar start here -->