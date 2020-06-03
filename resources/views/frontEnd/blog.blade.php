@extends('layouts/frontEnd/layoutFrontEnd2')
@section('titleWeb',"Blog")
@section('content')
<section class="banner-page2 text-center">
    <h1>Shop</h1>
    <p><a href="">Home</a>/ <span>Blog</span> </p>
</section>
<section id="blog" class="wp-box">
    <div class="wp-container container">
        <div class="row">
            <div class="col-lg-4 order-2 order-lg-1">
                <div class="left-blog">
                    <form class="search-blog" method="get">
                        <input type="text" placeholder="Enter keyword..." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    <div class="flow-me-blog border-bottom">
                        <h3 class="title-left-blog">Follow me</h3>
                        <ul class="reset-margin">
                            <li><a href="" class="text-black"><span><i class="fab fa-facebook-f"></i></span></a></li>
                            <li><a href="" class="text-black"><span><i class="fab fa-twitter"></i></span></a></li>
                            <li><a href="" class="text-black"><span><i class="fab fa-instagram"></i></span></a></li>
                            <li><a href="" class="text-black"><span><i class="fab fa-youtube"></i></span></a></li>
                        </ul>
                    </div>
                    <div class="category-blog border-bottom">
                        <h3 class="title-left-blog">Category</h3>
                        <ul>
                            <li>
                                <div class="title-cate-blog">
                                    Beauty tips
                                </div>
                                <div class="number-cate-blog">
                                    36
                                </div>
                            </li>
                            <li>
                                <div class="title-cate-blog">
                                    Make up
                                </div>
                                <div class="number-cate-blog">
                                    36
                                </div>
                            </li>
                            <li>
                                <div class="title-cate-blog">
                                    Skin care
                                </div>
                                <div class="number-cate-blog">
                                    12
                                </div>
                            </li>
                            <li>
                                <div class="title-cate-blog">
                                    Body care
                                </div>
                                <div class="number-cate-blog">
                                    36
                                </div>
                            </li>
                            <li>
                                <div class="title-cate-blog">
                                    Videos
                                </div>
                                <div class="number-cate-blog">
                                    27
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="popular-post border-bottom">
                        <h3 class="title-left-blog">Popular post</h3>
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-12">
                                <a href="" class="item-cpps">
                                    <div class="img-cpp">
                                        <img src="{{asset('public/frontEnd/images/product/demo-pro.png')}}" alt="">
                                    </div>
                                    <div class="content-item-cpp">
                                        <h4>Proven Techniques Help You Herbal Breast</h4>
                                        <p>13 Now 2020</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-md-6 col-lg-12">
                                <a href="" class="item-cpps">
                                    <div class="img-cpp">
                                        <img src="{{asset('public/frontEnd/images/product/demo-pro.png')}}" alt="">
                                    </div>
                                    <div class="content-item-cpp">
                                        <h4>Proven Techniques Help You Herbal Breast</h4>
                                        <p>13 Now 2020</p>
                                    </div>
                                </a>
                            </div>
                            
                            <div class="col-12 col-md-6 col-lg-12">
                                <a href="" class="item-cpps">
                                    <div class="img-cpp">
                                        <img src="{{asset('public/frontEnd/images/product/demo-pro.png')}}" alt="">
                                    </div>
                                    <div class="content-item-cpp">
                                        <h4>Proven Techniques Help You Herbal Breast</h4>
                                        <p>13 Now 2020</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-md-6 col-lg-12">
                                <a href="" class="item-cpps">
                                    <div class="img-cpp">
                                        <img src="{{asset('public/frontEnd/images/product/demo-pro.png')}}" alt="">
                                    </div>
                                    <div class="content-item-cpp">
                                        <h4>Proven Techniques Help You Herbal Breast</h4>
                                        <p>13 Now 2020</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-md-6 col-lg-12">
                                <a href="" class="item-cpps">
                                    <div class="img-cpp">
                                        <img src="{{asset('public/frontEnd/images/product/demo-pro.png')}}" alt="">
                                    </div>
                                    <div class="content-item-cpp">
                                        <h4>Proven Techniques Help You Herbal Breast</h4>
                                        <p>13 Now 2020</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-md-6 col-lg-12">
                                <a href="" class="item-cpps">
                                    <div class="img-cpp">
                                        <img src="{{asset('public/frontEnd/images/product/demo-pro.png')}}" alt="">
                                    </div>
                                    <div class="content-item-cpp">
                                        <h4>Proven Techniques Help You Herbal Breast</h4>
                                        <p>13 Now 2020</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="new-letter">
                            <h3 class="title-left-blog">Newsletter</h3>
                            <p>Subscribe to our newsletter a nd get our newest updates right on your</p>
                            <form action="">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Email....">
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" value="">I agree to the terms &
                                        conditions
                                    </label>
                                </div>
                                <div class="form-check-inline mt-3">
                                    <button type="submit" class="btn-custom-black">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-12 order-1 order-lg-2">
                <div class="right-blog">
                    <div class="row">
                        <div class="col-6 mb-3 col-md-3">
                            <div class="btn-filter">
                                <span><i class="fas fa-filter"></i></span>
                                Filter
                            </div>
                        </div>
                        <div class="col-lg-12 col-12">
                            <div class="box-content-post-blog">
                                <div class="img-top-post position-relative">
                                    <img src="{{asset('public/frontEnd/images/product/demo-pro.png')}}" alt="">
                                    <div class="space-whitle">
                                    </div>
                                </div>
                                <div class="content-post-right-blogs">
                                    <div class="text-thumb-cpr"> <span>05 <br> Feb</span></div>
                                    <div class="cpr-blog-top">
                                        <div class="right-cpr-blog-top">
                                            <div class="author-post-top">
                                                <span>by</span>
                                                Lindsay Weinberg
                                                <span>/</span>
                                                <span class="active-post">Beauty tips</span>
                                            </div>
                                            <h3 class="title-post-right">
                                                Breast Augmentation Breast Enlargement Medical Tourism In The Philippine
                                            </h3>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic voluptate
                                                officia sequi laudantium qui! Nulla numquam dolor natus accusamus
                                                possimus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-12 col-md-6">
                            <div class="box-content-post-blog">
                                <div class="img-post-right-blog">
                                    <img src="{{asset('public/frontEnd/images/product/demo-pro.png')}}" alt="">
                                    <div class="author-post">
                                        <div class="left-author-post">
                                            05 <br> Feb
                                        </div>
                                        <div class="right-author-post">
                                            <span>by</span>
                                            Lindsay Weinberg
                                            <span>Beauty tips</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-post-right-blogs">
                                    <div class="cpr-blog">
                                        <div class="right-cpr-blog">
                                            <h3 class="title-post-right">
                                                Breast Augmentation Breast Enlargement Medical Tourism In The Philippine
                                            </h3>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic voluptate
                                                officia sequi laudantium qui! Nulla numquam dolor natus accusamus
                                                possimus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 col-md-6">
                            <div class="box-content-post-blog">
                                <div class="img-post-right-blog">
                                    <img src="{{asset('public/frontEnd/images/product/demo-pro.png')}}" alt="">
                                    <div class="author-post">
                                        <div class="left-author-post">
                                            05 <br> Feb
                                        </div>
                                        <div class="right-author-post">
                                            <span>by</span>
                                            Lindsay Weinberg
                                            <span>Beauty tips</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-post-right-blogs">
                                    <div class="cpr-blog">
                                        <div class="right-cpr-blog">
                                            <h3 class="title-post-right">
                                                Breast Augmentation Breast Enlargement Medical Tourism In The Philippine
                                            </h3>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic voluptate
                                                officia sequi laudantium qui! Nulla numquam dolor natus accusamus
                                                possimus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 col-md-6">
                            <div class="box-content-post-blog">
                                <div class="img-post-right-blog">
                                    <img src="{{asset('public/frontEnd/images/product/demo-pro.png')}}" alt="">
                                    <div class="author-post">
                                        <div class="left-author-post">
                                            05 <br> Feb
                                        </div>
                                        <div class="right-author-post">
                                            <span>by</span>
                                            Lindsay Weinberg
                                            <span>Beauty tips</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-post-right-blogs">
                                    <div class="cpr-blog">
                                        <div class="right-cpr-blog">
                                            <h3 class="title-post-right">
                                                Breast Augmentation Breast Enlargement Medical Tourism In The Philippine
                                            </h3>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic voluptate
                                                officia sequi laudantium qui! Nulla numquam dolor natus accusamus
                                                possimus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 col-md-6">
                            <div class="box-content-post-blog">
                                <div class="img-post-right-blog">
                                    <img src="{{asset('public/frontEnd/images/product/demo-pro.png')}}" alt="">
                                    <div class="author-post">
                                        <div class="left-author-post">
                                            05 <br> Feb
                                        </div>
                                        <div class="right-author-post">
                                            <span>by</span>
                                            Lindsay Weinberg
                                            <span>Beauty tips</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-post-right-blogs">
                                    <div class="cpr-blog">
                                        <div class="right-cpr-blog">
                                            <h3 class="title-post-right">
                                                Breast Augmentation Breast Enlargement Medical Tourism In The Philippine
                                            </h3>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic voluptate
                                                officia sequi laudantium qui! Nulla numquam dolor natus accusamus
                                                possimus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 col-md-6">
                            <div class="box-content-post-blog">
                                <div class="img-post-right-blog">
                                    <img src="{{asset('public/frontEnd/images/product/demo-pro.png')}}" alt="">
                                    <div class="author-post">
                                        <div class="left-author-post">
                                            05 <br> Feb
                                        </div>
                                        <div class="right-author-post">
                                            <span>by</span>
                                            Lindsay Weinberg
                                            <span>Beauty tips</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-post-right-blogs">
                                    <div class="cpr-blog">
                                        <div class="right-cpr-blog">
                                            <h3 class="title-post-right">
                                                Breast Augmentation Breast Enlargement Medical Tourism In The Philippine
                                            </h3>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic voluptate
                                                officia sequi laudantium qui! Nulla numquam dolor natus accusamus
                                                possimus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 col-md-6">
                            <div class="box-content-post-blog">
                                <div class="img-post-right-blog">
                                    <img src="{{asset('public/frontEnd/images/product/demo-pro.png')}}" alt="">
                                    <div class="author-post">
                                        <div class="left-author-post">
                                            05 <br> Feb
                                        </div>
                                        <div class="right-author-post">
                                            <span>by</span>
                                            Lindsay Weinberg
                                            <span>Beauty tips</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-post-right-blogs">
                                    <div class="cpr-blog">
                                        <div class="right-cpr-blog">
                                            <h3 class="title-post-right">
                                                Breast Augmentation Breast Enlargement Medical Tourism In The Philippine
                                            </h3>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic voluptate
                                                officia sequi laudantium qui! Nulla numquam dolor natus accusamus
                                                possimus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
    </div>
</section>
<div class="filter-mobi">
    <form class="content-filter-mobi">
        <div class="text-center">
            <h3 class="text-center">Fillter Post</h3>
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
        <div class="d-flex justify-content-between">
            <button type="button" class="btn-cfm bcfm-exit">Exit</button>
            <button type="sumbit" class="btn-cfm">Apply</button>
        </div>
    </form>
</div>
@endsection