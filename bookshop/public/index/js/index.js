var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
	return new bootstrap.Tooltip(tooltipTriggerEl)
})

jQuery('.owl_slider_box').owlCarousel({
	loop: false,
	margin: 15,
	rtl: true,
	nav: false,
	autoplay: true,
	autoplayHoverPause: true,
	responsiveClass: true,
	responsive: {
		0: {
			items: 1,
		},
		600: {
			items: 2,
		},
		1000: {
			items: 3,
		}
	}
});


jQuery('.gallery-items-slider').owlCarousel({
	loop: false,
	margin: 1,
	rtl: true,
	nav: false,
	dots: false,
	autoplay: true,
	autoplayHoverPause: true,
	responsiveClass: true,
	responsive: {
		0: {
			items: 2,
		},
		600: {
			items: 2,
		},
		1000: {
			items: 4,
		}
	}
});

jQuery('.about-us-comments-slider').owlCarousel({
	loop: false,
	margin: 15,
	rtl: true,
	nav: false,
	dots: false,
	autoplay: true,
	autoplayHoverPause: true,
	responsiveClass: true,
	responsive: {
		0: {
			items: 1,
		},
		600: {
			items: 2,
		},
		1000: {
			items: 3,
		}
	}
});


jQuery('.timer').startTimer();

jQuery(".offcanvas-body ul li").has("ul").append("<span class='responsive-menu-caret-span'><i class='bi bi-caret-down'></i></span>");

jQuery(".offcanvas-body ul li span.responsive-menu-caret-span").click(function () {
	jQuery(this).prev("ul").slideToggle();
});

jQuery(".offcanvas-body ul li span.responsive-menu-caret-span").click(function () {
	jQuery(this).find("i").toggleClass('bi-caret-down');
	jQuery(this).find("i").toggleClass('bi-caret-up');
});


jQuery("#zoom_1").elevateZoom({
	zoomType: "inner",
	cursor: "crosshair"
});


jQuery(".set-product-show .bi-grid-fill").click(function () {
	jQuery(".product-item").parent(".col-md-4").addClass("col-md-6");
	jQuery(".product-item").parent(".col-md-4").toggleClass("col-md-4");
});

jQuery(".set-product-show .bi-grid-3x3-gap-fill").click(function () {
	jQuery(".product-item").parent(".col-md-6").addClass("col-md-4");
	jQuery(".product-item").parent(".col-md-6").toggleClass("col-md-6");
});


jQuery('.delete-cart-item').click(function () {
	jQuery(this).parent().parent().remove();
});