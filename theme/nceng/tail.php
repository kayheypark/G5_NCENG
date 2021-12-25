<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>
<!-- } 콘텐츠 끝 -->

<!-- 하단 시작 { -->
    
    <!--Site Footer Start-->
    <!-- <footer class="site-footer" style="background-image: url(<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/resources/footer-bg-img.jpg)"> -->
    <footer class="site-footer">
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
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="footer-widget__column footer-widget__explore wow fadeInUp animated"
                        data-wow-delay="200ms">
                        <div class="footer-widget__title">
                            <h3>고객지원</h3>
                        </div>
                        <ul class="footer-widget__explore_list list-unstyled">
                            <li><a href="/sub/privacy.php">개인정보처리방침</a></li>
                            <li><a href="/sub/termsofuse.php">사이트이용약관</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="footer-widget__column footer-widget__latest_news wow fadeInUp animated"
                        data-wow-delay="300ms">
                        <div class="footer-widget__title">
                            <h3>공지사항</h3>
                        </div>

                        <?php
                        //공지사항
                        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
                        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
                        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
                        echo latest('theme/notice', 'notice', 4, 13);
                        ?>



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
                <!-- <a href="#" class="tw-clr"><i class="fab fa-twitter"></i></a>
                <a href="#" class="fb-clr"><i class="fab fa-facebook-square"></i></a>
                <a href="#" class="dr-clr"><i class="fab fa-dribbble"></i></a>
                <a href="#" class="ins-clr"><i class="fab fa-instagram"></i></a> -->
                <?php if ($is_admin || $member['mb_id']=='manager') { ?><span class="pr-3" style="font-size: 15px;"><?php echo $member['mb_nick'] ?>(<?php echo $member['mb_id'] ?>)</span><?php } ?>
                <?php if ($is_admin || $member['mb_id']=='manager') { ?><a href="/adm" class="btn_admin btn" target="_blank" title="관리자"><i class="fa fa-cog fa-spin"></i><span class="sound_only">관리자</span></a><?php } ?>
                <?php if ($member['mb_id']) { ?><a href="/bbs/logout.php" class="btn_admin btn" title="로그아웃"><i class="fas fa-sign-out-alt"></i><span class="sound_only">로그아웃</span></a><?php } ?>
                <?php if (!$member['mb_id']) { ?><a href="/bbs/login.php" class="btn_admin btn" title="로그인"><i class="fas fa-sign-in-alt"></i><span class="sound_only">로그인</span></a><?php } ?>
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