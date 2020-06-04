@extends('layouts/frontEnd/layoutFrontEnd2')
@section('titleWeb',"Blog-Detail")
@section('content')
<section class="bg-banner-blog-detail cover" style="background-image: url('{{asset('public/frontEnd/images/banner.jpg')}}')">

</section>
<section id="blog-detail" class="wp-box">
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
                                <a href="{{route('blog-detail')}}">
                                    <div class="title-cate-blog">
                                        Beauty tips
                                    </div>
                                    <div class="number-cate-blog">
                                        36
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('blog-detail')}}">
                                    <div class="title-cate-blog">
                                        Make up
                                    </div>
                                    <div class="number-cate-blog">
                                        36
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('blog-detail')}}">
                                    <div class="title-cate-blog">
                                        Skin care
                                    </div>
                                    <div class="number-cate-blog">
                                        12
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('blog-detail')}}">
                                    <div class="title-cate-blog">
                                        Body care
                                    </div>
                                    <div class="number-cate-blog">
                                        36
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('blog-detail')}}">
                                    <div class="title-cate-blog">
                                        Videos
                                    </div>
                                    <div class="number-cate-blog">
                                        27
                                    </div>
                                </a>
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-text-blog-detail">
                    <p class="text-blog-detail-ns">1Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex,
                        ducimus! Voluptas nostrum odio unde
                        provident sint accusantium, totam corporis ratione ducimus consequuntur accusamus dolores
                        officiis laudantium? Accusamus asperiores, esse officiis praesentium aperiam quibusdam iure
                        optio, repudiandae natus corporis beatae quam?
                        asperiores, esse officiis praesentium aperiam quibusdam iure optio, repudiandae natus corporis
                        beatae quam?
                    </p>
                    <p class="text-blog-detail-ns"><span class="text-black-blog">Lorem ipsum dolor</span> sit amet
                        consectetur adipisicing elit. Ex, ducimus! Voluptas nostrum odio unde
                        provident sint accusantium, totam corporis ratione ducimus consequuntur accusamus dolores
                        officiis laudantium? Accusamus asperiores, esse officiis praesentium aperiam quibusdam iure
                        optio, repudiandae natus corporis beatae quam?
                        asperiores, esse officiis praesentium aperiam quibusdam iure optio, repudiandae natus corporis
                        beatae quam?
                    </p>
                    <p class="text-blog-detail-ns"><span class="text-black-blog">Lorem ipsum dolor</span> sit amet
                        consectetur adipisicing elit. Ex, ducimus! Voluptas nostrum odio unde
                        provident sint accusantium, totam corporis ratione ducimus consequuntur accusamus dolores
                        officiis laudantium? Accusamus asperiores, esse officiis
                    </p>
                    <div class="img-blog-detail-center">
                        <img src="{{asset('public/frontEnd/images/blog/on1.png')}}" alt="">
                    </div>
                    <p class="text-blog-detail-ns"><span class="text-black-blog">Lorem ipsum dolor</span> sit amet
                        consectetur adipisicing elit. Ex, ducimus! Voluptas nostrum odio unde
                        provident sint accusantium, totam corporis ratione ducimus consequuntur accusamus dolores
                        officiis laudantium? Accusamus asperiores, esse officiis praesentium aperiam quibusdam iure
                        optio, repudiandae natus corporis beatae quam?
                        asperiores, esse officiis praesentium aperiam quibusdam iure optio, repudiandae natus corporis
                        beatae quam?
                    </p>
                    <p class="text-blog-detail-ns"><span class="text-black-blog">Lorem ipsum dolor</span> sit amet
                        consectetur adipisicing elit. Ex, ducimus! Voluptas nostrum odio unde
                        provident sint accusantium, totam corporis ratione ducimus consequuntur accusamus dolores
                        officiis laudantium? Accusamus asperiores, esse officiis
                    </p>
                    <div class="box-text-blog-detail">
                        <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet velit animi et suscipit vitae
                            officia aperiam nisi, eum molestiae facilis.</p>
                        <div class="author-blog-detail">
                            <span><i class="fas fa-quote-right"></i></span>
                            Trevor Lawson
                        </div>

                    </div>
                    <p class="text-blog-detail-ns"><span class="text-black-blog">Lorem ipsum dolor</span> sit amet
                        consectetur adipisicing elit. Ex, ducimus! Voluptas nostrum odio unde
                        provident sint accusantium, totam corporis ratione ducimus consequuntur accusamus dolores
                        officiis laudantium? Accusamus asperiores, esse officiis
                    </p>
                    <div class="tag-share">
                        <div class="tags-name">
                            <span>Tag:</span>
                            <ul>
                                <li><a href="">Back sODA</a></li>
                                <li><a href="">Tricks</a></li>
                                <li><a href="">Clearing</a></li>
                            </ul>
                        </div>
                        <div class="btn-share">
                            <span>Share</span>
                            <ul>
                                <li><a href="" class="text-black"><span><i class="fab fa-facebook-f"></i></span></a>
                                </li>
                                <li><a href="" class="text-black"><span><i class="fab fa-twitter"></i></span></a></li>
                                <li><a href="" class="text-black"><span><i class="fab fa-instagram"></i></span></a></li>
                                <li><a href="" class="text-black"><span><i class="fab fa-youtube"></i></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="next-prev-page-blog-detail">
                        <div class="btn-prev-blog">
                            <i class="fas fa-angle-left"></i>
                            <span>prev POST</span>
                        </div>
                        <div class="btn-next-blog">
                            <span>prev POST</span>
                            <i class="fas fa-angle-right"></i>
                        </div>
                    </div>
                    <form action="" class="form-blog-detail">
                        <h3>Leave a comment</h3>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Website">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            {{-- <label for="comment">Comment:</label> --}}
                            <textarea class="form-control" rows="5" id="comment" >comment:</textarea>
                        </div>
                        <div class="button-fld">
                            <button type="submit">Submit commit</button>
                        </div>
                    </form>
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