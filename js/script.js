(function($) {

	"use strict";
	/************************************************
	------- Home-1 
	*************************************************/
	if ($("#main_banner").length) {
		var owl1 = $('#main_banner');
		  owl1.owlCarousel({
			margin: 0,
			loop: true,
			items : 1,
			autoplay: true,
			autoplayTimeout: 5000,
			nav: true,
			navText: [ '<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>' ],
		});
		// banner bg img set
		$("#main_banner .owl-stage-outer .owl-stage .owl-item").each(function() {
			var img_src = $(this).children(".item").children("img").attr("src");
			$(this).children(".item").css("background-image", 'url(' + img_src + ')');
			$(this).children(".item").children("img").hide();
		});
		// banner screen height
		var window_height = $(window).height();
		$("#main_banner .owl-item .item").css("height",window_height + "px");
		
		
		$(window).resize(function() {
			var window_height = $(window).height();
			$("#main_banner .owl-item .item").css("height",window_height + "px");
		});
		// banner slider end
	}
	if ($(".customer-text").length == 1) {
		var customer_text = $('.customer-text');
		  customer_text.owlCarousel({
			margin: 0,
			loop: true,
			items : 1,
			nav: false,
		});
	}
	
	if ($("#dishes_slider").length){
		 var owl2 = $('#dishes_slider');
		  owl2.owlCarousel({
			margin: 30,
			loop: true,
			nav: true,
			navText: [ '<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>' ],
			dots: false,
			 responsive: {
			  0: {
				items: 1
			  },
			  768: {
				items: 2
			  },
			  992: {
				items: 3
			  }
			}
		});	
	}
	/************************************************
	------- Home-2 
	*************************************************/
	if ($("#new_slider").length){
		var owl3 = $('#new_slider');
		  owl3.owlCarousel({
			margin: 0,
			loop: true,
			nav: true,
			navText: [ '<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>' ],
			dots: false,
			items: 1,
		});
		$("#new_slider .owl-stage-outer .owl-stage .owl-item").each(function() {
			var new_imgSrc = $(this).children(".item").find(".news-img").children("img").attr("src");
			$(this).children(".item").find(".news-img").css("background-image", 'url(' + new_imgSrc + ')');
			$(this).children(".item").find(".news-img").children("img").hide();
		});	
	}
	/************************************************
	------- Home-3 
	*************************************************/
	if ($(".singal-itemSlider").length){
		var owl4 = $('.singal-itemSlider');
		  owl4.owlCarousel({
			margin: 0,
			loop: true,
			items : 1,
			nav: true,
			dots: false,
			navText: [ '<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>' ],
		});
		$(".singal-itemSlider .owl-stage-outer .owl-stage .owl-item .item .left-img").each(function() {
			var img_src = $(this).children(".img").children("img").attr("src");
			$(this).children(".img").css("background-image", 'url(' + img_src + ')');
			$(this).children(".img").children("img").hide();
		});
	}
	/************************************************
	------- Progress Bars 
	*************************************************/
	//Progress Bars start
	if ($(".progress-barsStyle").length){
		
		$('.percent').percentageLoader({
			valElement: 'p',
			strokeWidth: 10,
			bgColor: '#f0f0f0',
			ringColor: '#c6a325',
			textColor: '#c6a325',
			fontSize: '36px',
			fontWeight: 'bold'
		});
		$('.percentstyle2').percentageLoader({
			valElement: 'p',
			strokeWidth: 10,
			bgColor: '#f0f0f0',
			ringColor: '#817a0c',
			textColor: '#817a0c',
			fontSize: '36px',
			fontWeight: 'bold'
		});
		$('.percentstyle3').percentageLoader({
			valElement: 'p',
			strokeWidth: 10,
			bgColor: '#f0f0f0',
			ringColor: '#c68825',
			textColor: '#c68825',
			fontSize: '36px',
			fontWeight: 'bold'
		});
		$('.percentstyle4').percentageLoader({
			valElement: 'p',
			strokeWidth: 10,
			bgColor: '#f0f0f0',
			ringColor: '#c6bd25',
			textColor: '#c6bd25',
			fontSize: '36px',
			fontWeight: 'bold'
		});
	}
	//Progress Bars end
	
	/************************************************
	------- same col hedight
	*************************************************/
	
	if ($(".sideBar").length){
		$(".news .sideBar").css("min-height","0px"); 
		var window_width = $(window).width();
		var window_height = $(window).height();
		var page_height = $('body').height();
		var left_height = $(".news .sideBar").height();
		var right_height = $(".news .rightBar").height();
		var allply_css = $(".news .sideBar");
		
		if(window_width >= 992){
			if( page_height >= window_height){
				if(right_height <= left_height)
				{
					var window_height = $(window).height();
					allply_css.css("min-height",window_height+"px");
				}
				else
				{
					var right_height = $(".rightBar").outerHeight(true);
					allply_css.css("min-height",right_height +"px");
				}
			}
			else
			{
				var window_height = $(window).height();
				allply_css.css("min-height",window_height+"px");
			}
		}
		$(window).resize(function() {
		   $(".news .sideBar").css("min-height","0px");
			var window_width = $(window).width();
			var window_height = $(window).height();
			var page_height = $('body').height();
			var left_height = $(".news .sideBar").height();
			var right_height = $(".news .rightBar").height();
			var allply_css = $(".news .sideBar");
			
			if(window_width >= 992){
				if( page_height >= window_height){
					if(right_height <= left_height)
					{
						var window_height = $(window).height();
						allply_css.css("min-height",window_height+"px");
					}
					else
					{
						var right_height = $(".rightBar").outerHeight(true);
						allply_css.css("min-height",right_height +"px");
					}
				}
				else
				{
					var window_height = $(window).height();
					allply_css.css("min-height",window_height+"px");
				}
			}
		});
	}

	/************************************************
	------- intro page2 hedight set
	*************************************************/
	if ($(".intro-page.style2").length){
		$(".intro-page.style2 .infro-view").css("height", $(window).height() - 78 + "px");
		$(window).resize(function() {
			$(".intro-page.style2 .infro-view").css("height", $(window).height() - 78 + "px");
		});
	}
	
	/************************************************
	------- intro page hedight set
	*************************************************/

	if ($(".intro-page .intro-content").length){
		var introLeft = $(".intro-content .left-slide");
		var introRight = $(".intro-content .right-slide");
		introLeft.hover(function(){
			$(this).children(".overlap").hide();
		},function(){
			$(this).children(".overlap").show();
		});
		introRight.hover(function(){
			$(this).children(".overlap").hide();
		},function(){
			$(this).children(".overlap").show();
		});
		
		var window_height = $(window).height();
		var intro_height = window_height - 148 ;
		introLeft.css("height", intro_height + "px");
		introRight.css("height", intro_height + "px");
		var intro_width = $(".intro-content").width();
		var bottom_value = ((4 * intro_width)/ 100 )/ 2;
		var top_padding = introRight.width();
		var top_padding2 = (top_padding * 11.15)/100;
		var left_padding = (top_padding2 * 36.89 )/100;
		$(".intro-content .right-slide .info-text .inner-text").css("padding-top", top_padding2 +"px");
		$(".intro-content .left-slide .info-text .inner-text").css("padding-top", top_padding2 +"px");
		$(".intro-content .left-slide .info-text").css("bottom","-" + bottom_value +"px");
		$(".intro-content .right-slide .info-text").css("bottom","-" + bottom_value +"px");
		
		$(window).resize(function(){
			var window_height = $(window).height();
			var intro_height = window_height - 148 ;
			introLeft.css("height", intro_height + "px");
			introRight.css("height", intro_height + "px");	
			var intro_width = $(".intro-content").width();
			var bottom_value = ((4 * intro_width)/ 100 )/ 2;
			$(".intro-content .left-slide .info-text").css("bottom","-" + bottom_value +"px");
			$(".intro-content .right-slide .info-text").css("bottom","-" + bottom_value +"px");
			var top_padding = introRight.width();
			var top_padding2 = (top_padding * 11.15)/100;
			var left_padding = (top_padding2 * 36.89 )/100;
			$(".intro-content .right-slide .info-text .inner-text").css("padding-top", top_padding2 +"px");
			$(".intro-content .left-slide .info-text .inner-text").css("padding-top", top_padding2 +"px");

		});
	}
	/************************************************
	------- booking page js
	*************************************************/
	if ($(".table-view").length) {
		var table_view_slider = $('.table-view');
		  table_view_slider.owlCarousel({
			margin: 0,
			loop: true,
			items : 1,
		});
	}
	$(".table-view .tabel-box").click(function(){
		if ($(this).hasClass("booked"))
		{
			
		}
		else
		{
			$(".table-view .tabel-box").removeClass("select");
			$(this).addClass("select");	
			if ($(window).width()> 767 )
			{
				var book_tabel_top = $(".book-tabel").offset().top - $(".nav-main").outerHeight();
			}
			else
			{
				var book_tabel_top = $(".book-tabel").offset().top ;
			}
			$("html, body").animate({ scrollTop: book_tabel_top +"px" }, 1500);
		}
	});
	$(".single-tableView .table-block").click(function(){
		if ($(this).hasClass("booked"))
		{
			
		}
		else
		{
			$(".single-tableView .table-block").removeClass("select");
			$(this).addClass("select");	
			if ($(window).width()> 767 )
			{
				var book_tabel_top = $(".book-tabel").offset().top - $(".nav-main").outerHeight();
			}
			else
			{
				var book_tabel_top = $(".book-tabel").offset().top ;
			}
			$("html, body").animate({ scrollTop: book_tabel_top +"px" }, 1500);
		}
	});
	if ($(".customer-feedback").length) {
		var table_view_slider = $('.customer-feedback');
		  table_view_slider.owlCarousel({
			margin: 30,
			loop: true,
			items : 3,
			autoplay: false,
			responsive: {
			  0: {
				items: 1,
			  },
			  768: {
				items: 2
			  },
			  992: {
				items: 3
			  }
			}
		});
	}
	var $container = jQuery('.gallery-masonary, .menu-masonary');
    var $optionSets = jQuery('.option-set');
    var $optionLinks = $optionSets.find('a');
    function doIsotopeFilter() {
        if (jQuery().isotope) {
            var isotopeFilter = '';
            $optionLinks.each(function() {
                var selector = jQuery(this).attr('data-filter');
                var link = window.location.href;
                var firstIndex = link.indexOf('filter=');
                if (firstIndex > 0) {
                    var id = link.substring(firstIndex + 7, link.length);
                    if ('.' + id == selector) {
                        isotopeFilter = '.' + id;
                    }
                }
            });
            $container.isotope({
                itemSelector: '.masonry-grid',
                filter: isotopeFilter,
                layoutMode: 'fitRows'
            });
            $optionLinks.each(function() {
                var $this = jQuery(this);
                var selector = $this.attr('data-filter');
                if (selector == isotopeFilter) {
                    if (!$this.hasClass('selected')) {
                        var $optionSet = $this.parents('.option-set');
                        $optionSet.find('.selected').removeClass('selected');
                        $this.addClass('selected');
                    }
                }
            });
            $optionLinks.on('click', function() {
                var $this = jQuery(this);
                var selector = $this.attr('data-filter');
                $container.isotope({
                    itemSelector: '.masonry-grid',
                    filter: selector
                });
                if (!$this.hasClass('selected')) {
                    var $optionSet = $this.parents('.option-set');
                    $optionSet.find('.selected').removeClass('selected');
                    $this.addClass('selected');
                }
                return false;
            });
        }
    }
    var isotopeTimer = window.setTimeout(function() {
        window.clearTimeout(isotopeTimer);
        doIsotopeFilter();
    }, 1000);
})(window.jQuery);
