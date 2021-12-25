<?php
include_once('../common.php');
$g5['title'] = "개인정보처리방침";
include_once(G5_PATH.'/head.php');
?>

<!--Page Header Start-->
<section class="page-header" style="background-image: url(<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/backgrounds/page-header-contact.jpg);">
    <div class="container">
        <h2>사이트이용약관</h2>
    </div>
</section>

<!--Service Details Start-->
<section class="services_details">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="services_details_right">
                    <div class="services_details_right_text">
                        <h4>사이트이용약관</h4>
                        <p style="white-space: pre-line;"><?php echo $config['cf_privacy']?></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once(G5_PATH.'/tail.php'); ?>