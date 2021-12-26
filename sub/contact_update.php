<?php

    //임포트
    include_once("../common.php");
    include_once(G5_PATH.'/lib/mailer.lib.php');

    //엔티티
    $Name = $_POST['AskName'];
    $Email = $_POST['AskEmail'];
    $Phone = $_POST['AskPhone'];
    $Title = $_POST['AskTitle'];
    $Content = $_POST['AskContent'];

    //쿼리문
    $sql = "
    insert into
    g5_parkscode_ask
    (
        AskName, AskEmail, AskPhone, AskTitle, AskContent, RegistDate
    )
    values
    (
        '{$Name}', '{$Email}', '{$Phone}', '{$Title}', '{$Content}', now()
    )
    ";

    //실행부
    sql_query($sql);
    mailer($config['cf_admin_email_name'], $config['cf_admin_email'], $config['cf_admin_email'], "{$Name}님의 새로운 간편문의가 도착하였습니다.", "{$Content} / {$Email} / {$Phone})");
    alert("정상적으로 간편문의가 등록되었습니다.", "/sub/contact.php", true);
    alert("간편문의가 등록중 오류가 발생되어 취소되었습니다.", false);

?>