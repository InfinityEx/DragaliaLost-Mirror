<?php
// 
$lang=$_POST['lang'];
$type=$_POST['type'];
if($type=='dragalialife'){
    switch($lang)
    {
        case 'chs':
            $fstr=dirname(__FILE__).'/dragalialife/chs/index.json';
            $json_data = file_get_contents($fstr);
            break;
    }
}
// Return data
header('Content-Type:text/html');
$jsoncallback=htmlspecialchars($_REQUEST['jsoncallback']);
echo $jsoncallback . $json_data ;
// print_r(urldecode($json_data))
?>