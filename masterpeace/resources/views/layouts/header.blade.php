<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    {{-- <title>Colo Shop</title> --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Colo Shop Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href={{ asset('styles/bootstrap4/bootstrap.min.css') }}>
    <link href={{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }} rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href={{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('styles/main_styles.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('styles/responsive.css') }}>

    {{-- ====================contact==================== --}}
    <link rel="stylesheet" href={{ asset('plugins/themify-icons/themify-icons.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('plugins/jquery-ui-1.12.1.custom/jquery-ui.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('styles/contact_styles.css') }}>
    <link rel="stylesheet" type="text/css" href={{ asset('styles/contact_responsive.css') }}>
    {{-- ====================contact==================== --}}
    {{-- ====================allproducts==================== --}}
    <link rel="stylesheet" type="text/css" href={{ asset('styles/categories_styles.css') }}>>
    {{-- ====================single product==================== --}}

    <link rel="stylesheet" type="text/css" href={{ asset('styles/single_styles.css') }}>

    {{-- =============cart====================== --}}
    <!-- GOOGLE WEB FONT -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Gochi+Hand&family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet"> --}}

    <!-- BASE CSS -->
    <link href={{ asset('./cart/css/animate.min.css') }} rel="stylesheet">
    <link href={{ asset('./cart/css/bootstrap.min.css') }} rel="stylesheet">
    <link href={{ asset('./cart/css/menu.css') }} rel="stylesheet">
    {{-- <link href={{ asset('./cart/css/style.css') }} rel="stylesheet"> --}}
    <link href={{ asset('./cart/css/responsive.css') }} rel="stylesheet">
    <link href={{ asset('./cart/css/elegant_font/elegant_font.min.css') }} rel="stylesheet">
    <link href={{ asset('./cart/css/fontello/css/fontello.min.css') }} rel="stylesheet">
    <link href={{ asset('./cart/css/magnific-popup.css') }} rel="stylesheet">
    <link href={{ asset('./cart/css/pop_up.css') }} rel="stylesheet">

    <!-- Radio and check inputs -->
    <link href={{ asset('./cart/css/skins/square/grey.css') }} rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href={{ asset('./cart/css/custom.css') }} rel="stylesheet">


    <link rel="stylesheet" type="text/css" href={{ asset('stylesheets/style1.css') }}>
    {{-- =============cart====================== --}}

    <!-- Bootstrap  -->
    <!-- <link rel="stylesheet" type="text/css" href="stylesheets/bootstrap.css" > -->

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href={{ asset('stylesheets/style1.css') }}>
    <!-- <link rel="stylesheet" type="text/css" href="stylesheets/responsive.css"> -->

    <!-- Colors -->
    <!-- <link rel="stylesheet" type="text/css" href="stylesheets/colors/color1.css" id="colors"> -->

    <!-- Animation Style -->
    <!-- <link rel="stylesheet" type="text/css" href="stylesheets/animate.css"> -->


    <!-- Favicon and touch icons  -->
    <!-- <link href="icon/favicon.png" rel="shortcut icon"> -->

    <!--[if lt IE 9]>
 <script src="javascript/html5shiv.js"></script>
 <script src="javascript/respond.min.js"></script>
<![endif]-->



    <style>
        .product_price {
            color: rgb(130, 130, 239);
        }

        /* ====search================== */
        .sidebar .sidebar-widget .search-widget {
            position: relative;
        }

        .sidebar .search-widget input {
            height: 50px;
            border: 1px solid #dddddd;
            border-radius: 5%;
        }

        .sidebar .search-widget input:focus {
            box-shadow: none;
            border-color: rgb(86, 132, 217);
        }

        .sidebar .search-widget .btn {
            position: absolute;
            top: 4px;
            right: 15px;
            height: 40px;
            padding: 0;
            font-size: 20px;
            color: rgb(86, 132, 217);
            background: none;
            border-radius: 0;
            border: none;
            transition: .3s;
        }

        .sidebar .search-widget .btn:hover {
            color: #4a4c70;
        }


        .red_button a {
            display: block;
            color: #FFFFFF;
            text-transform: uppercase;
            font-size: 12px;
            font-weight: 500;
            text-align: center;
            line-height: 40px;
            width: 100%;
        }


        /* =======add cart btn============== */

        .add_to_cart_buttonc {
            width: 160px;
            margin-left: 19px;
            font-size: 12px !important;
        }

        .red_buttonc {

            width: 160px;
            margin-left: 19px;
            font-size: 12px !important;
            display: -webkit-inline-box;
            display: -moz-inline-box;
            display: -ms-inline-flexbox;
            display: -webkit-inline-flex;
            display: inline-flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: auto;
            height: 40px;
            background: #fe4c50;
            border-radius: 3px;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -ms-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;
        }

        /* footer {
 color: white !important;
}
.afooter{
 color: white;
} */
    </style>
</head>

<body>

    <div class="super_container">

        <!-- Header -->

        <header class="header trans_300" style="top: 0px;">

            <!-- Top Navigation -->

            <div class="top_nav">
                {{-- <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="top_nav_left">free shipping on all orders over $500</div>
                        </div>
                        <!-- <div class="col-md-6 text-right">
      <div class="top_nav_right">
       <ul class="top_nav_menu">


        <li class="currency">
         <a href="#">
          usd
          <i class="fa fa-angle-down"></i>
         </a>
         <ul class="currency_selection">
          <li><a href="#">cad</a></li>
          <li><a href="#">aud</a></li>
          <li><a href="#">eur</a></li>
          <li><a href="#">gbp</a></li>
         </ul>
        </li>
        <li class="language">
         <a href="#">
          English
          <i class="fa fa-angle-down"></i>
         </a>
         <ul class="language_selection">
          <li><a href="#">French</a></li>
          <li><a href="#">Italian</a></li>
          <li><a href="#">German</a></li>
          <li><a href="#">Spanish</a></li>
         </ul>
        </li>
        <li class="account">
         <a href="#">
          My Account
          <i class="fa fa-angle-down"></i>
         </a>
         <ul class="account_selection">
          <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
          <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
         </ul>
        </li>
       </ul>
      </div>
     </div> -->
                    </div>
                </div>
            </div> --}}

            <!-- Main Navigation -->

            <div class="main_nav_container">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-right">
                            <div class="logo_container">
                                <!-- <a href="index.html">colo<span>shop</span></a> -->
                                <a href="index.html"><img src={{ asset('images/logoo.png') }} alt=""
                                        srcset="" style="height:75px ; width: 107px;"></a>
                            </div>
                            <nav class="navbar">
                                <ul class="navbar_menu">
                                    <li><a href="{{ url('/') }}">home</a></li>
                                    <li><a href="{{ url('/pages.allproducts/1') }}">shop</a></li>

                                    <li><a href="{{ url('/about') }}">About</a></li>
                                    <li><a href="{{ url('/contact') }}">contact</a></li>
                                    {{-- <li><a href="registration.html">SignUp</a></li>
                                    <li><a href="login.html">Login</a></li> --}}
                                    @if (Route::has('login'))
                                        @auth
                                            {{-- <li><a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"><i class="fa fa-user" aria-hidden="true"></i></a></li> --}}
                                            <li><a href="{{ url('/profile') }}"><i class="fa fa-user fa-2x"
                                                        aria-hidden="true"></i></a></li>
                                        @else
                                            <li><a href="{{ route('login') }}">Log in</a></li>

                                            @if (Route::has('register'))
                                                <li><a href="{{ route('register') }}">Register</a></li>
                                            @endif
                                        @endauth

                                    @endif

                                </ul>
                                <ul class="navbar_user">
                                    <!-- <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li> -->
                                    {{-- <li><a href="my-account.html"><i class="fa fa-user" aria-hidden="true"></i></a>
                                    </li> --}}
                                    <li class="checkout">
                                        <a href="{{ url('/cartttt') }}">
                                            <i class="fa fa-shopping-cart fa-lg" aria-hidden="true"></i>
                                            {{-- <span id="checkout_items" class="checkout_items">2</span> --}}
                                        </a>
                                    </li>
                                </ul>
                                <div class="hamburger_container">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

        </header>

        <div class="fs_menu_overlay"></div>
        <div class="hamburger_menu">
            <div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
            <div class="hamburger_menu_content text-right">
                <ul class="menu_top_nav">
                    <li class="menu_item has-children">
                        <a href="#">
                            usd
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="menu_selection">
                            <li><a href="#">cad</a></li>
                            <li><a href="#">aud</a></li>
                            <li><a href="#">eur</a></li>
                            <li><a href="#">gbp</a></li>
                        </ul>
                    </li>
                    <li class="menu_item has-children">
                        <a href="#">
                            English
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="menu_selection">
                            <li><a href="#">French</a></li>
                            <li><a href="#">Italian</a></li>
                            <li><a href="#">German</a></li>
                            <li><a href="#">Spanish</a></li>
                        </ul>
                    </li>
                    <li class="menu_item has-children">
                        <a href="#">
                            My Account
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="menu_selection">
                            <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
                            <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
                        </ul>
                    </li>
                    <li class="menu_item"><a href="#">home</a></li>
                    <li class="menu_item"><a href="#">shop</a></li>
                    <li class="menu_item"><a href="#">promotion</a></li>
                    <li class="menu_item"><a href="#">pages</a></li>
                    <li class="menu_item"><a href="#">blog</a></li>
                    <li class="menu_item"><a href="#">contact</a></li>
                </ul>
            </div>
        </div>
