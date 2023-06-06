<?php
    include '../../template/top.php';
    include '../../template/news.php';

    $lang='chs';
    $type='news';

    echo "<!DOCTYPE html>";
    lang($lang);
    head_type($lang,$type);
    news_body($lang,$type);

    news_top($lang,$type);
    news_all_list($lang,$type);
    
    // if($action=='information_detail')
    // {
    //     news_detail_head($lang,$type);
    //     news_detail_content($lang,$type);
    // }

    footer($lang);
?>