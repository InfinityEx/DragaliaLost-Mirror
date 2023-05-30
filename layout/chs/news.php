<?php

    // header
    function news_header()
    {
        include 'news_headers.html';
        include 'hp_css.html';
        include 'news_css.html';
        include 'hp_js.html';
        include 'hp_script_a.html';
    }

    // main contents
    function news_contents($a)
    {
        $body_id=$a;
        echo '<body id='.$body_id.'>';
        include 'hp_body_noscript.html';
        include 'hp_body_languages.html';
        include 'hp_body_menu.html';
        echo '</header>';
        include 'news_body_area.html';
        include 'news_body_scripts.html';
        include 'news_body_more.html';
    }

    function news_footer()
{
    include 'hp_footer_main.html';
    include 'hp_footer_extra.html';
}
?>