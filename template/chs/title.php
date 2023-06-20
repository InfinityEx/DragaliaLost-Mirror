<?php
    function title($type)
    {
        switch ($type)
        {
            case 'top':
                echo '<title>首页 | Dragalia Lost ～失落的龙约～ 镜像站</title>';
                break;
            case 'news':
                echo '<title>新闻 | Dragalia Lost ～失落的龙约～ 镜像站</title>';
                break;
            case 'story':
                echo '<title>剧情 | Dragalia Lost ～失落的龙约～ 镜像站</title>';
                break;
            case 'history':
                echo '<title>阿尔贝里亚的历史 前篇 | Dragalia Lost ～失落的龙约～ 镜像站</title>';
                break;
            case 'history_parttwo':
                echo '<title>阿尔贝里亚的历史 后篇 | Dragalia Lost ～失落的龙约～ 镜像站</title>';
                break;
            case 'kingdom':
                echo '<title>阿尔贝里亚王室 | Dragalia Lost ～失落的龙约～ 镜像站</title>';
                break;
            case 'chart':
                echo '<title>人物关系图 | Dragalia Lost ～失落的龙约～ 镜像站</title>';
                break;
        }
    }
?>