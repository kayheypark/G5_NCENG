<?php
$sub_menu = '300510';
include_once('./_common.php');

if ($w == "u")
{

    //엔티티
    $Seq = $_POST['AskSeq'];
    $Status = $_POST['AskStatus'];
    $Memo = $_POST['AskMemo'];

    //쿼리문
    $sql = "
    update
    g5_parkscode_ask
    set
    AskStatus='{$Status}', AskMemo='{$Memo}'
    where AskSeq='{$Seq}'
    ";

    //실행부
    sql_query($sql);

    goto_url('./ask_form.php?w=u&AskSeq='.$Seq);

}
else if ($w == "d")
{

    //엔티티
    $Seq = $_GET['AskSeq'];

    //쿼리문
    $sql = "
    update
    g5_parkscode_ask
    set
    IsEnabled='0'
    where AskSeq='{$Seq}'
    ";

    //실행부
    sql_query($sql);

    goto_url('./ask_list.php');

}