var headerSwiper = new Swiper('.header__swiper', {
	spaceBetween: 30,
	effect: 'fade',
	pagination: {
		el: '.header__pagination',
		clickable: true,
	},
	autoplay: {
		delay: 2500,
		disableOnInteraction: false,
	},
})

var thumbsGallery = new Swiper('.thumbs-gallery', {
	centeredSlides: true,
	centeredSlidesBounds: true,
	slidesPerView: 3,
	watchOverflow: true,
	watchSlidesVisibility: true,
	watchSlidesProgress: true,
	direction: 'vertical',
})
var mainGallery = new Swiper('.main-gallery', {
	loop: true,
	spaceBetween: 10,
	pagination: {
		el: '.gallery__pagination',
		clickable: true,
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	thumbs: {
		swiper: thumbsGallery,
	},
	autoplay: {
		delay: 2500,
		disableOnInteraction: false,
	},
})
