
<?php
    //generate html lang label
    function lang($languages)
    {
        switch ($languages)
        {
            case 'chs':
                echo '<html lang="zh-Hans">';
                break;
            default:
                break;
        }
    }

    // generate head
    function head_type($lang,$type)
    {
        echo "<head>";
        include "{$lang}/{$type}_head_meta.php";
        include "{$lang}/title.php";
        // generate title
        title($type);
        include "global/css.php";
        include "{$lang}/{$type}_head_css.php";
        include "global/js.php";
        include "{$lang}/{$type}_head_js.php";
        include "global/google_tag.php";
        echo "</head>";
    }

    function body_start($type)
    {
        echo "<body id={$type}>";
        include "global/google_tag_noscript.php";
        include "global/languages.php";
    }

    function modal($lang)
    {
        include "{$lang}/top_modal.php";
    }

    // including banner and slider
    function slider($lang,$type)
    {
        include "{$lang}/{$type}_banner.php";
        include "{$lang}/{$type}_slider_front.php";
        include "{$lang}/{$type}_slider_mid.php";
        menu($type);
        include "{$lang}/{$type}_slider_over.php";
    }

    function top_contents($lang,$type)
    {
        include "{$lang}/{$type}_main_content.php";
    }

    function top_news($lang)
    {
        include "{$lang}/top_news_script.php";
    }

    function footer($lang)
    {
        include "{$lang}/top_footer.php";
        include "{$lang}/top_footer_icp.php";
        include "{$lang}/top_footer_end.php";
    }