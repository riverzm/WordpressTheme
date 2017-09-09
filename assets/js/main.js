(function() {
$(function() {
var $loading = $('.loading');
$(window).load(function() {
$loading.stop(true,false,true).fadeOut(600);
});
});
}) ( $ );

(function() {
$(function() {
var $active = $('.main-header, .sub-header, .sub-footer'), $window = $(window);
$window.bind('scroll load', function() {
	if($(this).scrollTop() > 60 ) {
		$active.addClass('active');
	} else {
		$active.removeClass('active');
	}
});
});
}) ( $ );

(function() {
var $button = $('.menu-button'), $menu = $('.main-menu');
$button.click(function() {
$menu.fadeToggle();
});
}) ( $ );

(function() {
$(function() {
var $scroller = $('.content-scroller'), $window = $(window);
$window .bind('scroll load', function() {
	if($(this).scrollTop() > 300 ) {
		$scroller.stop(true,false,true).fadeIn(200);
	} else {
		$scroller.stop(true,false,true).fadeOut(200);
	}
});
});
}) ( $ );

(function() {
$(function() {
var $scroller = $('.content-scroller'), $body = $('html, body');
	$scroller.click(function() {
		$body.stop(true,false,true).animate({scrollTop: 0});
	});
});
}) ( $ );