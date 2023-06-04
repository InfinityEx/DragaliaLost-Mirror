<?php
    function news_detail_body($lang,$type,$news_type,$article_id)
    {
        echo "<body id={$news_type} data-article-id={$article_id}>";
        include "global/google_tag_noscript.php";
        include "global/languages.php";
        include "{$lang}/slider_front.php";
        include "{$lang}/slider_mid.php";
        menu($type);
        include "{$lang}/slider_over.php";
        echo "</header>";
    }

    function news_detail_content($lang,$type)
    {
        include "{$lang}/{$type}_detail_head.php";
        include "{$lang}/{$type}_detail_content.php";
    }
?>