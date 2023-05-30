<?php
    //header
    function third_anniv_header()
    {
        include '3rd_anniv_headers.html';
        include 'hp_css.html';
        include '3rd_anniv_css.html';
        include 'hp_js.html';
        include '3rd_anniv_js.html';
        include 'hp_script_a.html';
    }

    //standard
    function third_anniv_common()
    {
        include 'hp_body_noscript.html';
        include '3rd_anniv_body_contents.html';
    }

    //footer
    function third_anniv_footer()
    {
        include 'hp_footer_main.html';
        include 'hp_footer_extra.html';
        include '3rd_anniv_modal.html';
    }
?>