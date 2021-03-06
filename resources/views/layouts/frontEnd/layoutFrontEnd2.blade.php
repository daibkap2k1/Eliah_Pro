<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('public/frontEnd/bootstrap-4.4.1/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontEnd/fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontEnd/owlCarousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontEnd/owlCarousel/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontEnd/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontEnd/reponsive.css')}}">
    <title>@yield('titleWeb')</title>
</head>

<body>
    <div class="menu-roots">
        <header>
            <div class="container wp-container clearfix">
                <div class="top-header float-left">
                    <ul class="th-left d-inline-flex">
                        <li><a href="" style="padding-left: 0"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href=""><i class="fab fa-twitter"></i></a></li>
                        <li><a href=""><i class="fab fa-instagram"></i></a></li>
                        <li><a href=""><i class="fab fa-youtube"></i></a></li>
                    </ul>
                    <div class="th-center d-inline-block">
                        <p>Free shipping on international orders of $120+</p>
                    </div>
                    <ul class="th-right d-inline-flex">
                        <li>
                            <div class="thr-root-click format-money">
                                <span class="thr-text">USD</span>
                                <i class="fas fa-angle-down"></i>
                            </div>
                            <ul class="thr-active">
                                <li><a href="">VNĐ</a></li>
                            </ul>
                        </li>
                        <li>
                            <div class="thr-root-click lang">
                                <span class="thr-text">ENG</span>
                                <i class="fas fa-angle-down"></i>
                            </div>
                            <ul class="thr-active">
                                <li><a href="">VN</a></li>
                            </ul>
                        </li>
                        <li style="padding-right: 0px">
                            <div class="thr-root-click">
                                <a href="#" class="thr-text" style="text-decoration: none; color:#e9e9e9">Sign in</a>
                                <i class="fas fa-angle-down"></i>
                            </div>
                            <ul class="thr-active">
                                <li><a href="" class="thr-text">Login</a></li>
                                <li><a href="" class="thr-text">Registration</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <nav>
            <div class="container wp-container">
                <a href="" class="logo-nav">
                    <img src="{{asset('public/frontEnd/images/logoweb.png')}}" alt="">
                </a>
                <form action="" class="search-header form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="What do you need?">
                        <div class="input-group-append">
                            <button class="btn" type="button">
                                <i class="fa fa-search text-white"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <ul class="menu d-inline-flex">
                    <li><a href="">Home</a></li>
                    <li><a href="">Service</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Shop</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
                <ul class="list-icon-nav d-inline-flex">
                    <li data-toggle="modal" data-target="#exampleModal">
                        <img src="{{asset('public/frontEnd/images/search-icon.png')}}" alt="">
                        <div class="search-icon d-none">
                            <form action="">
                                <input type="text" name="search">
                            </form>
                        </div>
                    </li>
                    <li>
                        <img src="{{asset('public/frontEnd/images/heart-icon.png')}}" alt="">
                        <div class="heart-icon d-none">
                            âfafa
                        </div>
                    </li>
                    <li class="position-relative cart-icon">
                        <img src="{{asset('public/frontEnd/images/icon-cart.png')}}" alt="">
                        <span>0</span>
                        <div class="d-none">

                        </div>
                    </li>
                    <li>
                        <span>Cart :$ 0.00</span>
                    </li>
                </ul>
                <div class="icon-menu-mobi justify-content-between">
                <a href="{{route('cart')}}" class="position-relative text-black">
                        <i class="fas fa-shopping-bag"></i>
                        <span>0</span>
                    </a>
                    <div class="icon-bar">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>

            </div>
        </nav>
    </div>
   @include('layouts.frontEnd.menuPageHome')
    @yield('content')

    {{-- <div class="banner-footer-sp cover" style="background-image: url('{{asset('public/frontEnd/images/footer-banner.png')}}')">

    </div> --}}
    <section id="banner-footer">
        <div class="banner-footer-sp cover"
            style="background-image: url('{{asset('public/frontEnd/images/footer-banner01.png')}}')">

        </div>
        <div class="banner-footer-sp cover"
            style="background-image: url('{{asset('public/frontEnd/images/footer-banner01.png')}}')">

        </div>
        <div class="banner-footer-sp cover"
            style="background-image: url('{{asset('public/frontEnd/images/footer-banner01.png')}}')">

        </div>
        <div class="banner-footer-sp cover"
            style="background-image: url('{{asset('public/frontEnd/images/footer-banner01.png')}}')">

        </div>
        <div class="banner-footer-sp cover"
            style="background-image: url('{{asset('public/frontEnd/images/footer-banner01.png')}}')">

        </div>
        <div class="banner-footer-sp cover"
            style="background-image: url('{{asset('public/frontEnd/images/footer-banner01.png')}}')">

        </div>
    </section>
    <footer>
        <div class="container wp-container">
            <div class="footer-top">
                <div class="row">
                    <div class="col-12 col-lg-2">
                        <a href="" class="logo-footer">
                            <img src="{{asset('public/frontEnd/images/logoweb.png')}}" alt="">
                        </a>
                    </div>
                    <div class="col-12 col-lg-7">
                        <form method="get" id="search" class="ng-pristine ng-valid">
                            <div class="input-group">
                                <label for="email">Subscribe Newletter</label>
                                <input type="text" class="form-control" placeholder="Your Email">
                                <div class="input-group-append">
                                    <button class="btn" type="button">
                                        <i class="fab fa-telegram-plane"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-12 col-lg-3">
                        <ul class="float-right d-flex icon-footer">
                            <li>
                                <a href=""><img src="{{asset('public/frontEnd/images/fb-footer.png')}}" alt=""></a>
                            </li>
                            <li>
                                <a href=""><img src="{{asset('public/frontEnd/images/twiter-footer.png')}}" alt=""></a>
                            </li>
                            <li>
                                <a href=""><img src="{{asset('public/frontEnd/images/intagram-footer.png')}}"
                                        alt=""></a>
                            </li>
                            <li>
                                <a href=""><img src="{{asset('public/frontEnd/images/youtube-footer.png')}}" alt=""></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-content">
                <div class="row">
                    <div class="col-12 col-lg-4 col-md-6">
                        <div class="fc-left">
                            <h2 class="ft-title">Contact info</h2>
                            <ul class="fcl-content">
                                <li>
                                    <span>Address:</span>
                                    <p>2168 S Archer Ave, Chicago, IL 60616, US Phone: +1 312</p>
                                </li>
                                <li>
                                    <span>Phone:</span>
                                    <p>+1 312-080-1990</p>
                                </li>
                                <li>
                                    <span>Email:</span>
                                    <p>testEmail@gmail.com</p>
                                </li>
                                <li>
                                    <span>Opentime:</span>
                                    <p>8.00am - 11.00.pm </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-2 col-md-6">
                        <h2 class="ft-title">Account</h2>
                        <ul class="fc-centerRight fc-link flex-column">
                            <li>
                                <a href=""> My account</a>
                            </li>
                            <li>
                                <a href=""> Wishlist</a>
                            </li>
                            <li>
                                <a href=""> Cart</a>
                            </li>
                            <li>
                                <a href=""> Shop</a>
                            </li>
                            <li>
                                <a href=""> Checkout</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-2 col-md-6">
                        <h2 class="ft-title">Infomation</h2>
                        <ul class="fc-centerRight fc-link flex-column">
                            <li>
                                <a href="">About us</a>
                            </li>
                            <li>
                                <a href="">Careers</a>
                            </li>
                            <li>
                                <a href="">Delivery Inforamtion</a>
                            </li>
                            <li>
                                <a href="">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="">Terms & Condition</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-4 col-md-6">
                        <div class="ft-right">
                            <h2 class="ft-title">Payment methods</h2>
                            <ul class="fc-centerRight fc-link flex-column">
                                <li>
                                    <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit gravida</P>
                                </li>
                                <li>
                                    <ul class="card-link d-inline-flex">
                                        <li>
                                            <a href=""><img src="{{asset('public/frontEnd/images/pay.png')}}"
                                                    alt=""></a>
                                        </li>
                                        <li>
                                            <a href=""><img src="{{asset('public/frontEnd/images/vina.png')}}"
                                                    alt=""></a>
                                        </li>
                                        <li>
                                            <a href=""><img src="{{asset('public/frontEnd/images/mater.png')}}"
                                                    alt=""></a>
                                        </li>
                                        <li>
                                            <a href=""><img src="{{asset('public/frontEnd/images/cirrus.png')}}"
                                                    alt=""></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right">
            <div class="container wp-container d-flex justify-content-between">
                <p class="cr-left">© Copyright 2020 Beauty</p>
                <ul class="cr-link d-inline-flex">
                    <li><a href="">Privacy Policy</a></li>
                    <li><a href="">Terms & Conditions</a></li>
                    <li><a href="">Site Map</a></li>
                </ul>
            </div>
        </div>
    </footer>
    {{-- Menu mobi  --}}
    <div class="mobile-nav">
        <div class="icon-close">
            <i class="fas fa-times"></i>
        </div>
        <ul>
            <li><a href="{{route('index')}}">Home</a></li>
            <li><a href="{{route('service')}}">Service</a></li>
            <li><a href="{{route('about')}}">About</a></li>
            <li><a href="{{route('shop')}}">Shop</a></li>
            <li><a href="{{route('blog')}}">Blog</a></li>
            <li><a href="{{route('contact')}}">Contact</a></li>
            <li><a href="">Login</a></li>
            <li><a href="">Logout</a></li>
        </ul>
    </div>
    {{-- End menu mobi  --}}

    {{-- cart  --}}
    <div class="box-cart-home clearfix">
        <div class="cart-hover draw-border " id="cart-hovers">
            <table class="select-items">
                <tr>
                    <td class="si-img">
                        <img src="{{asset('public/frontEnd/images/item-cart.png')}}" alt="">
                    </td>
                    <td class="si-content">
                        <div class="si-product">
                            <h6>The expert mascara</h6>
                            <p>$21.80</p>
                            <p>Quatity: 01</p>
                        </div>
                    </td>
                    <td class="si-close">
                        <a href="#"><i class="far fa-times-circle"></i></a>
                    </td>
                </tr>
                <tr>
                    <td class="si-img">
                        <img src="{{asset('public/frontEnd/images/item-cart.png')}}" alt="">
                    </td>
                    <td class="si-content">
                        <div class="si-product">
                            <h6>The expert mascara</h6>
                            <p>$21.80</p>
                            <p>Quatity: 01</p>
                        </div>
                    </td>
                    <td class="si-close">
                        <a href="#"><i class="far fa-times-circle"></i></a>
                    </td>
                </tr>
                <tr>
                    <td class="si-img">
                        <img src="{{asset('public/frontEnd/images/item-cart.png')}}" alt="">
                    </td>
                    <td class="si-content">
                        <div class="si-product">
                            <h6>The expert mascara</h6>
                            <p>$21.80</p>
                            <p>Quatity: 01</p>
                        </div>
                    </td>
                    <td class="si-close">
                        <a href="#"><i class="far fa-times-circle"></i></a>
                    </td>
                </tr>
            </table>
            <div class="under-cart">
                <div class="select-total">
                    <span>Total:</span>
                    <span>
                        <i class="fas fa-dollar-sign"></i>
                        <span class="d-inline-block ml-1">$120.02</span>
                    </span>
                </div>
                <div class="select-button">
                    <a href="{{route('cart')}}" class="btn btn-dark btn-lg">View card</a>
                    <a href="{{route('checkout')}}" class="btn btn-danger btn-lg"> Check out</a>
                </div>
            </div>
        </div>
    </div>
    {{-- End cart  --}}
    {{-- -------search  --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form method="get" class="text-center">
                        <div class="form-group">
                            <label for="seach12" style="font-weight:bold; font-size:18px">Search Product</label>
                            <input type="text" class="form-control" id="seach12" placeholder="Nhập tên sản phẩm ?">
                        </div>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- end search  --}}
    {{-- --modal-product --}}
    <!-- The Modal -->
    <div class="modal fade" id="modal-product">
        <div class="modal-dialog modal-xl">
            <div class="modal-content pd-55px">
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block set-img"
                                            src="{{asset('public/frontEnd/images/product/demo-shop.png')}}"
                                            alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block set-img"
                                            src="{{asset('public/frontEnd/images/product/demo-shop.png')}}"
                                            alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block set-img"
                                            src="{{asset('public/frontEnd/images/product/demo-shop.png')}}"
                                            alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="title-modal-product border-bottom">
                                <div class="label-tmp">
                                    Cheek & Coutour
                                </div>
                                <h4>Velvet Melon High Intensity</h4>
                                <div class="infor-basic">
                                    <div class="tct-rank d-inline-block">
                                        <ul class="d-flex">
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>
                                            <li><i class="far fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <span>/</span>
                                    <div class="number-reviews">
                                        03 reviews
                                    </div>
                                </div>
                                <div class="price-product-tmp">
                                    $<span>34.00</span>
                                </div>
                            </div>
                            <div class="content-modal-product">
                                <ul>
                                    <li><span>Brand:</span>Korea</li>
                                    <li><span>Product code:</span>PM 001</li>
                                </ul>
                                <div class="color-modal-product">
                                    <span>Color:</span>
                                    <div class="collect-color d-inline-block float-left">
                                        <span class="box-color" style="background-color: black"></span>
                                        <span class="box-color" style="background-color: rgb(31, 218, 87)"></span>
                                        <span class="box-color" style="background-color: red"></span>
                                    </div>
                                </div>
                                <div class="tool-list-product">
                                    <ul class="content-list">
                                        <li data-toggle="tooltip" data-placement="top" title="Add To Cart"
                                            class="btn-cart-adds">
                                            <div class="btn-carts">
                                                <span><i class="fas fa-shopping-bag"></i></span>
                                                <p> Add To Cart</p>
                                            </div>
                                        </li>
                                        <li data-toggle="tooltip" data-placement="top" title="View Product"><span><i
                                                    class="fas fa-eye"></i></span></li>
                                        <li data-toggle="tooltip" data-placement="top" title="Add To Heart"><span><i
                                                    class="fas fa-heart"></i></span></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- end-modal product  --}}

</body>
<script src="{{asset('public/frontEnd/Js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('public/frontEnd/Js/popper.min.js')}}"></script>
<script src="{{asset('public/frontEnd/bootstrap-4.4.1/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/frontEnd/fontawesome/js/all.js')}}"></script>
<script src="{{asset('public/frontEnd/owlCarousel/owl.carousel.js')}}"></script>
<script src="{{asset('public/frontEnd/Js/myJs.js')}}"></script>


</html>