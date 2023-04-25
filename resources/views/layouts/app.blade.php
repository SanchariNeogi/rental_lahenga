<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('admin-assets/images/icon.png') }}">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500;600;700;800&family=Montserrat:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('app-assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('app-assets/css/media.css') }}">
    <link rel="stylesheet" href="{{ asset('app-assets/css/style3.css') }}">
    <link rel="stylesheet" href="{{ asset('app-assets/css/style4.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <style>
        .fa-classic,
        .fa-regular,
        .fa-solid,
        .far,
        .fas {
            font-family: "Font Awesome 6 Free" !important;
        }

        .main_class_cart {
            position: relative;
        }

        .conut_div {
            position: absolute;
            top: 0;
            left: -10px;
            font-size: 10px;
            padding: 4px;
            border-radius: 50%;
            background-color: red;
            color: #fff;
            font-weight: 800;
        }
    </style>
</head>

<body>
    <header class="clearwithin header_fixed  header_colour_scheme_light">
        <div class="total_header">
            <div class="nav_left">
                <a class="logo_img" href="{{ url('/') }}">
                    <img src="{{ asset('admin-assets/images/logo.png') }}" alt="">
                </a>
            </div>
            <div class="menu_nav_col">
                <ul class="navclass">
                    <li class="nav_list nav_special_list">
                        <a href="{{ url('/') }}" class="one active">
                            HOME
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('shop') }}" class="one">
                            SHOP
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('about-us') }}" class="one">
                            ABOUT US
                        </a>
                    </li>
                    <li>
                        <a href="#" class="one">
                            PORTFOLIO
                        </a>
                    </li>
                    <li>
                        <a href="#" class="one">
                            PAGES
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('insta-shop') }}" class="one">
                            INSTA SHOP
                        </a>
                    </li>
                    <li>
                        <a href="#" class="one">
                            BLOG
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('contact-us') }}" class="one">
                            CONTACT US
                        </a>
                    </li>
                    <li>
                        <div class="headerClose">
                            <a href="#">X</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="menu_nav_col2">
                <ul>
                    <li class="main_class_cart">
                        <a href="{{ url('/cart') }}">
                            <i class="fa-solid fa-cart-shopping"></i> Cart
                        </a>
                        @if ($cart->count() > 0)
                            <div class="conut_div">{{ $cart->count() }}</div>
                        @endif
                    </li>
                    @if (Route::has('login'))
                        @auth
                            <li>
                                <a href="{{ url('/profile') }}">
                                    <i class="fa-regular fa-user"></i> {{ Auth::user()->name }}
                                </a>
                            </li>
                        @else
                            <li>
                                <a href="{{ url('login') }}">
                                    <i class="fa-solid fa-right-to-bracket"></i> Sign In
                                </a>
                            </li>
                            @if (Route::has('register'))
                                <li>
                                    <a href="{{ url('register') }}">
                                        <i class="fa-regular fa-user"></i> Register
                                    </a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
            <div class="icon_display">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#000" height="25" width="25"
                    viewBox="0 0 448 512">
                    <path
                        d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
                </svg>
            </div>
        </div>
    </header>
    <main>
        {{ $slot }}
    </main>
    <section>
        <div class="total_in_touch">
            <div class="same_div">
                <p>BE IN TOUCH WITH US :</p>
            </div>
            <div class="group_div">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Enter your e-mail"
                        aria-label="Recipient's username" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-info" type="button" id="button-addon2"
                            style="padding: 10px 20px; background-color: #000; color: #fff;">JOIN US</button>
                    </div>
                </div>
            </div>
            <div class="svg_icon">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" height="15" width="15" fill="#fff"
                        viewBox="0 0 320 512">
                        <path
                            d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
                    </svg>
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" height="15" width="15" fill="#fff"
                        viewBox="0 0 512 512">
                        <path
                            d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
                    </svg>
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" height="15" width="15" fill="#fff"
                        viewBox="0 0 488 512">
                        <path
                            d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z" />
                    </svg>
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" height="15" width="15" fill="#fff"
                        viewBox="0 0 448 512">
                        <path
                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                    </svg>
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" height="15" width="15" fill="#fff"
                        viewBox="0 0 496 512">
                        <path
                            d="M496 256c0 137-111 248-248 248-25.6 0-50.2-3.9-73.4-11.1 10.1-16.5 25.2-43.5 30.8-65 3-11.6 15.4-59 15.4-59 8.1 15.4 31.7 28.5 56.8 28.5 74.8 0 128.7-68.8 128.7-154.3 0-81.9-66.9-143.2-152.9-143.2-107 0-163.9 71.8-163.9 150.1 0 36.4 19.4 81.7 50.3 96.1 4.7 2.2 7.2 1.2 8.3-3.3.8-3.4 5-20.3 6.9-28.1.6-2.5.3-4.7-1.7-7.1-10.1-12.5-18.3-35.3-18.3-56.6 0-54.7 41.4-107.6 112-107.6 60.9 0 103.6 41.5 103.6 100.9 0 67.1-33.9 113.6-78 113.6-24.3 0-42.6-20.1-36.7-44.8 7-29.5 20.5-61.3 20.5-82.6 0-19-10.2-34.9-31.4-34.9-24.9 0-44.9 25.7-44.9 60.2 0 22 7.4 36.8 7.4 36.8s-24.5 103.8-29 123.2c-5 21.4-3 51.6-.9 71.2C65.4 450.9 0 361.1 0 256 0 119 111 8 248 8s248 111 248 248z" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
    <footer>
        <div class="total_footer_page">
            <div class="same_div">
                <h5>CATAGORIES</h5>
                <ul>
                    <li>
                        <a href="#">
                            <p>Women</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <p>Men</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <p>Accessories</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <p>Shoes</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <p>New Arrivals</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <p>Clearance</p>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="same_div">
                <h5>MY ACCOUNT</h5>
                <ul>
                    <li>
                        <a href="#">
                            <p>Orders</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <p>Compare</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <p>Wishlist</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <p>Log In</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <p>Register</p>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="same_div">
                <h5>ABOUT</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea adipisci soluta ut hic quibusdam quos
                    explicabo accusantium nesciunt incidunt ratione voluptatum consectetur, labore</p>
            </div>
            <div class="same_div">
                <h5>CONTACTS</h5>
                <ul>
                    <li>
                        <a href="#">
                            <p><strong>Address:</strong>Kolkata</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <p><strong>Phone No:</strong>8989898989</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <p><strong>Hours:</strong>10 hours</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <p><strong>Email:</strong>acb@gmail.com</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox-plus-jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="{{ asset('app-assets/js/nav.js') }}"></script>
    <script src="{{ asset('app-assets/js/script3.js') }}"></script>

    <script src="{{ asset('app-assets/js/all.js') }}"></script>
    <!------font awsm part---------->
    <script src="{{ asset('app-assets/js/script1.js') }}"></script>
    <!------price ranging part---------->

    <!------tab click part---------->

    <!--------product details part------->
    <script src="{{ asset('app-assets/js/script4.js') }}"></script>


    <!------product counting part js------>
    <script src="{{ asset('app-assets/js/counting_js.js') }}"></script>

    <!-------card slider---------->
    <script>
        $('.carousel .carousel-item').each(function() {
            var minPerSlide = 4;
            var next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));

            for (var i = 0; i < minPerSlide; i++) {
                next = next.next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }

                next.children(':first-child').clone().appendTo($(this));
            }
        });
    </script>


    <script>
        $(document).ready(function(e) {
            $("#Date1").change(function(params) {


                var pre_date = this.value;

                var date = new Date(pre_date);


                date.setDate(date.getDate() + 7);

                $("#Date2").val(convert(date));

            });

            function convert(str) {
                var date = new Date(str),
                    mnth = ("0" + (date.getMonth() + 1)).slice(-2),
                    day = ("0" + date.getDate()).slice(-2);
                return [date.getFullYear(), mnth, day].join("-");
            }
        });


        $(document).ready(function(e) {
            $("#Date11").change(function(params) {


                var pre_date = this.value;

                var date = new Date(pre_date);


                date.setDate(date.getDate() + 3);

                $("#Date22").val(convert(date));

            });

            function convert(str) {
                var date = new Date(str),
                    mnth = ("0" + (date.getMonth() + 1)).slice(-2),
                    day = ("0" + date.getDate()).slice(-2);
                return [date.getFullYear(), mnth, day].join("-");
            }
        });

        $(document).ready(function(e) {
            $("#Date3").change(function(params) {


                var pre_date = this.value;

                var date = new Date(pre_date);


                date.setDate(date.getDate() + 5);

                $("#Date4").val(convert(date));

            });

            function convert(str) {
                var date = new Date(str),
                    mnth = ("0" + (date.getMonth() + 1)).slice(-2),
                    day = ("0" + date.getDate()).slice(-2);
                return [date.getFullYear(), mnth, day].join("-");
            }
        });
    </script>
</body>

</html>
