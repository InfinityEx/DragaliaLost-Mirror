$(document).ready(function(){
    // 鼠标悬停
    $("#homepic").mouseover(function(){
        $("#homepic").stop(true,true)
        $("#homepic").animate({opacity:'0'},200,function(){
            $("#homepic").attr('src','./assets/home_active.png')
        })
        $("#homepic").animate({opacity:'1'},900)
    });
    $("#homepic").mouseout(function(){
        $("#homepic").stop(true,true)
        $("#homepic").animate({opacity:'0'},200,function(){
            $("#homepic").attr('src','./assets/home.png')
        })
        $("#homepic").animate({opacity:'1'},900)
    });
});