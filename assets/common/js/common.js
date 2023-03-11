var current_page_set = 0;

var $ajax = {
	ajaxBase: {
		data: {
			lang: window.lang,
			type: window.type
		},
		type: 'post',
		dataType: 'json',
		timeout: 10000
	},
	fetchIndex: function() {
		var ajaxObj = this.ajaxBase;
		ajaxObj.url = APIHOST + '/api/index';
		$.ajax(ajaxObj).done(function(res) {
			if (window.type == 'dragalialife') window._render($('.mv'), $('#tplLatest'), res);
			window._render($('.card_box'), $('#tplList'), res);
			if (res.pager.isPagerSlider) $('.card_pager').addClass('adjust');
			if (res.pager.isPager) window._render($('.card_pager'), $('#tplTopPager'), res);
			$('#detail').fadeOut(function() {
				$('body').removeClass();
				$('#top, .mv').fadeIn();
			});
		}).fail(this.failError);
	},
	fetchDetail: function(id) {
		var ajaxObj = this.ajaxBase;
		ajaxObj.url = APIHOST + '/api/detail/' + id;
		$.ajax(ajaxObj).done(function(res) {
			window._render($('.detail_pager'), $('#tplDetailPager'), res[0]);
			window._render($('.manga'), $('#tplManga'), res[0]);
			window._render($('.detail_bottom'), $('#tplShare'), res[0]);
			window.current_page_set = res[0].current_page_set;
			$('#top, .mv').fadeOut(function() {
				$('#detail').fadeIn();
				$('body').addClass('detail');
				window.scrollTo(0, 0);
			});
		}).fail(this.failError);
	},
	fetchThumbnail: function(pageid) {
		var $card = $('.card_box');
		var ajaxObj = this.ajaxBase;
		ajaxObj.url = APIHOST + '/api/thumbnail_list/' + pageid;
		$.ajax(ajaxObj).done(function(res) {
			$card.fadeOut(function() {
				window._render($card, $('#tplList'), {items: res});
				$card.fadeIn();
			});
		}).fail(this.failError);
	},
	fetchPager: function(current_page_id, pageset) {
		var ajaxObj = this.ajaxBase;
		ajaxObj.url = APIHOST + '/api/pager/0/' + current_page_id + '/' + pageset;
		$.ajax(ajaxObj).done(function(res) {
			window._render($('.card_pager'), $('#tplTopPager'), {pager: res})
		}).fail(this.failError);

	},
	failError: function() {
		console.warn('network error!');
	}
};

var _render = function(target, tpl, data) {
	var compiled = _.template(tpl.html());
	target.html(compiled(data));
};

var router = function() {
	if ($('html').attr('lang') !== 'en-gb') {
		// 欧州英語以外ではGTMタグが設置される
		window.dataLayer = dataLayer || [];
		window.dataLayer.push({
			'trackPageview': window.location.pathname + window.location.hash,
			'title'        : window.document.title,
			'event'        : 'loadready'
		});
	}
	if (location.pathname.indexOf('gettingstarted') > -1) {
		if (location.hash.indexOf('detail') > -1) {
			var id = location.hash.split('/')[1];
			window.$ajax.fetchDetail(id);
		} else {
			window.$ajax.fetchIndex();
		}
	} else {
		if (location.hash.indexOf('detail') > -1) {
			var id = location.hash.split('/')[1];
			window.$ajax.fetchDetail(id);
		} else {
			window.$ajax.fetchIndex();
		}
	}
}

$(function() {
	window.router();

	// language
	$('#nintendo-header').on('mouseover', '#language', function() {
		$(this).find('dd').addClass('active');
	}).on('mouseout', '#language > dd', function() {
		$(this).removeClass('active');
	}).on('change', '#language_sp select', function() {
		window.location.href = '/' + window.type + '/' + $(this).val() + '/';
	});

	// pager
	$('.card_pager').on('click', '.items', function() {
		var $this = $(this);
		var pageid = $this.data('pageid');
		if (window.current_page_set === pageid) return false;

		window.current_page_set = pageid;
		$('.items').removeClass('current');
		$this.addClass('current');
		window.$ajax.fetchThumbnail(pageid);
	}).on('click', '.pager', function() {
		var pageset = $(this).data('pageset');
		window.$ajax.fetchPager(window.current_page_set, pageset);
	});
	var tapSelector = '.pager';
	$(document).on('touchstart', tapSelector, function() {
		$(this).addClass('on');
	}).on('touchend', tapSelector, function() {
		$(this).removeClass('on');
	});

	//pagetop
	var topBtn = $('#js-pageTop');
	var THRESHOLD_BREAKPOINT_VAL = 750;
	$(window).scroll(function() {
		if(window.innerWidth <= THRESHOLD_BREAKPOINT_VAL) {
			topBtn.removeAttr('style');
			return;
		}
		if ($(this).scrollTop() > 100) {
			topBtn.fadeIn();
		} else {
			topBtn.fadeOut();
		}
	}).on('hashchange', function() {
		window.router();
	});
	topBtn.click(function() {
		$('body,html').animate({
			scrollTop: 0
		}, 500);
		return false;
	});

	var urlQuery = '?' + Date.now();
	$('.moverimg').on('mouseover', function(){
		var turned = $(this).attr('src').replace(/_off\./g, '_on.');
		var removedQuery = turned.split('?')[0];
		$(this).attr('src', removedQuery + urlQuery);
	});
	$('.moverimg').on('mouseleave click', function(){
		var turned = $(this).attr('src').replace(/_on\./g, '_off.');
		$(this).attr('src', turned);
	});
});
