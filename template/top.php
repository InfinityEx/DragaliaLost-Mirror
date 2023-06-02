
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
        include "global/google_tag.php";
        echo "</head>";
    }

    function body_start($type)
    {
        echo "<body id={$type}>";
        include "global/google_tag_noscript.php";
        include "global/languages.php";
    }

