<?php
// Imitating Writing version
// With the purpose of Emulate DragaliaLost.com/api/index.php functions
// --�r�o_ShiWu

// receive parameters
// priority: type > action > lang > article_id = priority_lower_than
$type=$_GET['type'];
$category_id = $_GET['category_id'];
$priority_lower_than = $_GET['priority_lower_than'];
$action = $_GET['action'];
$article_id = $_GET['article_id'];
$lang = $_GET['lang'];
$td = $_GET['td'];
if($type=='information'){
    switch($action)
    {
        case 'information_list':
            switch($lang)
            {
                case 'zh_cn':
                    if($priority_lower_than==''){
                        $priority_lower_than = 3742;
                    }
                    $plt=strval($priority_lower_than);
                    $fstr=dirname(__FILE__).'/newsmore/zh_cn/'.$plt.'.json';
                    $json_data = file_get_contents($fstr);
                    break;
                case 'zh_tw':
                    if($priority_lower_than==''){
                        $priority_lower_than = 3742;
                    }
                    $plt=strval($priority_lower_than);
                    $fstr=dirname(__FILE__).'/newsmore/zh_tw/'.$plt.'.json';
                    $json_data = file_get_contents($fstr);
                    break;
                case 'en_us':
                    if($priority_lower_than==''){
                        $priority_lower_than = 3742;
                    }
                    $plt=strval($priority_lower_than);
                    $fstr=dirname(__FILE__).'/newsmore/zh_cn/'.$plt.'.json';
                    $json_data = file_get_contents($fstr);
                    break;
                case 'en_eu':
                    if($priority_lower_than==''){
                        $priority_lower_than = 3742;
                    }
                    $plt=strval($priority_lower_than);
                    $fstr=dirname(__FILE__).'/newsmore/zh_cn/'.$plt.'.json';
                    $json_data = file_get_contents($fstr);
                    break;
                case 'ja_jp':
                    if($priority_lower_than==''){
                        $priority_lower_than = 3742;
                    }
                    $plt=strval($priority_lower_than);
                    $fstr=dirname(__FILE__).'/newsmore/zh_cn/'.$plt.'.json';
                    $json_data = file_get_contents($fstr);
                    break;
                default:
                    $json_data = '{error code:122}';
            }
            break;
        case 'information_detail':
            switch($lang)
            {
                case 'zh_cn':
                    if($article_id<>''){
                        $aid=strval($article_id);
                        $gstr=dirname(__FILE__).'/detail/zh_cn/'.$aid.'.json';
                        $json_data = file_get_contents($gstr);
                    }else{
                        $json_data = '{error code:122}';
                    }
                    break;
                case 'zh_tw':
                    if($article_id<>''){
                        $aid=strval($article_id);
                        $gstr=dirname(__FILE__).'/detail/zh_cn/'.$aid.'.json';
                        $json_data = file_get_contents($gstr);
                    }else{
                        $json_data = '{error code:122}';
                    }
                    break;
                case 'en_us':
                    if($article_id<>''){
                        $aid=strval($article_id);
                        $gstr=dirname(__FILE__).'/detail/zh_cn/'.$aid.'.json';
                        $json_data = file_get_contents($gstr);
                    }else{
                        $json_data = '{error code:122}';
                    }
                    break;
                case 'en_eu':
                    if($article_id<>''){
                        $aid=strval($article_id);
                        $gstr=dirname(__FILE__).'/detail/zh_cn/'.$aid.'.json';
                        $json_data = file_get_contents($gstr);
                    }else{
                        $json_data = '{error code:122}';
                    }
                    break;
                case 'ja_jp':
                    if($article_id<>''){
                        $aid=strval($article_id);
                        $gstr=dirname(__FILE__).'/detail/zh_cn/'.$aid.'.json';
                        $json_data = file_get_contents($gstr);
                    }else{
                        $json_data = '{error code:122}';
                    }
                    break;
                default:
                    $json_data = '{error code:122}';
            }
            break;
        default:
            $json_data = '{error code:122}';
    }
}
// Return data
header('Content-Type:application/json');
$jsoncallback=htmlspecialchars($_REQUEST['jsoncallback']);
echo $jsoncallback . $json_data ;
?>