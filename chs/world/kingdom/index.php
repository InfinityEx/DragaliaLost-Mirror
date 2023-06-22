<?php
    include '../../../template/top.php';
    include '../../../template/story.php';
    $lang='chs';
    $type='world';
    $sub='kingdom';
    $extra=1;

    echo "<!DOCTYPE html>";
    lang($lang);
    head_type($lang,$sub,$extra);
    body_slider($lang,$type,$sub);
    wrapper($lang,$sub);
    footer($lang);
?>