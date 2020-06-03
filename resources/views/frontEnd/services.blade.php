@extends('layouts/frontEnd/layoutFrontEnd2')
@section('titleWeb',"Services")
@section('content')
<style>
    #banner-footer{
        display: none !important;
    }
</style>
<section class="banner-page2 text-center">
    <h1>Shop</h1>
    <p><a href="">Home</a>/ <span>Shop</span> </p>
</section>

<section class="container wp-box">
    <div class="row">
        <div class="col-lg-6">
            <div class="service img-service">
                <div class="first-img img">
                <img src="{{asset('public/frontEnd/images/girl-anime1.jpg')}}" alt="">
                </div>
                <div class="second-img img">
                    <img src="{{asset('public/frontEnd/images/girl-anime2.jpg')}}" alt="">
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="service content-service">
                <div class="num-service">
                    <span>01.</span>
                    <img src="{{asset('public/frontEnd/images/song2.png')}}" alt="">
                </div>
                <div class="title-list-service">
                    Body treatment
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique officia pariatur aperiam asperiores porro laborum? At quaerat omnis perspiciatis, ullam obcaecati quisquam sapiente facilis nulla, iure rerum ratione porro illo!</p>
                <ul>
                    <li><span><i class="fas fa-check"></i></span>Lorem ipsum dolor sit, amet consectetur adipisicing.</li>
                    <li><span><i class="fas fa-check"></i></span>Lorem ipsum dolor sit, amet consectetur adipisicing.</li>
                    <li><span><i class="fas fa-check"></i></span>Lorem ipsum dolor sit, amet consectetur adipisicing.</li>
                    <li><span><i class="fas fa-check"></i></span>Lorem ipsum dolor sit, amet consectetur adipisicing.</li>
                </ul>
                <div class="text-left">
                    <a href="" class="btn-more-service">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 order-2 order-lg-1">
            <div class="service content-service text-right service-reverse">
                <div class="num-service">
                    <img src="{{asset('public/frontEnd/images/song2.png')}}" alt="">
                    <span>02.</span>
                </div>
                <div class="title-list-service">
                    Body treatment
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique officia pariatur aperiam asperiores porro laborum? At quaerat omnis perspiciatis, ullam obcaecati quisquam sapiente facilis nulla, iure rerum ratione porro illo!</p>
                <ul>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing.<span><i class="fas fa-check"></i></span></li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing.<span><i class="fas fa-check"></i></span></li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing.<span><i class="fas fa-check"></i></span></li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing.<span><i class="fas fa-check"></i></span></li>
                </ul>
                <div class="float-right">
                    <a href="" class="btn-more-service">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
            <div class="service img-service text-left service-reverse">
                <div class="first-img img">
                <img src="{{asset('public/frontEnd/images/girl-anime1.jpg')}}" alt="">
                </div>
                <div class="second-img img">
                    <img src="{{asset('public/frontEnd/images/girl-anime2.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="service img-service">
                <div class="first-img img">
                <img src="{{asset('public/frontEnd/images/girl-anime1.jpg')}}" alt="">
                </div>
                <div class="second-img img">
                    <img src="{{asset('public/frontEnd/images/girl-anime2.jpg')}}" alt="">
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="service content-service">
                <div class="num-service">
                    <span>03.</span>
                    <img src="{{asset('public/frontEnd/images/song2.png')}}" alt="">
                </div>
                <div class="title-list-service">
                    Body treatment
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique officia pariatur aperiam asperiores porro laborum? At quaerat omnis perspiciatis, ullam obcaecati quisquam sapiente facilis nulla, iure rerum ratione porro illo!</p>
                <ul>
                    <li><span><i class="fas fa-check"></i></span>Lorem ipsum dolor sit, amet consectetur adipisicing.</li>
                    <li><span><i class="fas fa-check"></i></span>Lorem ipsum dolor sit, amet consectetur adipisicing.</li>
                    <li><span><i class="fas fa-check"></i></span>Lorem ipsum dolor sit, amet consectetur adipisicing.</li>
                    <li><span><i class="fas fa-check"></i></span>Lorem ipsum dolor sit, amet consectetur adipisicing.</li>
                </ul>
                <div class="text-left">
                    <a href="" class="btn-more-service">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 order-2 order-lg-1">
            <div class="service content-service text-right service-reverse">
                <div class="num-service">
                    <img src="{{asset('public/frontEnd/images/song2.png')}}" alt="">
                    <span>04.</span>
                </div>
                <div class="title-list-service">
                    Body treatment
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique officia pariatur aperiam asperiores porro laborum? At quaerat omnis perspiciatis, ullam obcaecati quisquam sapiente facilis nulla, iure rerum ratione porro illo!</p>
                <ul>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing.<span><i class="fas fa-check"></i></span></li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing.<span><i class="fas fa-check"></i></span></li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing.<span><i class="fas fa-check"></i></span></li>
                    <li>Lorem ipsum dolor sit, amet consectetur adipisicing.<span><i class="fas fa-check"></i></span></li>
                </ul>
                <div class="float-right">
                    <a href="" class="btn-more-service">Read More</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2">
            <div class="service img-service text-left service-reverse">
                <div class="first-img img">
                <img src="{{asset('public/frontEnd/images/girl-anime1.jpg')}}" alt="">
                </div>
                <div class="second-img img">
                    <img src="{{asset('public/frontEnd/images/girl-anime2.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<div class="wp-box cover"
    style="background-image: url('http://localhost:8888/eliah/public/frontEnd/images/home/banner-footer.jpg')">
    <div class="container wp-container text-center">
        <div class="form-service">
            <div class="bp-title text-center">
                <h1>Book Service</h1>
                <img src="http://localhost:8888/eliah/public/frontEnd/images/song.png" alt="">
            </div>
            <form action="">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-lg btn-default">Appoitment</button>
            </form>
        </div>
    </div>
</div>
@endsection