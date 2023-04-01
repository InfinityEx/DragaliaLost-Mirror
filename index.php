<?php
    @header("Content-type:text/html; charset=utf-8");
    //网站调试阶段_客户端语言及UA标识等信息检测
    $languages=substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,5);
    $lang=$_SERVER['HTTP_ACCEPT_LANGUAGE'];
    $os=$_SERVER['HTTP_USER_AGENT'];
    if (preg_match('/Windows NT/i',$os)){
        $device='Windows';
        $device_allowed=1;
    }else if(preg_match('/Android/i',$os)){
        $device='Android';
        $device_allowed=0;
    }else if(preg_match('/iPhone OS/i',$os)){
        $device='iPhone';
        $device_allowed=0;
    }else{
        $device='Unknown Device';
        $device_allowed=0;
    }
    echo '<h2 style="color:red;"><b>Client Languages & User-Agent Scanner:</b></h2>';
    echo '<hr/><b>Your Language:</b> ',$languages;
    echo '<br>','<b>HTTP_ACCEPT_LANGUAGE:</b> ',$lang;
    echo '<br><hr/>','<b>Your Operation System:</b> ',$device;
    echo '<br>','<b>User-Agent:</b> ',$os;
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
    if ($device_allowed==1){
        switch($languages){
            case 'zh-CN':
                header("refresh:5;url=http://home.dlmirror.ren/chs/index.php");
                break;
            case 'zh-TW':
                header("refresh:5;url=http://home.dlmirror.ren/cht/index.html");
                break;
            case 'en-US':
                header("refresh:5;url=http://home.dlmirror.ren/en/index.html");
                break;
            default:
                header("refresh:5;url=http://home.dlmirror.ren/jp/index.html");
                break;
        }
    }else if($device_allowed==0){
        echo '<br><br><br>Sorry! May your device is not supported, we have closed the auto refresh.But you can still browse the page forced.<br><br>';
        switch($languages){
            case 'zh-CN':
                echo '<a href="http://home.dlmirror.ren/chs/index.html">http://home.dlmirror.ren/chs/index.html</a>';
                break;
            case 'zh-TW':
                echo '<a href="http://home.dlmirror.ren/cht/index.html">http://home.dlmirror.ren/cht/index.html</a>';
                break;
            case 'en-US':
                echo '<a href="http://home.dlmirror.ren/en/index.html">http://home.dlmirror.ren/en/index.html</a>';
                break;
            default:
            echo '<a href="http://home.dlmirror.ren/jp/index.html">http://home.dlmirror.ren/jp/index.html</a>';
                break;
        }
    } 
?>