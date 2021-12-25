<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<!--Main Slider Start-->
<section class="main-slider">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
    "effect": "fade",
    "pagination": {
    "el": "#main-slider-pagination",
    "type": "bullets",
    "clickable": true
    },
    "navigation": {
    "nextEl": ".banner-slider-button-next",
    "prevEl": ".banner-slider-button-prev",
    "clickable": true
    },
    "autoplay": {
    "delay": 5000
    }}'>

        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url(<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/main-slider/slider-1-1.jpg);"></div>
                <div class="container">
                    <div class="swiper-slide-inner">
                        <div class="row">
                            <div class="col-xl-12">
                                <p>Welcome to Factory & Industry Business</p>
                                <h2>Build Everything <br> With Passion</h2>
                                <a href="about.html" class="thm-btn">get to know us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url(<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/main-slider/slider-1-2.jpg);"></div>
                <div class="container">
                    <div class="swiper-slide-inner">
                        <div class="row">
                            <div class="col-xl-12">
                                <p>Welcome to Factory & Industry Business</p>
                                <h2>Build Everything <br> With Passion</h2>
                                <a href="about.html" class="thm-btn">get to know us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-layer"
                    style="background-image: url(<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/main-slider/slider-1-3.jpg);"></div>
                <div class="container">
                    <div class="swiper-slide-inner">
                        <div class="row">
                            <div class="col-xl-12">
                                <p>Welcome to Factory & Industry Business</p>
                                <h2>Build Everything <br> With Passion</h2>
                                <a href="about.html" class="thm-btn">get to know us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="swiper-pagination" id="main-slider-pagination"></div>
        <div class="banner-slider-nav">
            <div class="banner-slider-button-prev"><span class="flaticon-right-arrow"></span></div>
            <div class="banner-slider-button-next"><span class="flaticon-right-arrow"></span> </div>
        </div>
    </div>
</section>

<!-- Our Services One Start -->
<section class="our_services_one">
    <div class="container">
        <div class="block-title text-center">
            <h2>제품 카테고리</h2>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4">
                <!-- Our Services One Single -->
                <div class="our_services_one_single wow fadeInUp">
                    <div class="our_services_one_image">
                        <img src="<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/service/service-1-img-1.jpg" alt="">
                        <div class="our_services_icon">
                            <span class="flaticon-industrial"></span>
                        </div>
                    </div>
                    <div class="our_services_one_content">
                        <h3><a href="/bbs/board.php?bo_table=product&sca=생산·검사장비">생산/검사장비 외</a></h3>
                        <p>개발 및 양산 제품의 온도와 습도의 여러 조건으로 인가하여 제품의 문제점 발췌와 신뢰성을 확보하기 위한 설비</p>
                        <a href="/bbs/board.php?bo_table=product&sca=생산·검사장비" class="services_one_arrow_icon">
                            <span class="flaticon-right-arrow"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <!-- Our Services One Single -->
                <div class="our_services_one_single wow fadeInUp" data-wow-delay="100ms">
                    <div class="our_services_one_image">
                        <img src="<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/service/service-1-img-2.jpg" alt="">
                        <div class="our_services_icon">
                            <span class="flaticon-engineering"></span>
                        </div>
                    </div>
                    <div class="our_services_one_content">
                        <h3><a href="/bbs/board.php?bo_table=product&sca=온습도시험장비">온습도 시험장비</a></h3>
                        <p>개발 및 양산 제품의 온도와 습도의 여러 조건으로 인가하여 제품의 문제점 발췌와 신뢰성을 확보하기 위한 설비</p>
                        <a href="/bbs/board.php?bo_table=product&sca=온습도시험장비" class="services_one_arrow_icon">
                            <span class="flaticon-right-arrow"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <!-- Our Services One Single -->
                <div class="our_services_one_single wow fadeInUp" data-wow-delay="200ms">
                    <div class="our_services_one_image">
                        <img src="<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/service/service-1-img-3.jpg" alt="">
                        <div class="our_services_icon">
                            <span class="flaticon-petroleum"></span>
                        </div>
                    </div>
                    <div class="our_services_one_content">
                        <h3><a href="/bbs/board.php?bo_table=product&sca=환경시험장비">환경 시험장비</a></h3>
                        <p>개발 제품의 충격 및 내구성능 검증하여 제품의 수명을 확인하기 위한 설비(터치/기구/통신/전파)</p>
                        <a href="/bbs/board.php?bo_table=product&sca=환경시험장비" class="services_one_arrow_icon">
                            <span class="flaticon-right-arrow"></span>
                        </a>
                    </div>
                </div>
            </div>
            <a href="/bbs/board.php?bo_table=product" class="thm-btn mt-2" style="margin: 0 auto;">더보기</a>
        </div>
    </div>
</section>

<!--Brand One Start-->
<section class="brand-one">
    <div class="container">
        <div class="block-title text-center">
            <h2>협력사 및 취급사</h2>
        </div>
        <div class="brand-one__carousel owl-carousel thm__owl-carousel owl-theme"
            data-options='{"loop": true, "autoplay": true, "autoplayHoverPause": true, "autoplayTimeout": 5000, "items": 5, "dots": false, "nav": false, "margin": 140, "smartSpeed": 700, "responsive": { "0": {"items": 2, "margin": 30}, "480": {"items": 3, "margin": 30}, "991": {"items": 4, "margin": 50}, "1199": {"items": 5, "margin": 140}}}'>
            <div class="item">
                <img src="<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/brand/brand-1-1.png" alt="">
            </div><!-- /.item -->
            <div class="item">
                <img src="<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/brand/brand-1-2.png" alt="">
            </div><!-- /.item -->
            <div class="item">
                <img src="<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/brand/brand-1-3.png" alt="">
            </div><!-- /.item -->
            <div class="item">
                <img src="<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/brand/brand-1-4.png" alt="">
            </div><!-- /.item -->
            <div class="item">
                <img src="<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/brand/brand-1-5.png" alt="">
            </div><!-- /.item -->
            <div class="item">
                <img src="<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/brand/brand-1-1.png" alt="">
            </div><!-- /.item -->
            <div class="item">
                <img src="<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/brand/brand-1-2.png" alt="">
            </div><!-- /.item -->
            <div class="item">
                <img src="<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/brand/brand-1-3.png" alt="">
            </div><!-- /.item -->
            <div class="item">
                <img src="<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/brand/brand-1-4.png" alt="">
            </div><!-- /.item -->
            <div class="item">
                <img src="<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/brand/brand-1-5.png" alt="">
            </div><!-- /.item -->
        </div>
    </div>
</section>

<?php
include_once(G5_THEME_PATH.'/tail.php');