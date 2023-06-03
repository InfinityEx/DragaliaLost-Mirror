<?php

    // merge global php with slider
    function news_body($lang,$type)
    {
        echo "<body id={$type}>";
        include "global/google_tag_noscript.php";
        include "global/languages.php";
        include "{$lang}/slider_front.php";
        include "{$lang}/slider_mid.php";
        menu($type);
        include "{$lang}/slider_over.php";
        echo "</header>";
    }

    function news_top($lang,$type)
    {
        include "{$lang}/{$type}_content_top.php";
    }

    function news_all_list($lang,$type)
    {
        include "{$lang}/{$type}_news_script.php";
    }

    function news_detail_head($lang,$type)
    {
        include "{$lang}/{$type}_detail_head.php";
    }

    function news_detail_content($lang,$type)
    {
        include "{$lang}/{$type}_detail_content.php";
    }
?>