<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TSAI HOME</title>

    {{--<link rel="stylesheet" href="{{asset("tsai_bootstrap/css/bootstrap.min.css")}}">--}}

    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}

    <link rel="stylesheet" href="{{asset("tsai_bootstrap/css/components.css")}}">
    <link rel="stylesheet" href="{{asset("tsai_bootstrap/css/icons.css")}}">
    <link rel="stylesheet" href="{{asset("tsai_bootstrap/css/responsee.css")}}">
    <link rel="stylesheet" href="{{asset("tsai_bootstrap/owl-carousel/owl.carousel.css")}}">
    <link rel="stylesheet" href="{{asset("tsai_bootstrap/owl-carousel/owl.theme.css")}}">
{{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}
<!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="{{asset("tsai_bootstrap/css/custom_css.css")}}">
    <link rel="stylesheet" href="{{asset("tsai_bootstrap/css/template-style.css")}}">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="{{asset("tsai_bootstrap/js/jquery-1.8.3.min.js")}}"></script>
    <script type="text/javascript" src="{{asset("tsai_bootstrap/js/jquery-ui.min.js")}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style>
        .myContainer {
            position: inherit;
            width: 100%;
            height:200px;
            margin: auto;
        }

        .image {
            margin:auto;
            opacity: 1;
            display: inline;
            width: auto;
            height: auto;
            transition: .5s ease;
            backface-visibility: hidden;
        }
        .middle {
            transition: .5s ease;
            opacity: 0;
            position: relative;
            top: -75px;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%)
        }

        .myContainer:hover .image {
            opacity: 0.3;
        }

        .myContainer:hover .middle {
            opacity: 1;
        }

        .text {
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            padding: 16px 32px;
        }
    </style>

</head>
<body class="size-1140">
<!-- TOP NAV WITH LOGO -->
<header>
    <nav>
        <div class="line">
            <div class="top-nav">
                <div class="logo hide-l" style="background-color: #bab4ae">
                    {{--<a href="index.html">TSAI <br /><strong>THEME</strong></a>--}}
                    <img style="position: inherit; margin-left: auto; margin-right: auto" src="{{asset("tsai_bootstrap/img/logo2.png")}}" alt="">
                </div>
                <p class="nav-text">Menu</p>
                <div class="top-nav s-12 l-5">
                    <ul class="right top-ul chevron">
                        <li><a href="{{url('/')}}">Home</a>
                        </li>
                        <li><a href="{{url('/product')}}">Product</a>
                        </li>
                        <li><a href="{{url('/offers')}}">Special Offers</a></li>
                        </li>
                    </ul>
                </div>
                <ul class="s-12 l-2">
                    <li class="logo hide-s hide-m">
                        <img src="{{asset("tsai_bootstrap/img/logo2.png")}}" alt="">
                        {{--<a href="index.html">TSAI <br /><strong>THEME</strong></a>--}}
                    </li>
                </ul>
                <div class="top-nav s-12 l-5">
                    <ul class="top-ul chevron">
                        <li><a href="{{url('/gallery')}}">Gallery</a></li>
                        <li><a href="{{url('/policies')}}">Policies</a>
                        <li><a href="{{url('/contact')}}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
<section>
    @yield('content')
</section>
<!-- FOOTER -->
<footer>
    <div class="line">
        <div class="s-12 l-6">
            <p>Copyright 2016, Vision Design - graphic zoo
            </p>
        </div>
        <div class="s-12 l-6">
            <p class="right">
                <a class="right" href="http://www.myresponsee.com" title="Responsee - lightweight responsive framework">Design and coding by Responsee Team</a>
            </p>
        </div>
    </div>
</footer>
<script type="text/javascript" src="{{asset("tsai_bootstrap/js/responsee.js")}}"></script>
<script type="text/javascript" src="{{asset("tsai_bootstrap/owl-carousel/owl.carousel.js")}}"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $("#owl-demo").owlCarousel({
            slideSpeed : 300,
            autoPlay : true,
            navigation : false,
            pagination : false,
            singleItem:true
        });
        $("#owl-demo2").owlCarousel({
            slideSpeed : 300,
            autoPlay : true,
            navigation : false,
            pagination : true,
            singleItem:true
        });
    });

</script>
</body>
</html>


