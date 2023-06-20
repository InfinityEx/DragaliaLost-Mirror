<?php
    include '../../../template/top.php';
    include '../../../template/story.php';
    $lang='chs';
    $type='history_parttwo';
    $extra=1;

    echo "<!DOCTYPE html>";
    lang($lang);
    head_type($lang,$type,$extra);
    body_slider($lang,$type);
    wrapper($lang,$type);
    footer($lang);
?>