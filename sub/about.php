<?php
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

<!--Service Details Start-->
<section class="services_details">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="services_details_right">
                    <div class="services_details_right_text">
                        <h4>NC엔지니어링은</h4>
                        <p>
                            차별화된 기술로 신뢰성 환경 자동화 장비제작
                        </p>
                    </div>
                    <div class="services_details_why_choose_us">
                        <div class="services_details_why_choose_us_content">
                            <h3>사업영역</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                            <ul class="list-unstyled">
                                <li><i class="fa fa-check"></i>생산/검사장비 외</li>
                                <li><i class="fa fa-check"></i>시험 장비</li>
                                <li><i class="fa fa-check"></i>협업제품</li>
                            </ul>
                        </div>
                        <div class="services_details_why_choose_us_image">
                            <img src="<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/service/ser-dtl-choose-img-1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once(G5_PATH.'/tail.php'); ?>