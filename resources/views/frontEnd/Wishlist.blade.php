@extends('layouts/frontEnd/layoutFrontEnd2')
@section('titleWeb',"Shop")
@section('content')
<section class="banner-page2 text-center">
    <h1>Shop Cart</h1>
    <p><a href="">Home</a>/ <span>Shop cart</span> </p>
</section>
<div class="wp-box">
    <div class="wp-container container">
        <div class="row">
            <div class="t_cartmain col-md-12">
                <div class="table-responsive">
                    <table class="table t_viewtable cols-6">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col"></th>
                                <th scope="col">Unit Price</th>
                                <th scope="col">Stock</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row" data-label="Product" class="t_cartimg">
                                    <img style="width:100px;height: 100px;object-fit: cover;"
                                        src="{{asset('public/frontEnd/images/product/demo-pro.png')}}" alt="">
                                </td>
                                <td>
                                    <p>Eyes</p>
                                    <h6>The expert mascaraa</h6>
                                </td>
                                <td data-label="Unit Price">  
                                    <h6>$21.00</h6>
                                </td>
                                <td data-label="Stock">
                                    <p>In stock</p>
                                </td>
                                <td>
                                    <button  class="t_buttonaddcart">ADD TO CART</button>
                                </td>
                                <td>
                                    <a href="">
                                        <i class="far fa-times-circle"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" data-label="Product" class="t_cartimg">
                                    <img style="width:100px;height: 100px;object-fit: cover;"
                                        src="{{asset('public/frontEnd/images/product/demo-pro.png')}}" alt="">
                                </td>
                                <td>
                                    <p>Eyes</p>
                                    <h6>The expert mascaraa</h6>
                                </td>
                                <td data-label="Unit Price">
                                    <h6>$21.00</h6>
                                </td>
                                <td data-label="Stock">
                                    <p>In stock</p>
                                </td>
                                <td>
                                    <button class="t_buttonaddcart">ADD TO CART</button>
                                </td>
                                <td>
                                    <a href="">
                                        <i class="far fa-times-circle"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" data-label="Product" class="t_cartimg">
                                    <img style="width:100px;height: 100px;object-fit: cover;"
                                        src="{{asset('public/frontEnd/images/product/demo-pro.png')}}" alt="">
                                </td>
                                <td>
                                    <p>Eyes</p>
                                    <h6>The expert mascaraa</h6>
                                </td>
                                <td data-label="Unit Price">
                                    <h6>$21.00</h6>
                                </td>
                                <td data-label="Stock">
                                    <p>In stock</p>
                                </td>
                                <td>
                                    <button class="t_buttonaddcart">ADD TO CART</button>
                                </td>
                                <td>
                                    <a href="">
                                        <i class="far fa-times-circle"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" data-label="Product" class="t_cartimg">
                                    <img style="width:100px;height: 100px;object-fit: cover;"
                                        src="{{asset('public/frontEnd/images/product/demo-pro.png')}}" alt="">
                                </td>
                                <td>
                                    <p>Eyes</p>
                                    <h6>The expert mascaraa</h6>
                                </td>
                                <td data-label="Unit Price">
                                    <h6>$21.00</h6>
                                </td>
                                <td data-label="Stock">
                                    <p>In stock</p>
                                </td>
                                <td>
                                    <button class="t_buttonaddcart">ADD TO CART</button>
                                </td>
                                <td class="t_deletecart">
                                    <a href="">
                                        <i class="far fa-times-circle"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                              
                </div>
            </div>
        </div>
    </div>
</div>
@endsection