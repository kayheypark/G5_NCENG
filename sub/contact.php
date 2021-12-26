<?php
include_once('../common.php');
$g5['title'] = "회사소개";
include_once(G5_PATH.'/head.php');
?>

<!--Page Header Start-->
<section class="page-header" style="background-image: url(<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/backgrounds/page-header-contact.jpg);">
    <div class="container">
        <h2>오시는길</h2>
    </div>
</section>

<!--All Contact Info Start-->
<section class="all_contact_info" style="background-color:#f6f6f6;">
    <div class="container">
        <div class="all_contact_info_inner">
            <div class="row">
                <div class="col-xl-4 col-lg-4">
                    <!--All Contact Info Single-->
                    <div class="all_contact_info_single mail_info">
                        <div class="icon"><span class="flaticon-email"></span></div>
                        <div class="content">
                            <a href="mailto:<?php echo $config['cf_8'] ?>"><?php echo $config['cf_8'] ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <!--All Contact Info Single-->
                    <div class="all_contact_info_single phone_info">
                        <div class="icon"><span class="flaticon-telephone"></span></div>
                        <div class="content">
                            <a href="tel:<?php echo $config['cf_5'] ?>"><?php echo $config['cf_5'] ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <!--All Contact Info Single-->
                    <div class="all_contact_info_single location_info">
                        <div class="icon"><span class="flaticon-pin"></span></div>
                        <div class="content">
                            <p><?php echo $config['cf_4'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact One Start-->
<section id="form" class="contact-one">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="contact_one_left">
                    <div class="block-title text-left">
                        <h4>Contact With Us</h4>
                        <h2>전문가의 상담을 원하시나요?</h2>
                    </div>
                    <div class="contact_one_left-text">
                        <p>
                            궁금하신 내용을 입력해주시면<br />
                            전문상담가가 24시간 이내로<br />
                            신속하게 연락드립니다.<br />
                        </p>
                    </div>
                    <!-- <div class="contact_one_left__social">
                        <a href="#" class="tw-clr"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="fb-clr"><i class="fab fa-facebook-square"></i></a>
                        <a href="#" class="dr-clr"><i class="fab fa-dribbble"></i></a>
                        <a href="#" class="ins-clr"><i class="fab fa-instagram"></i></a>
                    </div> -->
                </div>
            </div>
            <div class="col-xl-7">
                <div class="contact-one__form__wrap">
                    <form action="/sub/contact_update.php" method="post" name="AskForm" id="AskForm" class="contact-one__form contact-form-validated">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" name="AskName" id="AskName" value="" placeholder="성함" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="email" name="AskEmail" id="AskEmail" value="" placeholder="이메일" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" name="AskPhone" id="AskPhone" value="" placeholder="전화번호" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" name="AskTitle" id="AskTitle" value="" placeholder="제목" required />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-group">
                                    <textarea name="AskContent" id="AskContent" value="" placeholder="문의 내용을 입력해주세요" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="input-group contact__btn">
                                    <button type="submit" class="thm-btn contact-one__btn">문의 등록하기</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Google Map-->
<section class="google_map two">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
        class="google-map__contact" allowfullscreen></iframe>
</section>

<?php include_once(G5_PATH.'/tail.php'); ?>