<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
add_javascript('<script src="'.G5_JS_URL.'/jquery.bxslider.js"></script>', 10);
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>


<ul class="footer-widget__latest_news_list list-unstyled">
    <?php for ($i=0; $i<$list_count; $i++) {  ?>
    <li>
        <div class="footer-widget__latest_news_content">
            <h4>​<?php echo date("Y. m. d.", strtotime($list[$i]['wr_datetime'])) ?></h4>
            <p><a href="<?php echo get_pretty_url($bo_table, $list[$i]['wr_id']) ?>"><?php echo $list[$i]['subject']?></a></p>
        </div>
    </li>
    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    <li style="padding: 0; font-size: 15px;">게시물이 없습니다.</li>
    <?php }  ?>
    </ul>
</ul>