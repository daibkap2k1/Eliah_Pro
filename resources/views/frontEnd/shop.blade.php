@extends('layouts/frontEnd/layoutFrontEnd2')
@section('titleWeb',"Shop")
@section('content')
<section class="wp-box">
    <div class="wp-container container">
        <div class="row">
            <div class="col-lg-3 sidebarLeft">
                <div class="box-sl">
                    <div class="title-boxsl">
                        <h3>Categories</h3>
                        <img src="{{asset('public/frontEnd/images/song.png')}}" alt="">
                    </div>
                    <ul class="content-boxsl">
                        <li><a href="">Spa</a></li>
                        <li><a href="">Beauty</a></li>
                        <li><a href="">Make up</a></li>
                        <li><a href="">Skincare</a></li>
                        <li><a href="">Body care</a></li>
                        <li><a href="">Tools</a></li>
                    </ul>
                </div>
                <div class="box-sl">
                    <div class="title-boxsl">
                        <h3>Refine Search</h3>
                        <img src="{{asset('public/frontEnd/images/song.png')}}" alt="">
                    </div>
                    <p>Feature</p>
                    <ul class="content-boxsl">
                        <li class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input type="radio" class="custom-control-input" id="customCheck159" name="example1"
                                    checked>
                                <label class="custom-control-label" for="customCheck159">Dry skin</label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-control custom-checkbox">
                                <input type="radio" class="custom-control-input" id="customCheck1" name="example1">
                                <label class="custom-control-label" for="customCheck1">Dry skin</label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-control custom-checkbox">
                                <input type="radio" class="custom-control-input" id="customCheck2" name="example1">
                                <label class="custom-control-label" for="customCheck2">Mixed skin</label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-control custom-checkbox">
                                <input type="radio" class="custom-control-input" id="customCheck3" name="example1">
                                <label class="custom-control-label" for="customCheck3">Oily skin</label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-control custom-checkbox">
                                <input type="radio" class="custom-control-input" id="customCheck4" name="example1">
                                <label class="custom-control-label" for="customCheck4">Fair skin</label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-control custom-checkbox">
                                <input type="radio" class="custom-control-input" id="customCheck5" name="example1">
                                <label class="custom-control-label" for="customCheck5">Dark skin</label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="box-sl">
                    <div class="title-boxsl">
                        <h3>Price</h3>
                        <img src="{{asset('public/frontEnd/images/song.png')}}" alt="">
                    </div>
                    <ul class="content-boxsl">
                        <li class="d-none">
                            <div class="custom-control custom-checkbox">
                                <input type="radio" class="custom-control-input" id="customCheck151" name="example11"
                                    checked>
                                <label class="custom-control-label" for="customCheck151">$0.00 - $25.00</label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-control custom-checkbox">
                                <input type="radio" class="custom-control-input" id="customCheck11" name="example11">
                                <label class="custom-control-label" for="customCheck11">$0.00 - $25.00</label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-control custom-checkbox">
                                <input type="radio" class="custom-control-input" id="customCheck21" name="example11">
                                <label class="custom-control-label" for="customCheck21">$25.00 - $50.00</label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-control custom-checkbox">
                                <input type="radio" class="custom-control-input" id="customCheck31" name="example11">
                                <label class="custom-control-label" for="customCheck31">$50.00 - $75.00</label>
                            </div>
                        </li>
                        <li>
                            <div class="custom-control custom-checkbox">
                                <input type="radio" class="custom-control-input" id="customCheck41" name="example11">
                                <label class="custom-control-label" for="customCheck41">$75.00 - $100.00</label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="box-sl">
                    <div class="set-img">
                        <img src="{{asset('public/frontEnd/images/sale75.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-12">
                <div class="header-list-shop">
                    <div class="icon-change-layout d-inline-block ">
                        <div class="icl-th d-inline-block icl-activer">
                            <i class="fas fa-th"></i>
                        </div>
                        <div class="icl-bar d-inline-block">
                            <i class="fas fa-bars"></i>
                        </div>
                    </div>
                    <div class="btn-filter">
                        <span><i class="fas fa-filter"></i></span>
                        Filter
                    </div>
                    <form class="fiters-hls">
                        <select name="" id="select-hls" class="custom-select">
                            <option value="" selected>Deflault Sorting</option>
                            <option value="">Gía tăng dần</option>
                            <option value="">Gía giảm dần</option>
                        </select>
                    </form>
                </div>
                <div class="row content-shop-list-product">
                    {{-- box product  --}}
                    <div class="col-lg-4 col-md-6 box-cslp active-block">
                        <div class="thumbnail position-relative">
                            <div class="img-thum position-relative set-img-shop">
                                <img src="{{asset('public/frontEnd/images/product/demo-shop.png')}}" alt="">
                                <ul class="content-it align-items-center">
                                    <li data-toggle="tooltip" data-placement="top" title="Add To Cart"><span><i
                                                class="fas fa-shopping-bag"></i></span></li>
                                    <li data-toggle="tooltip modal" data-placement="top" title="View Product"><span><i
                                                class="fas fa-eye" data-toggle="modal"
                                                data-target="#modal-product"></i></span></li>
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
                    </div>
                    <div class="col-lg-4 col-md-6 box-cslp active-block">
                        <div class="thumbnail position-relative">
                            <div class="img-thum position-relative set-img-shop">
                                <img src="{{asset('public/frontEnd/images/product/demo-shop.png')}}" alt="">
                                <ul class="content-it align-items-center">
                                    <li data-toggle="tooltip" data-placement="top" title="Add To Cart"><span><i
                                                class="fas fa-shopping-bag"></i></span></li>
                                    <li data-toggle="tooltip modal" data-placement="top" title="View Product"><span><i
                                                class="fas fa-eye" data-toggle="modal"
                                                data-target="#modal-product"></i></span></li>
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
                                <span class="label-thum bg-blue">
                                    New
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 box-cslp active-block">
                        <div class="thumbnail position-relative">
                            <div class="img-thum position-relative set-img-shop">
                                <img src="{{asset('public/frontEnd/images/product/demo-pro.png')}}" alt="">
                                <ul class="content-it align-items-center">
                                    <li data-toggle="tooltip" data-placement="top" title="Add To Cart"><span><i
                                                class="fas fa-shopping-bag"></i></span></li>
                                    <li data-toggle="tooltip modal" data-placement="top" title="View Product"><span><i
                                                class="fas fa-eye" data-toggle="modal"
                                                data-target="#modal-product"></i></span></li>
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
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 box-cslp active-block">
                        <div class="thumbnail position-relative">
                            <div class="img-thum position-relative set-img-shop">
                                <img src="{{asset('public/frontEnd/images/product/demo-pro.png')}}" alt="">
                                <ul class="content-it align-items-center">
                                    <li data-toggle="tooltip" data-placement="top" title="Add To Cart"><span><i
                                                class="fas fa-shopping-bag"></i></span></li>
                                    <li data-toggle="tooltip modal" data-placement="top" title="View Product"><span><i
                                                class="fas fa-eye" data-toggle="modal"
                                                data-target="#modal-product"></i></span></li>
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
                            <div class="lable-thumbail">
                                <span class="label-thum bg-red">
                                    -35%
                                </span>
                                <span class="label-thum bg-blue">
                                    New
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 box-cslp active-block">
                        <div class="thumbnail position-relative">
                            <div class="img-thum position-relative set-img-shop">
                                <img src="{{asset('public/frontEnd/images/product/demo-pro.png')}}" alt="">
                                <ul class="content-it align-items-center">
                                    <li data-toggle="tooltip" data-placement="top" title="Add To Cart"><span><i
                                                class="fas fa-shopping-bag"></i></span></li>
                                    <li data-toggle="tooltip modal" data-placement="top" title="View Product"><span><i
                                                class="fas fa-eye" data-toggle="modal"
                                                data-target="#modal-product"></i></span></li>
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
                                {{-- <span class="label-thum bg-red">
                                    -35%
                                </span> --}}
                                <span class="label-thum bg-blue">
                                    New
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 box-cslp active-block">
                        <div class="thumbnail position-relative">
                            <div class="img-thum position-relative set-img-shop">
                                <img src="{{asset('public/frontEnd/images/product/demo-pro.png')}}" alt="">
                                <ul class="content-it align-items-center">
                                    <li data-toggle="tooltip" data-placement="top" title="Add To Cart"><span><i
                                                class="fas fa-shopping-bag"></i></span></li>
                                    <li data-toggle="tooltip modal" data-placement="top" title="View Product"><span><i
                                                class="fas fa-eye" data-toggle="modal"
                                                data-target="#modal-product"></i></span></li>
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
                                {{-- <span class="label-thum bg-red">
                                    -35%
                                </span> --}}
                                <span class="label-thum bg-blue">
                                    New
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 box-cslp active-block">
                        <div class="thumbnail position-relative">
                            <div class="img-thum position-relative set-img-shop">
                                <img src="{{asset('public/frontEnd/images/product/demo-pro.png')}}" alt="">
                                <ul class="content-it align-items-center">
                                    <li data-toggle="tooltip" data-placement="top" title="Add To Cart"><span><i
                                                class="fas fa-shopping-bag"></i></span></li>
                                    <li data-toggle="tooltip modal" data-placement="top" title="View Product"><span><i
                                                class="fas fa-eye" data-toggle="modal"
                                                data-target="#modal-product"></i></span></li>
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
                            {{-- <div class="lable-thumbail">
                                <span class="label-thum bg-red">
                                    -35%
                                </span>
                                <span class="label-thum bg-blue">
                                    New
                                </span>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 box-cslp active-block">
                        <div class="thumbnail position-relative">
                            <div class="img-thum position-relative set-img-shop">
                                <img src="{{asset('public/frontEnd/images/product/demo-pro.png')}}" alt="">
                                <ul class="content-it align-items-center">
                                    <li data-toggle="tooltip" data-placement="top" title="Add To Cart"><span><i
                                                class="fas fa-shopping-bag"></i></span></li>
                                    <li data-toggle="tooltip modal" data-placement="top" title="View Product"><span><i
                                                class="fas fa-eye" data-toggle="modal"
                                                data-target="#modal-product"></i></span></li>
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
                            {{-- <div class="lable-thumbail">
                                <span class="label-thum bg-red">
                                    -35%
                                </span>
                                <span class="label-thum bg-blue">
                                    New
                                </span>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 box-cslp active-block">
                        <div class="thumbnail position-relative">
                            <div class="img-thum position-relative set-img-shop">
                                <img src="{{asset('public/frontEnd/images/product/demo-pro.png')}}" alt="">
                                <ul class="content-it align-items-center">
                                    <li data-toggle="tooltip" data-placement="top" title="Add To Cart"><span><i
                                                class="fas fa-shopping-bag"></i></span></li>
                                    <li data-toggle="tooltip modal" data-placement="top" title="View Product"><span><i
                                                class="fas fa-eye" data-toggle="modal"
                                                data-target="#modal-product"></i></span></li>
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
                    </div>
                    <div class="col-lg-4 col-md-6 box-cslp active-block">
                        <div class="thumbnail position-relative">
                            <div class="img-thum position-relative set-img-shop">
                                <img src="{{asset('public/frontEnd/images/product/demo-pro.png')}}" alt="">
                                <ul class="content-it align-items-center">
                                    <li data-toggle="tooltip" data-placement="top" title="Add To Cart"><span><i
                                                class="fas fa-shopping-bag"></i></span></li>
                                    <li data-toggle="tooltip modal" data-placement="top" title="View Product"><span><i
                                                class="fas fa-eye" data-toggle="modal"
                                                data-target="#modal-product"></i></span></li>
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
                    </div>
                    <div class="col-lg-4 col-md-6 box-cslp active-block">
                        <div class="thumbnail position-relative">
                            <div class="img-thum position-relative set-img-shop">
                                <img src="{{asset('public/frontEnd/images/product/demo-pro.png')}}" alt="">
                                <ul class="content-it align-items-center">
                                    <li data-toggle="tooltip" data-placement="top" title="Add To Cart"><span><i
                                                class="fas fa-shopping-bag"></i></span></li>
                                    <li data-toggle="tooltip modal" data-placement="top" title="View Product"><span><i
                                                class="fas fa-eye" data-toggle="modal"
                                                data-target="#modal-product"></i></span></li>
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
                            {{-- <div class="lable-thumbail">
                                <span class="label-thum bg-red">
                                    -35%
                                </span>
                                <span class="label-thum bg-blue">
                                    New
                                </span>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 box-cslp active-block">
                        <div class="thumbnail position-relative">
                            <div class="img-thum position-relative set-img-shop">
                                <img src="{{asset('public/frontEnd/images/product/demo-pro.png')}}" alt="">
                                <ul class="content-it align-items-center">
                                    <li data-toggle="tooltip" data-placement="top" title="Add To Cart"><span><i
                                                class="fas fa-shopping-bag"></i></span></li>
                                    <li data-toggle="tooltip modal" data-placement="top" title="View Product"><span><i
                                                class="fas fa-eye" data-toggle="modal"
                                                data-target="#modal-product"></i></span></li>
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
                    </div>
                    {{-- end box product --}}

                    {{-- List product  --}}
                    <div class="col-md-12 list-cslp">
                        <div class="row">
                            <div class="col-md-4 p-0">
                                <a href="" class="img-list-cslp position-relative">
                                    <img src="{{asset('public/frontEnd/images/product/demo-pro.png')}}" alt="">
                                </a>
                                <div class="lable-thumbail">
                                    <span class="label-thum bg-red">
                                        -35%
                                    </span>
                                    <span class="label-thum bg-blue">
                                        New
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="content-thum border-bottom">
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
                                        <div class="collect-color d-inline-block float-right">
                                            <span class="box-color" style="background-color: black"></span>
                                            <span class="box-color" style="background-color: rgb(31, 218, 87)"></span>
                                            <span class="box-color" style="background-color: red"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-cslp-content pt-2">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum provident rem ut.
                                        Sit voluptatibus cupiditate eos.</p>
                                    <div class="tool-list-product">
                                        <ul class="content-list">
                                            <li data-toggle="tooltip" data-placement="top" title="Add To Cart">
                                                <div class="btn-carts">
                                                    <span><i class="fas fa-shopping-bag"></i></span>
                                                    <p> Add To Cart</p>
                                                </div>
                                            </li>
                                            <li data-toggle="tooltip" data-placement="top" title="View Product"><span><i
                                                        class="fas fa-eye" data-toggle="modal"
                                                        data-target="#modal-product"></i></span></li>
                                            <li data-toggle="tooltip" data-placement="top" title="Add To Heart"><span><i
                                                        class="fas fa-heart"></i></span></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 list-cslp">
                        <div class="row">
                            <div class="col-md-4 p-0">
                                <a href="" class="img-list-cslp position-relative">
                                    <img src="{{asset('public/frontEnd/images/product/demo-pro.png')}}" alt="">
                                </a>
                                <div class="lable-thumbail">
                                    <span class="label-thum bg-red">
                                        -35%
                                    </span>
                                    <span class="label-thum bg-blue">
                                        New
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="content-thum border-bottom">
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
                                        <div class="collect-color d-inline-block float-right">
                                            <span class="box-color" style="background-color: black"></span>
                                            <span class="box-color" style="background-color: rgb(31, 218, 87)"></span>
                                            <span class="box-color" style="background-color: red"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-cslp-content pt-2">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum provident rem ut.
                                        Sit voluptatibus cupiditate eos.</p>
                                    <div class="tool-list-product">
                                        <ul class="content-list">
                                            <li data-toggle="tooltip" data-placement="top" title="Add To Cart">
                                                <div class="btn-carts">
                                                    <span><i class="fas fa-shopping-bag"></i></span>
                                                    <p> Add To Cart</p>
                                                </div>
                                            </li>
                                            <li data-toggle="tooltip" data-placement="top" title="View Product"><span><i
                                                        class="fas fa-eye" data-toggle="modal"
                                                        data-target="#modal-product"></i></span></li>
                                            <li data-toggle="tooltip" data-placement="top" title="Add To Heart"><span><i
                                                        class="fas fa-heart"></i></span></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 list-cslp">
                        <div class="row">
                            <div class="col-md-4 p-0">
                                <a href="" class="img-list-cslp position-relative">
                                    <img src="{{asset('public/frontEnd/images/product/demo-pro.png')}}" alt="">
                                </a>
                                <div class="lable-thumbail">
                                    <span class="label-thum bg-red">
                                        -35%
                                    </span>
                                    <span class="label-thum bg-blue">
                                        New
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="content-thum border-bottom">
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
                                        <div class="collect-color d-inline-block float-right">
                                            <span class="box-color" style="background-color: black"></span>
                                            <span class="box-color" style="background-color: rgb(31, 218, 87)"></span>
                                            <span class="box-color" style="background-color: red"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-cslp-content pt-2">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum provident rem ut.
                                        Sit voluptatibus cupiditate eos.</p>
                                    <div class="tool-list-product">
                                        <ul class="content-list">
                                            <li data-toggle="tooltip" data-placement="top" title="Add To Cart">
                                                <div class="btn-carts">
                                                    <span><i class="fas fa-shopping-bag"></i></span>
                                                    <p> Add To Cart</p>
                                                </div>
                                            </li>
                                            <li data-toggle="tooltip" data-placement="top" title="View Product"><span><i
                                                        class="fas fa-eye" data-toggle="modal"
                                                        data-target="#modal-product"></i></span></li>
                                            <li data-toggle="tooltip" data-placement="top" title="Add To Heart"><span><i
                                                        class="fas fa-heart"></i></span></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 list-cslp">
                        <div class="row">
                            <div class="col-md-4 p-0">
                                <a href="" class="img-list-cslp position-relative">
                                    <img src="{{asset('public/frontEnd/images/product/demo-pro.png')}}" alt="">
                                </a>
                                <div class="lable-thumbail">
                                    <span class="label-thum bg-red">
                                        -35%
                                    </span>
                                    <span class="label-thum bg-blue">
                                        New
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="content-thum border-bottom">
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
                                        <div class="collect-color d-inline-block float-right">
                                            <span class="box-color" style="background-color: black"></span>
                                            <span class="box-color" style="background-color: rgb(31, 218, 87)"></span>
                                            <span class="box-color" style="background-color: red"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-cslp-content pt-2">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum provident rem ut.
                                        Sit voluptatibus cupiditate eos.</p>
                                    <div class="tool-list-product">
                                        <ul class="content-list">
                                            <li data-toggle="tooltip" data-placement="top" title="Add To Cart">
                                                <div class="btn-carts">
                                                    <span><i class="fas fa-shopping-bag"></i></span>
                                                    <p> Add To Cart</p>
                                                </div>
                                            </li>
                                            <li data-toggle="tooltip" data-placement="top" title="View Product"><span><i
                                                        class="fas fa-eye" data-toggle="modal"
                                                        data-target="#modal-product"></i></span></li>
                                            <li data-toggle="tooltip" data-placement="top" title="Add To Heart"><span><i
                                                        class="fas fa-heart"></i></span></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 list-cslp">
                        <div class="row">
                            <div class="col-md-4 p-0">
                                <a href="" class="img-list-cslp position-relative">
                                    <img src="{{asset('public/frontEnd/images/product/demo-pro.png')}}" alt="">
                                </a>
                                <div class="lable-thumbail">
                                    <span class="label-thum bg-red">
                                        -35%
                                    </span>
                                    <span class="label-thum bg-blue">
                                        New
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="content-thum border-bottom">
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
                                        <div class="collect-color d-inline-block float-right">
                                            <span class="box-color" style="background-color: black"></span>
                                            <span class="box-color" style="background-color: rgb(31, 218, 87)"></span>
                                            <span class="box-color" style="background-color: red"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-cslp-content pt-2">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum provident rem ut.
                                        Sit voluptatibus cupiditate eos.</p>
                                    <div class="tool-list-product">
                                        <ul class="content-list">
                                            <li data-toggle="tooltip" data-placement="top" title="Add To Cart">
                                                <div class="btn-carts">
                                                    <span><i class="fas fa-shopping-bag"></i></span>
                                                    <p> Add To Cart</p>
                                                </div>
                                            </li>
                                            <li data-toggle="tooltip" data-placement="top" title="View Product"><span><i
                                                        class="fas fa-eye" data-toggle="modal"
                                                        data-target="#modal-product"></i></span></li>
                                            <li data-toggle="tooltip" data-placement="top" title="Add To Heart"><span><i
                                                        class="fas fa-heart"></i></span></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End list product  --}}
                </div>
                <div class="paginations">
                    <div class="content-pagination">
                        <a class="pag d-none"><i class="fas fa-angle-left"></i></a>
                        <a href="" class="pag pag-active">1</a>
                        <a href="" class="pag">2</a>
                        <a href="" class="pag">3</a>
                        <a href="" class="pag">3</a>
                        <a class="pag"><i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="filter-mobi">
    <form class="content-filter-mobi">
        <div class="text-center">
            <h3 class="text-center">Fillter Product</h3>
            <img src="{{asset('public/frontEnd/images/song.png')}}" alt="">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Categories</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>Select Categories</option>
                <option>Spa</option>
                <option>Beauty</option>
                <option>Make up</option>
                <option>Skincare</option>
                <option>Body care</option>
                <option>Tools</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Refine Search</label>
            <select class="form-control" id="exampleFormControlSelect2">
                <option>Select Refine Search</option>
                <option>Dry skin</option>
                <option>Mixed skin</option>
                <option>Oily skin</option>
                <option>Fair skin</option>
                <option>Dark skin</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Price</label>
            <select class="form-control" id="exampleFormControlSelect2">
                <option>Select Price</option>
                <option>$0.00 - $25.00</option>
                <option>$25.00 - $50.00</option>
                <option>$50.00 - $75.00</option>
                <option>$75.00 - $100.00</option>
            </select>
        </div>
        <div class="d-flex justify-content-between">
            <button type="button" class="btn-cfm bcfm-exit">Exit</button>
            <button type="sumbit" class="btn-cfm">Apply</button>
        </div>
    </form>
</div>
@endsection