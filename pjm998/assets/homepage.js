$(document).ready(function(){
    // 鼠标悬停
    $("#homepic").mouseover(function(){
        // $("#homepic").attr('src','./assets/download_blob.png')
        $("#homepic").animate({opacity:'0'},0,function(){
            $("#homepic").attr('src','./assets/download_blob.png')
        })
        $("#homepic").animate({opacity:'1'},1000)
    });
    $("#homepic").mouseout(function(){
        $("#homepic").animate({opacity:'0'},0,function(){
            $("#homepic").attr('src','./assets/download.png')
        })
        $("#homepic").animate({opacity:'1'},1000)
        // $("#homepic").animate({opacity:'0'},0)
        // $("#homepic").animate({opacity:'1'},1500)
    });
});