<?php
    include '../../layout/chs/news.php';

    $news_header='news_header';
    $news_contents='news_contents';
    $news_footer='news_footer';

    $news_header();
    $news_contents('news');
    $news_footer();
?>