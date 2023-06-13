<?php
    include "../../../template/top.php";
    include "../../../template/news_detail.php";
    $lang='chs';
    $type='news';
    $extra=1;
    $news_type="news-detail";
    $article_id=$_GET['article_id'];

    // echo $article_id;
    echo "<!DOCTYPE html>";
    lang($lang);
    head_type($lang,$type,$extra);
    news_detail_body($lang,$type,$news_type,$article_id);
    news_detail_content($lang,$type);
    footer($lang);
?>