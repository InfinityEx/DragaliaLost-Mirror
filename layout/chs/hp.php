<?php
// 头部
function dl_header()
{
    include 'hp_headers.html';
    include 'hp_css.html';
    include 'hp_js.html';
    include 'hp_script_a.html';
}

// body部分
function dl_body()
{
    include 'hp_body_noscript.html';
    include 'hp_body_languages.html';
    include 'hp_body_modal.html';
    include 'hp_body_first-view.html';
    include 'hp_body_slider.html';
    include 'hp_body_menu.html';
    include 'hp_body_contents.html';
    include 'hp_body_scripts.html';
}

function dl_footer()
{
    include 'hp_footer_main.html';
    include 'hp_footer_extra.html';
}
?>