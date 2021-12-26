<?php
$sub_menu = '300510';
include_once('./_common.php');

auth_check_menu($auth, $sub_menu, "r");

if( !isset($g5['parkscode_ask']) ){
    die('<meta charset="utf-8">/data/dbconfig.php 파일에 <strong>$g5[\'parkscode_ask\'] = G5_TABLE_PREFIX.\'parkscode_ask\';</strong> 를 추가해 주세요.');
}
//내용(컨텐츠)정보 테이블이 있는지 검사한다.
if(!sql_query(" DESCRIBE {$g5['parkscode_ask']} ", false)) {
    if(sql_query(" DESCRIBE {$g5['g5_shop_parkscode_ask']} ", false)) {
        sql_query(" ALTER TABLE {$g5['g5_shop_parkscode_ask']} RENAME TO `{$g5['parkscode_ask']}` ;", false);
    } else {
       $query_cp = sql_query(" CREATE TABLE IF NOT EXISTS `{$g5['parkscode_ask']}` (
                      `co_id` varchar(20) NOT NULL DEFAULT '',
                      `co_html` tinyint(4) NOT NULL DEFAULT '0',
                      `co_subject` varchar(255) NOT NULL DEFAULT '',
                      `co_content` longtext NOT NULL,
                      `co_hit` int(11) NOT NULL DEFAULT '0',
                      `co_include_head` varchar(255) NOT NULL,
                      `co_include_tail` varchar(255) NOT NULL,
                      PRIMARY KEY (`co_id`)
                    ) ENGINE=MyISAM DEFAULT CHARSET=utf8 ", true);

    }
}

$g5['title'] = '간편문의함';
include_once (G5_ADMIN_PATH.'/admin.head.php');

$sql_common = " from {$g5['parkscode_ask']} where IsEnabled=1 ";

// 테이블의 전체 레코드수만 얻음
$sql = " select count(*) as cnt " . $sql_common;
$row = sql_fetch($sql);
$total_count = $row['cnt'];

$rows = $config['cf_page_rows'];
$total_page  = ceil($total_count / $rows);  // 전체 페이지 계산
if ($page < 1) { $page = 1; } // 페이지가 없으면 첫 페이지 (1 페이지)
$from_record = ($page - 1) * $rows; // 시작 열을 구함

$sql = "select * $sql_common order by AskSeq desc limit $from_record, {$config['cf_page_rows']} ";
$result = sql_query($sql);
?>

<div class="local_ov01 local_ov">
    <?php if ($page > 1) {?><a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>">처음으로</a><?php } ?>
    <span class="btn_ov01"><span class="ov_txt">전체 내용</span><span class="ov_num"> <?php echo $total_count; ?>건</span></span>
</div>

<div class="tbl_head01 tbl_wrap">
    <table>
    <caption><?php echo $g5['title']; ?> 목록</caption>
    <colgroup>
        <col width="40" />
        <col width="150" />
        <col width="150" />
        <col />
        <col width="150" />
        <col width="150" />
        <col width="150" />
        <col width="150" />
        <col width="150" />
    </colgroup>
    <thead>
    <tr>
        <th scope="col">번호</th>
        <th scope="col">처리상태</th>
        <th scope="col">제목</th>
        <th scope="col">내용</th>
        <th scope="col">작성자</th>
        <th scope="col">이메일</th>
        <th scope="col">전화번호</th>
        <th scope="col">등록일</th>
        <th scope="col">관리</th>
    </tr>
    </thead>
    <tbody>
    <?php for ($i=0; $row=sql_fetch_array($result); $i++) {
        $bg = 'bg'.($i%2);
    ?>
    <tr class="<?php echo $bg; ?>">
        <td class="td_id"><?php echo $row['AskSeq']; ?></td>
        <td class="td_id"><?php echo $row['AskStatus']; ?></td>
        <td><?php echo htmlspecialchars2($row['AskTitle']); ?></td>
        <td class="td_left"><?php echo htmlspecialchars2($row['AskContent']); ?></td>
        <td><?php echo htmlspecialchars2($row['AskName']); ?></td>
        <td><?php echo htmlspecialchars2($row['AskEmail']); ?></td>
        <td><?php echo htmlspecialchars2($row['AskPhone']); ?></td>
        <td><?php echo $row['RegistDate']; ?></td>
        <td class="td_mng td_mng_l">
            <a href="./ask_form.php?w=u&amp;AskSeq=<?php echo $row['AskSeq']; ?>" class="btn btn_03"><span class="sound_only"><?php echo htmlspecialchars2($row['AskTitle']); ?> </span>수정</a>
            <a href="./ask_update.php?w=d&amp;AskSeq=<?php echo $row['AskSeq']; ?>" onclick="return delete_confirm(this);" class="btn btn_02"><span class="sound_only"><?php echo htmlspecialchars2($row['AskTitle']); ?> </span>삭제</a>
        </td>
    </tr>
    <?php
    }
    if ($i == 0) {
        echo '<tr><td colspan="9" class="empty_table">아직 등록된 간편문의가 없습니다.</td></tr>';
    }
    ?>
    </tbody>
    </table>
</div>

<?php echo get_paging(G5_IS_MOBILE ? $config['cf_mobile_pages'] : $config['cf_write_pages'], $page, $total_page, "{$_SERVER['SCRIPT_NAME']}?$qstr&amp;page="); ?>

<?php
include_once (G5_ADMIN_PATH.'/admin.tail.php');