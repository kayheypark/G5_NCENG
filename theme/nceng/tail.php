<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>
<!-- } 콘텐츠 끝 -->

<!-- 하단 시작 { -->
    
    <!--Site Footer Start-->
    <footer class="site-footer" style="background-image: url(<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/resources/footer-bg-img.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="footer-widget__column footer-widget__about wow fadeInUp animated"
                        data-wow-delay="100ms">
                        <div class="footer-widget__about_logo">
                            <a href="/"><img src="<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/resources/footer-logo.png" alt=""></a>
                        </div>
                        <div class="footer-widget_about_text__box">
                            <p>
                                (주)엔씨엔지니어링<br />
                                대표이사: 송준석<br />
                                사업자번호: 000-000-00000<br />
                            </p>
                        </div>
                        <ul class="list-unstyled">
                            <li>
                                <div class="footer-widget_about_icon">
                                    <span class="flaticon-email"></span>
                                </div>
                                <div class="footer-widget_about_text">
                                    <a href="mailto:example@gmail.com">example@gmail.com</a>
                                </div>
                            </li>
                            <li>
                                <div class="footer-widget_about_icon">
                                    <span class="flaticon-telephone"></span>
                                </div>
                                <div class="footer-widget_about_text">
                                    <a href="tel:02-000-0000">02-000-0000</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="footer-widget__column footer-widget__explore wow fadeInUp animated"
                        data-wow-delay="200ms">
                        <div class="footer-widget__title">
                            <h3>고객지원</h3>
                        </div>
                        <ul class="footer-widget__explore_list list-unstyled">
                            <li><a href="about.html">개인정보처리방침</a></li>
                            <li><a href="projects.html">사이트이용약관</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="footer-widget__column footer-widget__latest_news wow fadeInUp animated"
                        data-wow-delay="300ms">
                        <div class="footer-widget__title">
                            <h3>공지사항</h3>
                        </div>
                        <ul class="footer-widget__latest_news_list list-unstyled">
                            <li>
                                <div class="footer-widget__latest_news_image">
                                    <img src="<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/resources/fotter-l-n-img-1.jpg" alt="">
                                </div>
                                <div class="footer-widget__latest_news_content">
                                    <h4>2021. 12. 24.</h4>
                                    <p><a href="blog-details.html">2021 송년휴뮤 안내</a></p>
                                </div>
                            </li>
                            <li>
                                <div class="footer-widget__latest_news_image">
                                    <img src="<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/resources/fotter-l-n-img-2.jpg" alt="">
                                </div>
                                <div class="footer-widget__latest_news_content">
                                    <h4>2021. 10. 10.</h4>
                                    <p><a href="blog-details.html">홈페이지가 오픈 안내</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="footer-widget__column footer-widget__newsletter wow fadeInUp animated"
                        data-wow-delay="400ms"
                        style="visibility: visible; animation-delay: 400ms; animation-name: fadeInUp;">
                        <div class="footer-widget__title">
                            <h3>뉴스레터</h3>
                        </div>
                        <div class="footer-widget__newsletter_text">
                            <p>엔씨엔지니어링의 유익한 소식을 아래 메일로 수신해보세요!</p>
                        </div>
                        <form
                            data-url="ADD_YOUR_MAILCHIMP_FORM_URL"
                            class="mc-form">
                            <div class="footer_input-box">
                                <input type="email" name="EMAIL" id="mc-email" placeholder="Email Address">
                                <button type="submit" class="button"><span
                                        class="flaticon-right-arrow"></span></button>
                            </div>
                            <input type="checkbox" name="Newsletter" id="Newsletter" />
                            <label for="Newsletter"><small>(※개인정보처리방침에 동의함)</small></label>
                        </form>
                        <div class="mc-form__response"></div><!-- /.mc-form__response -->
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--Site Footer Bottom Start-->
    <div class="site-footer_bottom">
        <div class="container">
            <div class="site-footer_bottom_copyright">
                <p>© Copyright 2020 by <a href="/">엔씨엔지니어링</a></p>
            </div>
            <div class="site-footer__social">
                <a href="#" class="tw-clr"><i class="fab fa-twitter"></i></a>
                <a href="#" class="fb-clr"><i class="fab fa-facebook-square"></i></a>
                <a href="#" class="dr-clr"><i class="fab fa-dribbble"></i></a>
                <a href="#" class="ins-clr"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>

</div>

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay side-menu__toggler mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close side-menu__toggler mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="/" aria-label="logo image"><img src="<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/resources/logo.png" width="101"
                    alt="" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container clearfix"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="flaticon-email"></i>
                <a href="mailto:needhelp@azino.com">needhelp@inusti.com</a>
            </li>
            <li>
                <i class="flaticon-telephone"></i>
                <a href="tel:666-888-0000">666 888 0000</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__language">
                <img src="<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/resources/flag-1-1.jpg" alt="">
                <label class="sr-only" for="language-select">select language</label>
                <!-- /#language-select.sr-only -->
                <select class="selectpicker" id="language-select">
                    <option value="english">English</option>
                    <option value="arabic">Arabic</option>
                </select>
            </div><!-- /.mobile-nav__language -->
            <div class="mobile-nav__social">
                <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                <a href="#" aria-label="pinterest"><i class="fab fa-pinterest-p"></i></a>
                <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__top -->



    </div>
    <!-- /.mobile-nav__content -->
</div>

<div class="search-popup">
    <div class="search-popup__overlay custom-cursor__overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div><!-- /.search-popup__overlay -->
    <div class="search-popup__inner">
        <form action="#" class="search-popup__form">
            <input type="text" name="search" placeholder="Type here to Search....">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
</div>


<!-- } 하단 끝 -->

<?php
include_once(G5_THEME_PATH."/tail.sub.php");