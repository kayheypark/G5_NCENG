<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>

<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>

<!-- 게시물 읽기 시작 { -->

<!--Page Header Start-->
<section class="page-header" style="background-image: url(<?php echo(G5_THEME_PUBLIC_URL."/vendor")?>/images/backgrounds/page-header-contact.jpg);">
    <div class="container">
        <h2><?php echo $board['bo_subject'] ?></h2>
    </div>
</section>

<!--Blog One Start-->
<section class="blog_details">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="blog_details_left">
                    <div class="blog_details_content">
                        <?php if ($category_name) { ?>
                            <p><?php echo $view['ca_name']; // 분류 출력 끝 ?></p>
                        <?php } ?>
                        <div class="blog_details_title">
                            <h3>
                                <?php
                                    echo cut_str(get_text($view['wr_subject']), 70); // 글제목 출력
                                ?>
                            </h3>
                        </div>
                        <div class="blog_details_text">
                            <?php
                            // 파일 출력
                            $v_img_count = count($view['file']);
                            if($v_img_count) {
                                echo "<div id=\"bo_v_img\">\n";

                                foreach($view['file'] as $view_file) {
                                    echo get_file_thumbnail($view_file);
                                }

                                echo "</div>\n";
                            }
                            ?>
                            <p class="text-1"><?php echo get_view_thumbnail($view['content']); ?></p>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-12">
                <div class="blog-page__load-more">
                    <a href="javascript: history.back();" class="thm-btn">뒤로가기</a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- } 게시판 읽기 끝 -->

<script>
<?php if ($board['bo_download_point'] < 0) { ?>
$(function() {
    $("a.view_file_download").click(function() {
        if(!g5_is_member) {
            alert("다운로드 권한이 없습니다.\n회원이시라면 로그인 후 이용해 보십시오.");
            return false;
        }

        var msg = "파일을 다운로드 하시면 포인트가 차감(<?php echo number_format($board['bo_download_point']) ?>점)됩니다.\n\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\n\n그래도 다운로드 하시겠습니까?";

        if(confirm(msg)) {
            var href = $(this).attr("href")+"&js=on";
            $(this).attr("href", href);

            return true;
        } else {
            return false;
        }
    });
});
<?php } ?>

function board_move(href)
{
    window.open(href, "boardmove", "left=50, top=50, width=500, height=550, scrollbars=1");
}
</script>

<script>
$(function() {
    $("a.view_image").click(function() {
        window.open(this.href, "large_image", "location=yes,links=no,toolbar=no,top=10,left=10,width=10,height=10,resizable=yes,scrollbars=no,status=no");
        return false;
    });

    // 추천, 비추천
    $("#good_button, #nogood_button").click(function() {
        var $tx;
        if(this.id == "good_button")
            $tx = $("#bo_v_act_good");
        else
            $tx = $("#bo_v_act_nogood");

        excute_good(this.href, $(this), $tx);
        return false;
    });

    // 이미지 리사이즈
    $("#bo_v_atc").viewimageresize();
});

function excute_good(href, $el, $tx)
{
    $.post(
        href,
        { js: "on" },
        function(data) {
            if(data.error) {
                alert(data.error);
                return false;
            }

            if(data.count) {
                $el.find("strong").text(number_format(String(data.count)));
                if($tx.attr("id").search("nogood") > -1) {
                    $tx.text("이 글을 비추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                } else {
                    $tx.text("이 글을 추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                }
            }
        }, "json"
    );
}
</script>
<!-- } 게시글 읽기 끝 -->