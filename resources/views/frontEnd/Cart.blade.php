@extends('layouts/frontEnd/layoutFrontEnd2')
@section('titleWeb',"Shop")
@section('content')
<section class="banner-page2 text-center">
    <h1>Cart</h1>
    <p><a href="">Home</a>/ <span>cart</span> </p>
</section>
<div class="wp-box">
    <div class="wp-container container">
        <div class="row">
            <div class="t_cartmain col-md-12">
                <div class="overflow-x:auto">
                    <table class="table t_viewtable cols-6">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col"></th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row" data-label="Product" class="t_cartimg">
                                    <img style="width:100px;height: 100px;object-fit: cover;"
                                        src="{{asset('public/frontEnd/images/product/demo-pro.png')}}" alt="">
                                </td>
                                <td data-label="">
                                    <p>Eyes</p>
                                    <h6>The expert mascaraa</h6>
                                </td >
                                <td data-label="Price">
                                    <h6>$21.00</h6>
                                </td>
                                <td data-label="Quantity">
                                    <div class="t_cartqty">
                                        <div class="qty-block">
                                            <div class="qty_inc_dec">
                                                <i class="fas fa-minus"></i>
                                            </div>
                                            <div class="qty">
                                                <input type="text" name="qty" maxlength="12" value="1" title=""
                                                    class="input-text" />
                                            </div>
                                            <div class="qty_inc_dec">
                                                <i class="fas fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td data-label="Total">
                                    <h6>$21.00</h6>
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
                                <td data-label="">
                                    <p>Eyes</p>
                                    <h6>The expert mascaraa</h6>
                                </td>
                                <td data-label="Price">
                                    <h6>$21.00</h6>
                                </td>
                                <td data-label="Quantity">
                                    <div class="t_cartqty">
                                        <div class="qty-block">
                                            <div class="qty_inc_dec">
                                                <i class="fas fa-minus"></i>
                                            </div>
                                            <div class="qty">
                                                <input type="text" name="qty" maxlength="12" value="1" title=""
                                                    class="input-text" />
                                            </div>
                                            <div class="qty_inc_dec">
                                                <i class="fas fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td data-label="Total">
                                    <h6>$21.00</h6>
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
                                <td data-label="">
                                    <p>Eyes</p>
                                    <h6>The expert mascaraa</h6>
                                </td >
                                <td data-label="Price">
                                    <h6>$21.00</h6>
                                </td>
                                <td data-label="Quantity">
                                    <div class="t_cartqty">
                                        <div class="qty-block">
                                            <div class="qty_inc_dec">
                                                <i class="fas fa-minus"></i>
                                            </div>
                                            <div class="qty">
                                                <input type="text" name="qty" maxlength="12" value="1" title=""
                                                    class="input-text" />
                                            </div>
                                            <div class="qty_inc_dec">
                                                <i class="fas fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td data-label="Total">
                                    <h6>$21.00</h6>
                                </td>
                                <td class="t_deletecart">
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
                                <td data-label="">
                                    <p>Eyes</p>
                                    <h6>The expert mascaraa</h6>
                                </td>
                                <td data-label="Price">
                                    <h6>$21.00</h6>
                                </td>
                                <td data-label="Quantity">
                                    <div class="t_cartqty">
                                        <div class="qty-block">
                                            <div class="qty_inc_dec">
                                                <i class="fas fa-minus"></i>
                                            </div>
                                            <div class="qty">
                                                <input type="text" name="qty" maxlength="12" value="1" title=""
                                                    class="input-text" />
                                            </div>
                                            <div class="qty_inc_dec">
                                                <i class="fas fa-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td data-label="Total">
                                    <h6>$21.00</h6>
                                </td>
                                <td>
                                    <a href="">
                                        <i class="far fa-times-circle"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <div class="t_cartactive">
                        <div class="row">
                            <div class="t_continue col-md-7">
                                <a href="">
                                    <i class="fas fa-reply"></i>
                                    <h6>Continue shopping</h6>
                                </a>
                            </div>
                            <div class="t_active col-md-5">
                                <div class="t_clearcart">
                                    <a href="">
                                        <i class="far fa-trash-alt"></i>
                                        <h6>Clear shopping cart</h6>
                                    </a>
                                </div>
                                <div class="t_updatecart">
                                    <a href="">
                                        <i class="fas fa-spinner"></i>
                                        <h6>Update cart</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="t_carttotal">
                        <div class="row">
                            <div class=" col-md-8 p-3">
                                <div class="t_couponcode">
                                    <div class="t_coupontext">
                                        <p>Enter coupon code. It will be applied at checkout.</p>
                                    </div>
                                    <div class="couponform">
                                        <form action="" >
                                            <div class="input-group mb-3" id="t_formcode">
                                                <input type="text" class="form-control" placeholder="Your code here"
                                                    aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <button>APPLY</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
    
                            </div>
                            <div class=" col-md-4 p-3">
                                <div class=" t_total">
                                    <h4>Cart Total</h4>
                                    <div class="t_st"><h6>Subtotal</h6><Span style="color:#111">$217.00</Span></div>
                                    <div class="t_tt"><h6>Total</h6><Span>$217.00</Span></div>
                                    <button>PROCEED TO CHECKOUT</button>
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