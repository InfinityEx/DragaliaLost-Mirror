<?php
    $languages=substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,5);
    if ($languages=='zh-cn'){
        header("Location:/DragaliaLost-Mirror/chs/index.html");
    }else{
        header("Location:/DragaliaLost-Mirror/jp/index.html");
    }
?>