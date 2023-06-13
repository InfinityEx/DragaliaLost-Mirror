<?php
    include '../../../template/top.php';
    include '../../../template/story.php';
    $lang='chs';
    $type='story';
    $extra=0;

    echo "<!DOCTYPE html>";
    lang($lang);
    head_type($lang,$type,$extra);
    body_start($type);
?>