//voices
var audio;

$(document).ready(function(){
  $(document).on('mouseover', '.rollover', function(){
    $(this).attr("src",$(this).attr("src").replace("_off.", "_on."));
  });

  $(document).on('mouseout', '.rollover', function(){
    $(this).attr("src",$(this).attr("src").replace("_on.", "_off."));
  });

  $(document).on('mouseover', '#open-special-menu,.special-menu', function() {
    $('.special-menu').stop().slideDown('fast');
    $("#open-special-menu").attr("src",$("#open-special-menu").attr("src").replace("_off.", "_on."));
  });
  $(document).on('mouseout', '#open-special-menu,.special-menu', function() {
    $('.special-menu').stop().slideUp('fast');
    $("#open-special-menu").attr("src",$("#open-special-menu").attr("src").replace("_on.", "_off."));
  });


  if($("body#dragon").length > 0){

    //voice
    $(document).on("click",".voice a.play",function(){
      if(audio){
        audio.pause();
        audio = null;
        $(".voice a.stop").addClass("play").removeClass("stop");
      }

      var audioFile= $(this).attr("data-voicefile");

      audio = new Audio(audioFile);
      audio.play();
      $(audio).on("playing",function(){
        $(".voice a.play").addClass("stop").removeClass("play");
      });
      $(audio).on("ended",function(){
        if(audio){
          audio.pause();
          audio = null;
        }
        $(".voice a.stop").addClass("play").removeClass("stop");
      });

    });

    //STOP
    $(document).on("click",".voice a.stop",function(){
      if(audio){
        audio.pause();
        audio = null;
      }
        $(".voice a.stop").addClass("play").removeClass("stop");
    });
  }
  if($("body#character-detail").length > 0){

    //voice
    $(document).on("click",".voice a.play",function(){
      if(audio){
        audio.pause();
        audio = null;
        $(".voice a.stop").addClass("play").removeClass("stop");
      }

      var audioFile= $(this).attr("data-voicefile");

      audio = new Audio(audioFile);
      audio.play();
      $(audio).on("playing",function(){
        $(".voice a.play").addClass("stop").removeClass("play");
      });
      $(audio).on("ended",function(){
        if(audio){
          audio.pause();
          audio = null;
        }
        $(".voice a.stop").addClass("play").removeClass("stop");
      });

    });

    //STOP
    $(document).on("click",".voice a.stop",function(){
      if(audio){
        audio.pause();
        audio = null;
      }
        $(".voice a.stop").addClass("play").removeClass("stop");
    });
  }

  if($("body#movie").length > 0){
    var $modalTarg = $('#pop-modal');

    // movie
   $('#movie .movie-modal').on('click', function() {
	var youtubeId = $(this).data('youtubeid');
	if ($('html').attr('lang') === 'en' || $('html').attr('lang') === 'en-gb') {
		// 英語・欧州英語の場合、クッキーを無効化した状態で再生する
		var youtubeSrc = "https://www.youtube-nocookie.com/embed/%youtubeId?&autoplay=1".replace("%youtubeId",youtubeId);
	} else {
		var youtubeSrc = "https://www.youtube.com/embed/%youtubeId?&autoplay=1".replace("%youtubeId",youtubeId);
	}
    $modalTarg.find('iframe').attr('src', youtubeSrc);
    $modalTarg.modal();
    return false;
   });
  }

  if($("body#chart").length > 0){
    $('#chart-01').addClass('active');
    $('.tab2').addClass('active');
    /*クリックイベント*/
    $(".chart-tab .tab2").on('click', function () {
      $("#chart-01").removeClass('active');
      $("#chart-02").addClass('active');
      $(".tab2").removeClass('active');
      $(".tab1").addClass('active');
    });
    $(".chart-tab .tab1").on('click', function () {
      $("#chart-02").removeClass('active');
      $("#chart-01").addClass('active');
      $(".tab1").removeClass('active');
      $(".tab2").addClass('active');
    });
  }

  if($("body#gamesystem").length > 0){
    $(function(){
		if ($('html').attr('lang') !== 'en' && $('html').attr('lang') !== 'en-gb') {
			// 英語・欧州英語の場合、クッキーを無効化するので、別ファイル（/webroot/assets/[en|en-gb]/js/pc/gamesystem.js）で制御
			$("#main-cap").YTPlaylist([{
				videoURL: "https://www.youtube.com/watch?v="+$("#main-cap").data("youtube"),
				containment: '.cap-movie',
				autoPlay:true,
				mute:true,
				startAt:1,
				opacity: 1,
				showYTLogo: false,
				stopMovieOnBlur: false,
				showControls: false
			}]);
		}
    });
  }

  if($("section#form.receipt-form").length > 0){
    $("#btn-send,#btn-confirm").on("click",function(){
      console.log("send");
      $('#mainform').submit();
    });
    $("#btn-back").on("click",function(){
      console.log("back");
      $("input[name=backsubmit]").val(1);
      $('#mainform').submit();
    });

    checkOtherChozen($(".othercheck"));
    $(".othercheck").on("change",function(){
      checkOtherChozen(this);
    });

    function checkOtherChozen(thisObj){
      if($(thisObj).val()==$(thisObj).find("option:last").attr("value")){
        $(".formBox."+$(thisObj).attr("data-rel")).addClass("active");
      }else{
        $(".formBox."+$(thisObj).attr("data-rel")).removeClass("active");

      }
    }

  }

});


function d(){
  $(".debug-sheet").toggle();
}
