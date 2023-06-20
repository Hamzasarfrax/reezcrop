$(document).ready(function () {

$("#cemetery").owlCarousel({
    lazyLoad: true,
	autoplay: true,
	items: 6,
	responsive: {
        1199: {
            items: 6
        },
        1024: {
            items: 5
        },
        768: {
            items: 4
        },
        320: {
            items: 2
        }
	},
	onInitialized: function (event) {
	$("#cemetery").parent().css({opacity: 1})
}
});


function owlInitialize() {
    if ($(window).width() < 1024) {
        $("#officesSlider").owlCarousel({
            lazyLoad: true,
            loop: true,
            autoplay: false,
            items: 4,
            margin: 1,
            nav: true,
            dots: false,
            smartSpeed: 600,
            responsive: {
                768: {
                    nav: true,
                    autoplay: false,
                    items: 3,
                },
                320: {
                    nav: true,
                    autoplay: false,
                    items: 1,
                }
            }
        });
    } else {
        $("#officesSlider").owlCarousel("destroy");
    }
}
$(document).ready(function(e) {
    owlInitialize();
});
$(window).resize(function() {
    owlInitialize();
});


});