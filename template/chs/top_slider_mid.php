<?php
    function menu($whoactive)
    {
        // top
        if($whoactive=='top'){
            echo '<li class="top"><a href="/chs/" class="active"><img src="/assets/chs/images/pc/common/btn_nav_top_off.png" alt="TOP"></a></li>';
        }else{
            echo '<li class="top"><a href="/chs/" class=""><img src="/assets/chs/images/pc/common/btn_nav_top_off.png" alt="TOP"></a></li>';
        }

        // news
        if($whoactive=='news'){
            echo '<li class="news"><a href="/chs/news/" class="active"><img src="/assets/chs/images/pc/common/btn_nav_news_off.png" alt="NEWS"></a></li>';
        }else{
            echo '<li class="news"><a href="/chs/news/" class=""><img src="/assets/chs/images/pc/common/btn_nav_news_off.png" alt="NEWS"></a></li>';
        }

        // world
        if($whoactive=='world'){
            echo '<li class="world"><a href="/chs/world/story/" class="active"><img src="/assets/chs/images/pc/common/btn_nav_world_off.png" alt="WORLD"></a></li>';
        }else{
            echo '<li class="world"><a href="/chs/world/story/" class=""><img src="/assets/chs/images/pc/common/btn_nav_world_off.png" alt="WORLD"></a></li>';
        }

        // character
        if($whoactive=='character'){
            echo '<li class="character"><a href="/chs/character/" class="active"><img src="/assets/chs/images/pc/common/btn_nav_character_off.png" alt="CHARACTER"></a> </li>';
        }else{
            echo '<li class="character"><a href="/chs/character/" class=""><img src="/assets/chs/images/pc/common/btn_nav_character_off.png" alt="CHARACTER"></a> </li>';
        }

        // dragon
        if($whoactive=='dragon'){
            echo '<li class="dragon"><a href="/chs/dragon/midgardsormr/" class="active"><img src="/assets/chs/images/pc/common/btn_nav_dragon_off.png" alt="DRAGON"></a></li>';
        }else{
            echo '<li class="dragon"><a href="/chs/dragon/midgardsormr/" class=""><img src="/assets/chs/images/pc/common/btn_nav_dragon_off.png" alt="DRAGON"></a></li>';
        }

        // gamesystem
        if($whoactive=='gamesystem'){
            echo '<li class="gamesystem"> <a href="/chs/gamesystem/" class="active"><img src="/assets/chs/images/pc/common/btn_nav_gamesystem_off.png" alt="GAMESYSTEM"></a></li>';
        }else{
            echo '<li class="gamesystem"> <a href="/chs/gamesystem/" class=""><img src="/assets/chs/images/pc/common/btn_nav_gamesystem_off.png" alt="GAMESYSTEM"></a></li>';
        }
    }
?>