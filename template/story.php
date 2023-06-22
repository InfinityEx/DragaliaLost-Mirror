<?php
    //languages - slider(app-header) [header]
    function body_slider($lang,$type,$sub)
    {
        echo "<body id={$sub}>";
        include "global/google_tag_noscript.php";
        include "global/languages.php";
        include "{$lang}/slider_front.php";
        include "{$lang}/slider_mid.php";
        menu($type);
        include "{$lang}/slider_over.php";
        echo "</header>";
    }

    // main contents-wrapper
    function wrapper($lang,$type)
    {
        include "{$lang}/world_{$type}_wrapper.php";
    }
?>