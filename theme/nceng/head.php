<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<!-- 상단 시작 { -->
<div class="preloader">
    <img src="<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/loader.png" class="preloader__image" alt="">
</div><!-- /.preloader -->

<div class="page-wrapper">

    <div class="site-header__header-one-wrap clearfix">
        <header class="main-nav__header-one">
            <div class="container">
                <nav class="header-navigation one stricky">
                    <div class="container-box clearfix">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="main-nav__left main-nav__left_one float-left">
                            <div class="logo_one">
                                <a href="/" class="main-nav__logo">
                                    <img src="<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/resources/logo.png" class="main-logo"
                                        alt="Awesome Image">
                                </a>
                            </div>
                            <a href="#" class="side-menu__toggler">
                                <i class="fa fa-bars"></i>
                            </a>
                        </div>

                        <div class="main-nav__main-navigation one float-right">
                            <ul class="main-nav__navigation-box float-left">
                                <li class="gnb-depth-1">
                                    <a href="/sub/about.php">회사소개</a>
                                </li>
                                <li class="gnb-depth-1 dropdown">
                                    <a href="/bbs/board.php?bo_table=product">제품소개</a>
                                    <ul>
                                        <li><a href="/bbs/board.php?bo_table=product&sca=생산·검사장비">생산·검사장비</a></li>
                                        <li><a href="/bbs/board.php?bo_table=product&sca=온습도시험장비">온습도시험장비</a></li>
                                        <li><a href="/bbs/board.php?bo_table=product&sca=환경시험장비">환경시험장비</a></li>
                                    </ul><!-- /.sub-menu -->
                                </li>
                                <li class="gnb-depth-1 dropdown">
                                    <a href="/bbs/board.php?bo_table=notice">고객센터</a>
                                    <ul>
                                        <li><a href="/bbs/board.php?bo_table=notice">공지사항</a></li>
                                        <li><a href="/sub/faq.php">자주묻는질문</a></li>
                                        <li><a href="/bbs/qalist.php">1:1문의</a></li>
                                    </ul><!-- /.sub-menu -->
                                </li>
                                <li class="gnb-depth-1">
                                    <a href="/sub/contact.php">오시는길</a>
                                </li>
                            </ul>
                            <div class="main-nav__right main-nav__right_one float-left">
                                <div class="header_btn_1">
                                    <a href="/sub/contact.php/#form">간편문의</a>
                                </div>
                            </div>
                        </div><!-- /.navbar-collapse -->

                    </div>
                </nav>
            </div>
        </header>
    </div>

<!-- } 상단 끝 -->

<!-- 콘텐츠 시작 { -->