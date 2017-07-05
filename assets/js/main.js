(function($) {
    "use strict";
    jQuery(document).ready(function($) {
		
        // Off canvas menu
        $(".menu-trigger").on("click", function() {
            $(".off-canvas-menu, .off-canvas-overlay").addClass("active");
            return false;
        })
        $(".menu-close, .off-canvas-overlay").on("click", function() {
            $(".off-canvas-menu, .off-canvas-overlay").removeClass("active");
        });
        // Owl carousel
        $(".breakingnews-carousel, .entertainment-carousel, .politics-carousel, .sports-carousel, .big-section-slider, .video-slides, .photo-gallary-slides, .viral-carousel").owlCarousel({
            items: 1,
            autoplay: true,
            nav: true,
            dots: true,
            loop: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"]
        });
        // magnific popup
        $('.video-play-btn').magnificPopup({
            type: 'video',
        });
        // ad close
        $("a.ad-close-btn").click(function() {
            $(".ad").addClass("hidden");
            return false;
        });
        $(".ad-close-btn-left").click(function() {
            $(".single-long-ad-left").addClass("hidden");
            return false;
        });
        $(".ad-close-btn-right").click(function() {
            $(".single-long-ad-right").addClass("hidden");
            return false;
        });
        // double ad
        $("#sticker").sticky({
            topSpacing: 0
        });
        //Check to see if the window is top if not then display button
        $(window).scroll(function() {
            if ($(this).scrollTop() > 200) {
                $('.scrollToShow').fadeIn();
            } else {
                $('.scrollToShow').fadeOut();
            }
        });
        //dycalender
        
    });
    jQuery(window).load(function() {});
}(jQuery));