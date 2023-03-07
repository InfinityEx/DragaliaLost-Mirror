<?php
    //网站调试阶段_客户端语言及UA标识等信息检测
    $languages=substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,5);
    $lang=$_SERVER['HTTP_ACCEPT_LANGUAGE'];
    echo '<h3>Client Languages & User-Agent Scanner:</h3>';
    echo 'Your Languages: ',$languages;
    echo '<br>','HTTP_ACCEPT_LANGUAGE: ',$lang;
    echo '<hr/>','User-Agent: ',$_SERVER['HTTP_USER_AGENT'];

    // /**
    //  * 发送post请求
    //  * @param string $url 请求地址
    //  * @param array $post_data post键值对数据
    //  * @return string
    //  */
    // function send_post($url, $post_data) { 
    //     $postdata = http_build_query($post_data);
    //     $options = array(
    //     'http' => array(
    //         'method' => 'POST',
    //     'header' => 'Content-type:application/x-www-form-urlencoded',
    //     'content' => $postdata,
    //         'timeout' => 5 // 超时时间（单位:s）
    //     )
    //     );
    //     $context = stream_context_create($options);
    //     $result = file_get_contents($url, false, $context);
    //     return $result;
    // }  
    
    // //使用方法
    // $post_data = array(
    //     'cmd' => 'visit_sysdomain',
    //     'password' => '***'
    // );
    // send_post('https://api.sanfengyun.com/www/break.php?', $post_data);
    
    //静态页面跳转
    switch($languages){
        case 'zh-CN':
            header("refresh:5;url=http://dlmirror.xyz/chs/index.html");
            break;
        case 'zh-TW':
            header("refresh:5;url=http://dlmirror.xyz/cht/index.html");
            break;
        case 'en-US':
            header("refresh:5;url=http://dlmirror.xyz/en/index.html");
            break;
        default:
            header("refresh:5;url=http://dlmirror.xyz/jp/index.html");
            break;
    }
?>