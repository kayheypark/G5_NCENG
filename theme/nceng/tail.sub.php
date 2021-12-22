<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>
<?php
 add_javascript('<script src="'.G5_THEME_PUBLIC_URL.'/vendor/js/jquery.min.js"></script>', 0);
 add_javascript('<script src="'.G5_THEME_PUBLIC_URL.'/vendor/js/bootstrap.bundle.min.js"></script>', 0);
 add_javascript('<script src="'.G5_THEME_PUBLIC_URL.'/vendor/js/owl.carousel.min.js"></script>', 0);
 add_javascript('<script src="'.G5_THEME_PUBLIC_URL.'/vendor/js/waypoints.min.js"></script>', 0);
 add_javascript('<script src="'.G5_THEME_PUBLIC_URL.'/vendor/js/jquery.counterup.min.js"></script>', 0);
 add_javascript('<script src="'.G5_THEME_PUBLIC_URL.'/vendor/js/TweenMax.min.js"></script>', 0);
 add_javascript('<script src="'.G5_THEME_PUBLIC_URL.'/vendor/js/wow.js"></script>', 0);
 add_javascript('<script src="'.G5_THEME_PUBLIC_URL.'/vendor/js/jquery.magnific-popup.min.js"></script>', 0);
 add_javascript('<script src="'.G5_THEME_PUBLIC_URL.'/vendor/js/jquery.ajaxchimp.min.js"></script>', 0);
 add_javascript('<script src="'.G5_THEME_PUBLIC_URL.'/vendor/js/swiper.min.js"></script>', 0);
 add_javascript('<script src="'.G5_THEME_PUBLIC_URL.'/vendor/js/typed-2.0.11.js"></script>', 0);
 add_javascript('<script src="'.G5_THEME_PUBLIC_URL.'/vendor/js/vegas.min.js"></script>', 0);
 add_javascript('<script src="'.G5_THEME_PUBLIC_URL.'/vendor/js/jquery.validate.min.js"></script>', 0);
 add_javascript('<script src="'.G5_THEME_PUBLIC_URL.'/vendor/js/bootstrap-select.min.js"></script>', 0);
 add_javascript('<script src="'.G5_THEME_PUBLIC_URL.'/vendor/js/countdown.min.js"></script>', 0);
 add_javascript('<script src="'.G5_THEME_PUBLIC_URL.'/vendor/js/jquery.mCustomScrollbar.concat.min.js"></script>', 0);
 add_javascript('<script src="'.G5_THEME_PUBLIC_URL.'/vendor/js/bootstrap-datepicker.min.js"></script>', 0);
 add_javascript('<script src="'.G5_THEME_PUBLIC_URL.'/vendor/js/nouislider.min.js"></script>', 0);
 add_javascript('<script src="'.G5_THEME_PUBLIC_URL.'/vendor/js/isotope.js"></script>', 0);
 add_javascript('<script src="'.G5_THEME_PUBLIC_URL.'/vendor/js/appear.js"></script>', 0);
 add_javascript('<script src="'.G5_THEME_PUBLIC_URL.'/vendor/js/jarallax.min.js"></script>', 0);
 add_javascript('<script src="http://maps.google.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM"></script>', 0);
 add_javascript('<script src="'.G5_THEME_PUBLIC_URL.'/vendor/js/theme.js"></script>', 0);
 add_javascript('<script src="'.G5_THEME_PUBLIC_URL.'/assets/js/base.js"></script>', 0);
 add_javascript('<script src="'.G5_THEME_PUBLIC_URL.'/assets/js/default.js"></script>', 0);
?>

<?php if ($is_admin == 'super') {  ?><!-- <div style='float:left; text-align:center;'>RUN TIME : <?php echo get_microtime()-$begin_time; ?><br></div> --><?php }  ?>

<!-- ie6,7에서 사이드뷰가 게시판 목록에서 아래 사이드뷰에 가려지는 현상 수정 -->
<!--[if lte IE 7]>
<script>
$(function() {
    var $sv_use = $(".sv_use");
    var count = $sv_use.length;

    $sv_use.each(function() {
        $(this).css("z-index", count);
        $(this).css("position", "relative");
        count = count - 1;
    });
});
</script>
<![endif]-->

<?php run_event('tail_sub'); ?>

</body>
</html>
<?php echo html_end(); // HTML 마지막 처리 함수 : 반드시 넣어주시기 바랍니다.