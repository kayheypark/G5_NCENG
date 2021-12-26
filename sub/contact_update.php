<?php

    //임포트
    include_once("../common.php");
    ob_start();
    include_once ("./bbs/write_update_mail.php");
    $content = ob_get_contents();
    ob_end_clean();

    //엔티티
    $Name = $_POST['AskName'];
    $Email = $_POST['AskEmail'];
    $Phone = $_POST['AskPhone'];
    $Title = $_POST['AskTitle'];
    $Content = $_POST['AskContent'];

    //쿼리문
    $sql = "
    insert into
    parkscode_ask
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
    alert("정상적으로 간편문의가 등록되었습니다.", "/sub/contact.php", true);
    alert("간편문의가 등록중 오류가 발생되어 취소되었습니다.", false);

?>