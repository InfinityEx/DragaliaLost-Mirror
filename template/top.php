<!DOCTYPE html>
<?php
    //generate html lang label
    function lang($languages)
    {
        switch ($languages)
        {
            case 'chs':
                echo '<html lang="zh-Hans">';
                break;
        }
    }
?>
<head>
<?php
    // generate head
    function head_type($lang,$type)
    {
        switch ($type)
        {
            case 'top':
                include "{$lang}/top_head_meta.php";
                include "{$lang}/title.php";
                title($type);
                break;
        }
    }

?>
</head>