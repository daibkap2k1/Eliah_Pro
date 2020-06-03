@extends('layouts/frontEnd/layoutFrontEnd2')
@section('titleWeb',"Product-detail")
@section('content')
<section class="banner-page2 text-center">
    <h1>Shop</h1>
    <p>Home / <span>Shop</span> </p>
</section>
<section id="product-detail">
    <div class="wp-container container">
        <div class="row">
            <div class="col-lg-6">
                <div class="img-choosed">
                    <img src="{{asset('public/frontEnd/images/product/demo-shop.png')}}" alt="" class="set-img-choosed">
                </div>
                <div id="img-choose">
                    <div class="owl-carousel owl-theme">
                        <div class="item-imgs">
                            <img src="{{asset('public/frontEnd/images/product/demo-shop.png')}}" alt="" class="item-img-choose">
                        </div>
                        <div class="item-imgs">
                            <img src="{{asset('public/frontEnd/images/product/demo-pro.png')}}" alt=""  class="item-img-choose">
                        </div>
                        <div class="item-imgs">
                            <img src="{{asset('public/frontEnd/images/product/demo-shop.png')}}" alt=""  class="item-img-choose">
                        </div>
                    </div>
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
                        <span>/</span>
                        <a href="" class="create-review">
                            Write a review
                        </a>
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
                    <div class="tool-list-product d-flex border-bottom">
                        <div class="qty-block">
                            <div class="qty_inc_dec">
                                <i class="fas fa-minus"></i>
                            </div>
                            <div class="qty">
                                <input type="text" name="qty" maxlength="12" value="1" title="" class="input-text" />
                            </div>
                            <div class="qty_inc_dec">
                                <i class="fas fa-plus"></i>
                            </div>
                        </div>
                        <ul class="content-list">
                            <li data-toggle="tooltip" data-placement="top" title="Add To Cart" class="btn-cart-adds">
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
                    <div class="content-product-details">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                    role="tab" aria-controls="pills-home" aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                    role="tab" aria-controls="pills-profile" aria-selected="false">Reviews ( 03 )</a>
                            </li>

                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">Lorem, ipsum dolor sit amet consectetur adipisicing
                                elit. Sed alias, quia consequatur omnis ullam perferendis rerum voluptatem debitis
                                praesentium iusto voluptas ut voluptates harum itaque, rem iure voluptatum veritatis.
                                Exercitationem!</div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <div id="owl-text">
                                    <div class="otm owl-carousel owl-theme">
                                        <div class="owlt-content">
                                            <div class="header-owltc d-flex justify-content-between">
                                                <div class="header-owltc-title d-flex justify-content-between">
                                                    <span><img src="{{asset('public/frontEnd/images/dauphay.png')}}"
                                                            alt=""></span>
                                                    <div>
                                                        <p>Alexander Ball</p>
                                                        <span>New York</span>
                                                    </div>

                                                </div>
                                                <div>
                                                    <div class="tct-rank d-inline-block">
                                                        <ul class="d-flex">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="text-otm">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Voluptatum
                                                quae magnam eos
                                                neque
                                                natus odio, cupiditate incidunt odit dignissimos ad quos autem
                                                temporibus quidem
                                                quas.
                                                Atque a repellendus quaerat pariatur.</p>
                                        </div>
                                        <div class="owlt-content">
                                            <div class="header-owltc d-flex justify-content-between">
                                                <div class="header-owltc-title d-flex justify-content-between">
                                                    <span><img src="{{asset('public/frontEnd/images/dauphay.png')}}"
                                                            alt=""></span>
                                                    <div>
                                                        <p>Alexander Ball</p>
                                                        <span>London</span>
                                                    </div>

                                                </div>
                                                <div>
                                                    <div class="tct-rank d-inline-block">
                                                        <ul class="d-flex">
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="fas fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                            <li><i class="far fa-star"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="text-otm">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                Voluptatum
                                                quae magnam eos
                                                neque
                                                natus odio, cupiditate incidunt odit dignissimos ad quos autem
                                                temporibus quidem
                                                quas.
                                                Atque a repellendus quaerat pariatur.</p>
                                        </div>
                                    </div>
                                    <div class="controller-owlt d-flex">
                                        <div class="btn-left btn-colt">
                                            <i class="fas fa-angle-left"></i>
                                            <span>PRev</span>
                                        </div>
                                        <div class="btn-right btn-colt">
                                            <span>next</span>
                                            <i class="fas fa-angle-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="product-related-product">
    <div class="beaty-product wp-box">
        <div class="bp-title text-center">
            <h1>Beauty Products</h1>
            <img src="{{asset('public/frontEnd/images/song.png')}}" alt="">
        </div>
        <div class="owl-bp">
            <div class="wp-container container">
                <div class="owl-carousel owl-theme">
                    <div class="thumbnail position-relative">
                        <div class="img-thum position-relative">
                            <img src="{{asset('public/frontEnd/images/product/demo-pro.png')}}" alt="">
                            <ul class="content-it align-items-center">
                                <li data-toggle="tooltip" data-placement="top" title="Add To Cart"><span><i
                                            class="fas fa-shopping-bag"></i></span></li>
                                <li data-toggle="tooltip modal" data-placement="top" title="View Product"><span><i
                                            class="fas fa-eye" data-toggle="modal" data-target="#modal-product"></i></span></li>
                                <li data-toggle="tooltip" data-placement="top" title="Add To Heart"><span><i
                                            class="fas fa-heart"></i></span></li>
    
                            </ul>
                        </div>
                        <div class="content-thum">
                            <div class="top-ct d-flex justify-content-between">
                                <div class="tct-left d-inline-block">
                                    Eyes
                                </div>
                                <div class="tct-rank d-inline-block">
                                    <ul class="d-flex">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="title-ct">
                                <a href="">The expect mascaraa</a>
                            </div>
                            <div class="price-ct">
                                $21.00 <span>$49.00</span>
                            </div>
                        </div>
                        <div class="lable-thumbail">
                            <span class="label-thum bg-red">
                                -35%
                            </span>
                            <span class="label-thum bg-blue">
                                New
                            </span>
                        </div>
                    </div>
                    <div class="thumbnail position-relative">
                        <div class="img-thum position-relative">
                            <img src="{{asset('public/frontEnd/images/product/demo-pro.png')}}" alt="">
                            <ul class="content-it align-items-center">
                                <li data-toggle="tooltip" data-placement="top" title="Add To Cart"><span><i
                                            class="fas fa-shopping-bag"></i></span></li>
                                <li data-toggle="tooltip modal" data-placement="top" title="View Product"><span><i
                                            class="fas fa-eye" data-toggle="modal" data-target="#modal-product"></i></span></li>
                                <li data-toggle="tooltip" data-placement="top" title="Add To Heart"><span><i
                                            class="fas fa-heart"></i></span></li>
    
                            </ul>
                        </div>
                        <div class="content-thum">
                            <div class="top-ct d-flex justify-content-between">
                                <div class="tct-left d-inline-block">
                                    Eyes
                                </div>
                                <div class="tct-rank d-inline-block">
                                    <ul class="d-flex">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="title-ct">
                                <a href="">The expect mascaraa</a>
                            </div>
                            <div class="price-ct">
                                $21.00 <span>$49.00</span>
                            </div>
                        </div>
                        <div class="lable-thumbail">
                            <span class="label-thum bg-red">
                                -35%
                            </span>
                            <span class="label-thum bg-blue">
                                New
                            </span>
                        </div>
                    </div>
                    <div class="thumbnail position-relative">
                        <div class="img-thum position-relative">
                            <img src="{{asset('public/frontEnd/images/product/demo-pro.png')}}" alt="">
                            <ul class="content-it align-items-center">
                                <li data-toggle="tooltip" data-placement="top" title="Add To Cart"><span><i
                                            class="fas fa-shopping-bag"></i></span></li>
                                <li data-toggle="tooltip modal" data-placement="top" title="View Product"><span><i
                                            class="fas fa-eye" data-toggle="modal" data-target="#modal-product"></i></span></li>
                                <li data-toggle="tooltip" data-placement="top" title="Add To Heart"><span><i
                                            class="fas fa-heart"></i></span></li>
    
                            </ul>
                        </div>
                        <div class="content-thum">
                            <div class="top-ct d-flex justify-content-between">
                                <div class="tct-left d-inline-block">
                                    Eyes
                                </div>
                                <div class="tct-rank d-inline-block">
                                    <ul class="d-flex">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                        <li><i class="far fa-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="title-ct">
                                <a href=""> The expect mascaraa</a>
                            </div>
                            <div class="price-ct clearfix">
                                $21.00 <span>$49.00</span>
                                <div class="collect-color d-inline-block float-right">
                                    <span class="box-color" style="background-color: black"></span>
                                    <span class="box-color" style="background-color: rgb(31, 218, 87)"></span>
                                    <span class="box-color" style="background-color: red"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection