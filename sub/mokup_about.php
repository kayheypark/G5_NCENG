﻿<?php
include_once('../common.php');
$g5['title'] = "회사소개";
include_once(G5_PATH.'/head.php');
?>

<!--Page Header Start-->
<section class="page-header" style="background-image: url(<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/backgrounds/page-header-contact.jpg);">
    <div class="container">
        <h2>회사소개</h2>
    </div>
</section>

<!--Get To Know Start-->
<section class="get_to_know">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="get_to_know_left">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="get_to_know_single">
                                <div class="get_to_know_image">
                                    <img src="<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/about/get-to-know-img-1.jpg" alt="">
                                </div>
                            </div>
                            <div class="get_to_know_single">
                                <div class="get_to_know_image">
                                    <img src="<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/about/get-to-know-img-1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="get_to_know_big_image">
                                <img src="<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/about/get-to-know-img-3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="get_to_know_right">
                    <div class="block-title text-left">
                        <h4>Get to know about us</h4>
                        <h2>We’re Professional Quality Leaders</h2>
                    </div>
                    <div class="get_to_know_right_text">
                        <p>There are many variations of passages of available but the majority have suffered
                            alteration in some form, by injected humou or words even slightly believable.</p>
                    </div>
                    <div class="get_to_know_right_bottom">
                        <div class="get_to_know_right_bottom_single">
                            <div class="title">
                                <h4><i class="fa fa-check"></i>Magnis Dis Nascet</h4>
                            </div>
                            <div class="content">
                                <p>Lorem ipsum is free do sit</p>
                            </div>
                        </div>
                        <div class="get_to_know_right_bottom_single">
                            <div class="title">
                                <h4><i class="fa fa-check"></i>Libero id Ege</h4>
                            </div>
                            <div class="content">
                                <p>Lorem ipsum is free do sit</p>
                            </div>
                        </div>
                    </div>
                    <div class="progress-levels">
                        <!--Skill Box-->
                        <div class="progress-box">
                            <div class="inner count-box">
                                <div class="text">Industry</div>
                                <div class="bar">
                                    <div class="bar-innner">
                                        <div class="skill-percent">
                                            <span class="count-text" data-speed="3000" data-stop="91">0</span>
                                            <span class="percent">%</span>
                                        </div>
                                        <div class="bar-fill" data-percent="91"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Skill Box-->
                        <div class="progress-box">
                            <div class="inner count-box">
                                <div class="text">Construction</div>
                                <div class="bar">
                                    <div class="bar-innner">
                                        <div class="skill-percent">
                                            <span class="count-text" data-speed="3000" data-stop="78">0</span>
                                            <span class="percent">%</span>
                                        </div>
                                        <div class="bar-fill" data-percent="78"></div>
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

<!--Counter Three Start-->
<!-- <section class="counter_two three" style="background-image: url(<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/resources/counter_two_bg.jpg)"> -->
<section class="counter_two three">
    <div class="container">
        <ul class="counter_two_box list-unstyled">
            <li class="counter_two_single wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1500ms">
                <h2 class="counter">8705</h2>
                <p>Project Completed</p>
            </li>
            <li class="counter_two_single wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                <h2 class="counter">480</h2>
                <p>Team Members</p>
            </li>
            <li class="counter_two_single wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                <h2 class="counter">6260</h2>
                <p>Hours Worked</p>
            </li>
            <li class="counter_two_single wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms">
                <h2 class="counter">9774</h2>
                <p>Happy People</p>
            </li>
        </ul>
    </div>
</section>

<!--Thirty Years Experience Start-->
<section class="thirty__years_experience"
    style="background-image: url(<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/resources/thirty__years_experience-bg.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="thirty__years_experience_inner">
                    <h2>30 years of experiences <br> for give you better <br> results</h2>
                    <a href="history.html" class="thm-btn thirty__years_experience_btn">Discover More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Testimonails One Start-->
