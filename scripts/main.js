//Smooth Scroll
$(document).ready(function(){
	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 1500, 'easeInOutCirc');
	});
});

//Sticky nav bar
// TODO: Fix variable declaration
var  mn = $(".nav-bar");
    mns = "nav-bar-scrolled";
    hdr = $('.header-inner').height();// + $('.header-contact').height();
    art = $(".homepage-article-one");
    arts = "homepage-article-one-scrolled";

$(window).scroll(function() {
  if( $(this).scrollTop() > hdr ) {
    mn.addClass(mns);
    art.addClass(arts);
  } else {
    mn.removeClass(mns);
    art.removeClass(arts);
  }
});

//Logo rotation
var bodyHeight = $("body").height()-$(window).height();
window.onscroll = function() {
    var deg = -$(window).scrollTop()*(-7200/bodyHeight);
    $(".rotating-logo").css({
        "transform": "rotate("+deg+"deg)",
    });
};

//Responsive menu
$(function() {
    var pull        = $('#pull');
        menu        = $('.responsive-main-nav');
        menuHeight  = menu.height();

    $(pull).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle();
        ($(".pull-span").text() === "Hide ") ? $(".pull-span").text("Show ") : $(".pull-span").text("Hide ");
    });
});

$(window).resize(function(){
    var w = $(window).width();
    if(($("#pull").css("display") == "none" ) && menu.is(':hidden')) {
        menu.removeAttr('style');
    }
});

//Auto hide menu
(function($){
  $(function(){
    var scroll = $(document).scrollTop();
    var headerHeight = $('.nav-bar').outerHeight();

    $(window).scroll(function() {
      var scrolled = $(document).scrollTop();
      if (scrolled > headerHeight){
        $('.nav-bar').addClass('off-canvas');
      } else {
        $('.nav-bar').removeClass('off-canvas');
      }

        if (scrolled > scroll){
         $('.nav-bar').removeClass('fixed');
        } else {
        $('.nav-bar').addClass('fixed');
        }
      scroll = $(document).scrollTop();
     });

   });
})(jQuery);


//Menu highlight active class
$(document).ready(function () {
    $('.main').css($('.nav-bar').height());
    $(window).scroll(function () {

    var y = $(this).scrollTop();
    var hdr = $('.header-inner').height() -20;

    $(window).scroll(function() {
    clearTimeout($.data(this, 'scrollTimer'));
    $.data(this, 'scrollTimer', setTimeout(function() {
            $('.middle-out').each(function (event) {
        if (y >= $($(this).attr('href')).offset().top - $('.nav-bar').height()){
            $('.middle-out').not(this).removeClass('active');
            $(this).addClass('active');
        }

                else if (y <= hdr) {
       $('.middle-out').removeClass('active');

}
    });
    }, 40));
});
    }).scroll();
});
