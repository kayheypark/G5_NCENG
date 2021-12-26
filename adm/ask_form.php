<?php
$sub_menu = '300510';
include_once('./_common.php');
include_once(G5_EDITOR_LIB);

auth_check_menu($auth, $sub_menu, "w");

$AskSeq = isset($_REQUEST['AskSeq']) ? preg_replace('/[^a-z0-9_]/i', '', $_REQUEST['AskSeq']) : '';


$html_title = "간편문의함";
$g5['title'] = $html_title.' 관리';
$readonly = '';

if ($w == "u")
{
    $html_title .= " 수정";
    $readonly = " readonly";

    $sql = " select * from {$g5['parkscode_ask']} where IsEnabled=1 and AskSeq = '$AskSeq' ";
    $co = sql_fetch($sql);
    if (!$co['AskSeq'])
        alert('등록된 자료가 없습니다.');
}
else
{
    $html_title .= ' 입력';
    $co = array(
        'AskSeq' => '',
        'co_subject' => '',
        'co_content' => '',
        'co_mobile_content' => '',
        'co_include_head' => '',
        'co_include_tail' => '',
        'co_tag_filter_use' => 1,
        'co_html' => 2,
        'co_skin' => 'basic',
        'co_mobile_skin' => 'basic'
        );
}

include_once (G5_ADMIN_PATH.'/admin.head.php');
?>

<form name="frmcontentform" action="./ask_update.php" onsubmit="return frmcontentform_check(this);" method="post" enctype="MULTIPART/FORM-DATA" >
<input type="hidden" name="w" value="<?php echo $w; ?>">
<input type="hidden" name="co_html" value="1">
<input type="hidden" name="token" value="">
<input type="hidden" name="AskSeq" value="<?php echo $co['AskSeq']; ?>" />

<div class="tbl_frm01 tbl_wrap">
    <table>
    <caption><?php echo $g5['title']; ?> 목록</caption>
    <colgroup>
        <col width="15%">
        <col width="35%">
        <col width="15%">
        <col width="35%">
    </colgroup>
    <tbody>
    <tr>
        <th scope="row">제목</th>
        <td><?php echo $co['AskTitle']; ?></td>
        <th scope="row">등록일</th>
        <td><?php echo $co['RegistDate']; ?></td>
    </tr>
    <tr>
        <th scope="row">전화번호</th>
        <td><?php echo $co['AskPhone']; ?></td>
        <th scope="row">이메일</th>
        <td><?php echo $co['AskEmail']; ?></td>
    </tr>
    <tr>
        <th scope="row">내용</th>
        <td colspan="3"><p style="white-space: pre-line;"><?php echo $co['AskContent']; ?></p></td>
    </tr>
    <tr>
        <th scope="row"><label for="co_skin">처리상태<strong class="sound_only">필수</strong></label></th>
        <td colspan="3">
        <select id="AskStatus" name="AskStatus" required>
            <option value="">선택</option>
            <option value="미열람" <?php if($co['AskStatus'] == "미열람") echo "selected";?>>미열람</option>
            <option value="상담중" <?php if($co['AskStatus'] == "상담중") echo "selected";?>>상담중</option>
            <option value="상담완료" <?php if($co['AskStatus'] == "상담완료") echo "selected";?>>상담완료</option>
        </select>
        </td>
    </tr>
    <tr>
        <th scope="row">메모</th>
        <td colspan="3">
            <textarea name="AskMemo" id="AskMemo" cols="30" rows="10"><?php echo $co['AskMemo']; ?></textarea>
        </td>
    </tr>
    <?php if ( $co['RegistDate'] != $co['LastUpdate'] ) { ?>
    <tr>
        <th scope="row">최근수정일</th>
        <td colspan="3"><?php echo $co['LastUpdate']; ?></td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
</div>

<div class="btn_fixed_top">
    <a href="./ask_list.php" class="btn btn_02">목록</a>
    <input type="submit" value="저장" class="btn btn_submit" accesskey="s">
</div>

</form>

<?php
// [KVE-2018-2089] 취약점 으로 인해 파일 경로 수정시에만 자동등록방지 코드 사용
?>
<script>
var captcha_chk = false;

function use_captcha_check(){
    $.ajax({
        type: "POST",
        url: g5_admin_url+"/ajax.use_captcha.php",
        data: { admin_use_captcha: "1" },
        cache: false,
        async: false,
        dataType: "json",
        success: function(data) {
        }
    });
}

function frm_check_file(){
    var co_include_head = "<?php echo $co['co_include_head']; ?>";
    var co_include_tail = "<?php echo $co['co_include_tail']; ?>";
    var head = jQuery.trim(jQuery("#co_include_head").val());
    var tail = jQuery.trim(jQuery("#co_include_tail").val());

    if(co_include_head !== head || co_include_tail !== tail){
        // 캡챠를 사용합니다.
        jQuery("#admin_captcha_box").show();
        captcha_chk = true;

        use_captcha_check();

        return false;
    } else {
        jQuery("#admin_captcha_box").hide();
    }

    return true;
}

jQuery(function($){
    if( window.self !== window.top ){   // frame 또는 iframe을 사용할 경우 체크
        $("#co_include_head, #co_include_tail").on("change paste keyup", function(e) {
            frm_check_file();
        });

        use_captcha_check();
    }
});

function frmcontentform_check(f)
{
    errmsg = "";
    errfld = "";

    <?php echo get_editor_js('co_content'); ?>
    <?php echo chk_editor_js('co_content'); ?>
    <?php echo get_editor_js('co_mobile_content'); ?>

    check_field(f.AskSeq, "ID를 입력하세요.");
    check_field(f.co_subject, "제목을 입력하세요.");
    check_field(f.co_content, "내용을 입력하세요.");

    if (errmsg != "") {
        alert(errmsg);
        errfld.focus();
        return false;
    }
    
    if( captcha_chk ) {
        <?php echo $captcha_js; // 캡챠 사용시 자바스크립트에서 입력된 캡챠를 검사함  ?>
    }

    return true;
}
</script>

<?php
include_once (G5_ADMIN_PATH.'/admin.tail.php');