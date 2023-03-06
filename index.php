<?php
    $languages=substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,5);
    $lang=$_SERVER['HTTP_ACCEPT_LANGUAGE'];
    echo 'Client Languages Scanner:<br>';
    echo 'Your Languages: ',$languages;
    echo '<hr/>','HTTP_ACCEPT_LANGUAGE: ',$lang;
    switch($languages){
        case 'zh-CN':
            header("refresh:5;url=http://ftp6569110.host127.sanfengyun.cn/chs/index.html");
            break;
        case 'zh-TW':
            header("refresh:5;url=http://ftp6569110.host127.sanfengyun.cn/cht/index.html");
            break;
        default:
            header("refresh:5;url=http://ftp6569110.host127.sanfengyun.cn/jp/index.html");
            break;
    }
    // Languages IF
    // if ($languages=='zh-CN'){
    //     header("refresh:5;url=http://ftp6569110.host127.sanfengyun.cn/chs/index.html");
    // }else{
    //     header("refresh:5;url=http://ftp6569110.host127.sanfengyun.cn/jp/index.html");
    // }
?>