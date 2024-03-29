// Banner
var bannerOwl = $('#banner.owl-carousel');

bannerOwl.on("initialize.owl.carousel", () => {
    setTimeout(() => {
        $(".owl-item.active .owl-slide-animated").addClass("is-transitioned");
    }, 200);
});

bannerOwl.owlCarousel({
    loop: true,
    items: 1,
    responsiveClass: true,
    autoplay: true
})

bannerOwl.on("changed.owl.carousel", e => {
    $(".owl-slide-animated").removeClass("is-transitioned");
    const $currentOwlItem = $(".owl-item").eq(e.item.index);
    $currentOwlItem.find(".owl-slide-animated").addClass("is-transitioned");
});
// End banner
// Beauty product
var BeautyproductOwl = $('.beaty-product .owl-carousel');


BeautyproductOwl.owlCarousel({
    loop: true,
    items: 4,
    margin: 32,
    responsiveClass: true,
    autoplay: true,
    responsive: {
        0: {
            items: 1
        },
        768: {
            items: 3
        },
        1000: {
            items: 4
        }
    }
});
// end Beauty product

// owl-text
var owltext = $('.otm.owl-carousel');
owltext.owlCarousel({
    autoplay: true,
    autoplayTimeout: 4000,
    loop: true,
    items: 1
});
$(".content-sp .btn-left").click(function() {
    owltext.trigger('prev.owl');
    // alert("ok ");
});
$(".content-sp .btn-right").click(function() {
    owltext.trigger('next.owl');
});


// end owl-text

// owl-choose-Image 
var owlChooseImg = $('#img-choose .owl-carousel');
owlChooseImg.owlCarousel({
    loop: true,
    items: 5,
    margin: 18,
    responsive: {
        0: {
            items: 3,
            margin: 5
        },
        768: {
            items: 4,
            margin: 7
        },
        1000: {
            items: 4
        }
    }
});
// end owl-choose-image 
// owl-logo-banrd
var owllogobanrd = $('.logob-f .owl-carousel');
owllogobanrd.owlCarousel({
    loop: true,
    items: 5,
    margin: 10,
    stagePadding: 50,
    nav: false,
    autoplay: true,
    autoplayTimeout: 4000,
    responsive: {
        0: {
            items: 1,
            margin: 5,
            nav: false,
            stagePadding: 0,
            margin: 0
        },
        768: {
            items: 2,
            margin: 7
        },
        1000: {
            items: 4,
        }
    }
});
$(".btn-controller-left-lf").click(function() {
    owllogobanrd.trigger('prev.owl');
    // alert("ok ");
});
$(".btn-controller-right-lf").click(function() {
    owllogobanrd.trigger('next.owl');
});
// end owl-logo-banrd 
// Menu mobi 
$('.icon-bar').click(function() {
    $('.mobile-nav').addClass('mobile-nav-active');
    $('.icon-close').addClass('icon-close-active');
});
$('.icon-close').click(function() {
    $('.mobile-nav').removeClass('mobile-nav-active');
    $('.icon-close').removeClass('icon-close-active');
});
// End menu mobi
// Cart click 
$('.cart-icon').click(function(event) {
    $('.cart-hover').addClass('cart-hover-active');
    $('.box-cart-home').css("opacity", "1");
    $('.box-cart-home').css("z-index", "21");

});
$('.box-cart-home').click(function(e) {
    if (!document.getElementById('cart-hovers').contains(e.target)) {
        $('.cart-hover').removeClass('cart-hover-active');
        $('.box-cart-home').css("opacity", "0");
        $('.box-cart-home').css("z-index", "-10");
    }
});


// End Cart click
$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
});

// Click show list product
$('.icl-bar').click(function(e) {
    $('.icl-th').removeClass('icl-activer');
    $('.icl-bar').addClass('icl-activer');
    $('.box-cslp').removeClass('active-block');
    $('.list-cslp').addClass('active-block');

});
$('.icl-th').click(function(e) {
    $('.icl-th').addClass('icl-activer');
    $('.icl-bar').removeClass('icl-activer');
    $('.box-cslp').addClass('active-block');
    $('.list-cslp').removeClass('active-block');
});
// End click show list product
// Show fillter product 
$('.btn-filter').click(function(e) {
    $('.filter-mobi').addClass('filter-mobi-activer');
});
$('.bcfm-exit').click(function(e) {
    $('.filter-mobi').removeClass('filter-mobi-activer');
});
// End show fillter product
// Choose image 
$('.item-img-choose').click(function(e) {
    var src = $(this).attr("src");
    $('.set-img-choosed').attr("src", src);
});
// end choose image
// quantity
$('.qty_inc_dec.add').click(function() {

    $('#number-quan').val(+$('#number-quan').val() + 1);

});
$('.qty_inc_dec.dec').click(function() {
    if ($('#number-quan').val() > 1) {
        if ($('#number-quan').val() > 1) $('#number-quan').val(+$('#number-quan').val() - 1);
    }
});
// end quantity
$(document).ready(function() {
    $(window).bind('scroll', function() {
        var navHeight = 150;
        if ($(window).scrollTop() > navHeight) {
            $('nav').addClass('nav-active-k');
        } else {
            $('nav').removeClass('nav-active-k');
        }
    });
});