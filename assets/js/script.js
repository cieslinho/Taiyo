const navBtn = document.querySelector('.nav__btn')
const navMenu = document.querySelector('.nav__menu')
const navOverlay = document.querySelector('.nav__overlay')
const mainContent = document.querySelector('.main')

const handleNav = () => {
	navBtn.classList.toggle('active')
	navMenu.classList.toggle('active')
	navOverlay.classList.toggle('active')
	mainContent.classList.toggle('active')
}

navBtn.addEventListener('click', handleNav)

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
