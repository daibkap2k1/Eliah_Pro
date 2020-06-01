@extends('layouts/frontEnd/layoutFrontEnd2')
@section('titleWeb',"Eliah")
@section('content')
<div class="wp-container container" id="t_checkout">
    <div class="row">
        <form class="checkoutleft col-lg-8">
            <div class="checkoutcnt">
                <h4>Contact information</h4>

                <h5>Already have an account?<span> Login</span></h5>

            </div>
            <div class="t_checkout_info">
                <input style="width:100%" type="text" name="" id="" placeholder="Email or mobile phone number">
                <input style="width:2%" type="checkbox" name="" id=""> Keep me up to dateon news and exclusive offers
            </div>
            <div class="t_allcntcl">
                <h4>Shipping address</h4>
                <div class="row">
                    <div class="t_checkout_firstname col-md-6">
                        <label for="">Firstname <span>*</span></label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="t_checkout_lastname col-md-6">
                        <label for="">Lastname <span>*</span></label>
                        <input type="text" name="" id="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-6 col-12">
                        <div class="t_checkout_country">
                            <label for="">Country <span>*</span></label>
                            <input type="text" name="" id="">
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6 col-12">
                        <div class="t_checkout_address">
                            <label for="">Address <span>*</span></label>
                            <input type="text" name="" id="" placeholder="Street address">
                            <input type="text" name="" id="" placeholder="Apartment, suite, unite ect(optinal)">
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="t_checkout_town col-lg-12 col-md-6 col-12">
                    <label for="">Town/City <span>*</span></label>
                    <input type="text" name="" id="">
                </div>
                <div class="t_checkout_state col-lg-12 col-md-6 col-12">
                    <label for="">Country/State <span>*</span></label>
                    <input type="text" name="" id="">
                </div>
                </div>
                <div class="row">
                <div class="t_checkout_code col-lg-12 col-md-6 col-12">
                    <label for="">Postcode/Zip <span>*</span></label>
                    <input type="text" name="" id="">
                </div>
                <div class="t_checkout_note col-lg-12 col-md-6 col-12">
                    <label for="">Order note <span>*</span></label>
                    <input type="text" name="" id="" placeholder="Note about your order, e.g, special noe for delivery">
                    <input style="width:2%" type="checkbox" name="" id=""> Save this information for next time

                </div>
                </div>
            </div>
        </form>
        <form class="checkoutright col-lg-4 ">
            <h4>Your order</h4>
            <hr>
            <div class="t_crcode">
                <h6>Coupon code</h6>
                <input type="text" name="" id="" placeholder=" Your code here">
                <button>APPLY</button>
            </div>
            <p class="t_crcnt">
                <h6>Product</h6>
                <div class="t_crp1">
                    <div class="t_pdleft"><span>01x</span>
                        <p>The expert mascara</p>
                    </div>
                    <div class="t_pdprice"><span>$ 21.00</span></div>
                </div>
                <div class="t_crp1">
                    <div class="t_pdleft"><span>01x</span>
                        <p>Leather shopper bag</p>
                    </div>
                    <div class="t_pdprice"><span>$ 49.00</span></div>
                </div>
                <div class="t_crp1">
                    <div class="t_pdleft"><span>03x</span>
                        <p>Velvet melon hight</p>
                    </div>
                    <div class="t_pdprice"><span>$ 102.00</span></div>
                </div>
                <div class="t_crp1">
                    <div class="t_pdleft"><span>01x</span>
                        <p>Luxe jewel lipstick</p>
                    </div>
                    <div class="t_pdprice"><span>$ 45.00</span></div>
                </div>
            </p>
            <hr>
            <p class="t_crtotal">
                <div class="t_crsub">
                    <h6>Subtotal</h6><span>$ 217.00</span>
                </div>
                <div class="t_crtl">
                    <h6>Total</h6><span>$ 217.00</span>
                </div>
            </p>
            <hr>
            <div class="t_crcb">
                <ul>
                    <li style="padding-bottom:10px"><input type="checkbox" name="" id=""> Cheque payment</li>
                    <li style="padding-bottom:10px"><input type="checkbox" name="" id=""> PayPal</li>

                </ul>
            </div>
            <button type="submit">PLACE ODER</button>
        </form>
    </div>

</div>
@endsection