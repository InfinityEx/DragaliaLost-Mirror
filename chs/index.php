<?php
    // include '../layout/chs/hp.php';

    // $dl_chs_header='dl_header';
    // $dl_chs_body='dl_body';
    // $dl_chs_footer='dl_footer';

    // //show headers
    // $dl_chs_header();
    // $dl_chs_body('top');
    // $dl_chs_footer();

    //include new
    include '../template/top.php';
    $lang='chs';
    $type='top';

    echo "<!DOCTYPE html>";
    lang($lang);
    head_type($lang,$type);
    body_start($type);
    modal($lang);
    slider($lang,$type);
    top_contents($lang,$type);
    top_news($lang);
    footer($lang);
?>