<section class="testimonails_two"
    style="background-image: url(<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/testimonials/testimonails_2-bg.jpg)">
    <div class="container">
        <div class="block-title text-center">
            <h4>Our Clients feedback</h4>
            <h2>What They’re Saying</h2>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 4, "autoplay": { "delay": 5000 }, "breakpoints": {
        "0": {
            "spaceBetween": 0,
            "slidesPerView": 1
        },
        "425": {
            "spaceBetween": 0,
            "slidesPerView": 1
        },
        "575": {
            "spaceBetween": 30,
            "slidesPerView": 2
        },
        "767": {
            "spaceBetween": 30,
            "slidesPerView": 2
        },
        "991": {
            "spaceBetween": 20,
            "slidesPerView": 2
        },
        "1289": {
            "spaceBetween": 20,
            "slidesPerView": 2
        },
        "1440": {
            "spaceBetween": 20,
            "slidesPerView": 2
        }
    }}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!--Testimonails One Single-->
                            <div class="testimonails_two_single">
                                <div class="testimonails_two_quote_icon"><i class="fa fa-quote-left"></i></div>
                                <div class="testimonails_two_text">
                                    <p>I was very impresed by the company service lore ipsum is simply free text
                                        used by copy typing refreshing. Neque porro est qui </p>
                                </div>
                                <div class="testimonails_two_client_name">
                                    <h3>Mike Hardson</h3>
                                    <p>CO Founder</p>
                                </div>
                                <div class="testimonails_two_image">
                                    <img src="<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/testimonials/testimonails_1-img-1.jpg" alt="">
                                </div>
                            </div>
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <!--Testimonails One Single-->
                            <div class="testimonails_two_single">
                                <div class="testimonails_two_quote_icon"><i class="fa fa-quote-left"></i></div>
                                <div class="testimonails_two_text">
                                    <p>I was very impresed by the company service lore ipsum is simply free text
                                        used by copy typing refreshing. Neque porro est qui </p>
                                </div>
                                <div class="testimonails_two_client_name">
                                    <h3>Jessica Brown</h3>
                                    <p>CO Founder</p>
                                </div>
                                <div class="testimonails_two_image">
                                    <img src="<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/testimonials/testimonails_1-img-2.jpg" alt="">
                                </div>
                            </div>
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <!--Testimonails One Single-->
                            <div class="testimonails_two_single">
                                <div class="testimonails_two_quote_icon"><i class="fa fa-quote-left"></i></div>
                                <div class="testimonails_two_text">
                                    <p>I was very impresed by the company service lore ipsum is simply free text
                                        used by copy typing refreshing. Neque porro est qui </p>
                                </div>
                                <div class="testimonails_two_client_name">
                                    <h3>Mike Hardson</h3>
                                    <p>CO Founder</p>
                                </div>
                                <div class="testimonails_two_image">
                                    <img src="<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/testimonials/testimonails_1-img-1.jpg" alt="">
                                </div>
                            </div>
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <!--Testimonails One Single-->
                            <div class="testimonails_two_single">
                                <div class="testimonails_two_quote_icon"><i class="fa fa-quote-left"></i></div>
                                <div class="testimonails_two_text">
                                    <p>I was very impresed by the company service lore ipsum is simply free text
                                        used by copy typing refreshing. Neque porro est qui </p>
                                </div>
                                <div class="testimonails_two_client_name">
                                    <h3>Jessica Brown</h3>
                                    <p>CO Founder</p>
                                </div>
                                <div class="testimonails_two_image">
                                    <img src="<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/testimonials/testimonails_1-img-2.jpg" alt="">
                                </div>
                            </div>
                        </div><!-- /.swiper-slide -->
                    </div><!-- /.swiper-wrapper -->
                </div><!-- /.swiper-container -->
            </div>
        </div>
    </div>
</section>

<!--Team One Start-->
<section class="team_one">
    <div class="container">
        <div class="block-title text-center">
            <h4>Team of Professionals</h4>
            <h2>Expert Contractors</h2>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6">
                <!--Team One Single-->
                <div class="team_one_single wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="0ms">
                    <div class="team_one_image">
                        <img src="<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/team/team-1-img-1.jpg" alt="">
                    </div>
                    <div class="team_one_content">
                        <div class="team_one_name_title">
                            <h4>Mike Hardson</h4>
                            <p>Contractor</p>
                        </div>
                        <div class="team_one_social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <!--Team One Single-->
                <div class="team_one_single wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                    <div class="team_one_image">
                        <img src="<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/team/team-1-img-2.jpg" alt="">
                    </div>
                    <div class="team_one_content">
                        <div class="team_one_name_title">
                            <h4>Sarah Albert</h4>
                            <p>Contractor</p>
                        </div>
                        <div class="team_one_social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <!--Team One Single-->
                <div class="team_one_single wow fadeInDown" data-wow-duration="1500ms" data-wow-delay="200ms">
                    <div class="team_one_image">
                        <img src="<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/team/team-1-img-3.jpg" alt="">
                    </div>
                    <div class="team_one_content">
                        <div class="team_one_name_title">
                            <h4>Kevin Micahel</h4>
                            <p>Contractor</p>
                        </div>
                        <div class="team_one_social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6">
                <!--Team One Single-->
                <div class="team_one_single wow fadeInRight" data-wow-duration="1500ms" data-wow-delay="300ms">
                    <div class="team_one_image">
                        <img src="<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/team/team-1-img-4.jpg" alt="">
                    </div>
                    <div class="team_one_content">
                        <div class="team_one_name_title">
                            <h4>Alessha Brown</h4>
                            <p>Contractor</p>
                        </div>
                        <div class="team_one_social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once(G5_PATH.'/tail.php'); ?>