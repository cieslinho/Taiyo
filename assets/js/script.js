const navBtn = document.querySelector('.nav__btn')
const navLinks = document.querySelectorAll('.menu-item')
const navMenu = document.querySelector('.nav__menu')
const navOverlay = document.querySelector('.nav__overlay')
const mainContent = document.querySelector('.main')
const footerContent = document.querySelector('.footer')

const modalOverlay = document.querySelector('.girls__overlay')

const modalOne = document.getElementById('girl-1')
const modalTwo = document.getElementById('girl-2')
const modalThree = document.getElementById('girl-3')

const modalBtnOne = document.getElementById('btn-1')
const modalBtnTwo = document.getElementById('btn-2')
const modalBtnThree = document.getElementById('btn-3')

const handleNav = () => {
	navBtn.classList.toggle('active')
	navMenu.classList.toggle('active')
	navOverlay.classList.toggle('active')
	mainContent.classList.toggle('active')
	footerContent.classList.toggle('active')

	navLinks.forEach(navLink => {
		navLink.addEventListener('click', () => {
			navBtn.classList.remove('active')
			navMenu.classList.remove('active')
			navOverlay.classList.remove('active')
			mainContent.classList.remove('active')
			footerContent.classList.remove('active')
		})
	})
}

const handleModal = () => {
	modalBtnOne.addEventListener('click', () => {
		modalOne.classList.add('active')
		modalOverlay.classList.add('active')
	})

	modalBtnTwo.addEventListener('click', () => {
		modalTwo.classList.add('active')
		modalOverlay.classList.add('active')
	})

	modalBtnThree.addEventListener('click', () => {
		modalThree.classList.add('active')
		modalOverlay.classList.add('active')
	})

	const closeBtns = document.querySelectorAll('.girls__close')
	closeBtns.forEach(closeBtn => {
		closeBtn.addEventListener('click', () => {
			modalOne.classList.remove('active')
			modalTwo.classList.remove('active')
			modalThree.classList.remove('active')
			modalOverlay.classList.remove('active')
		})
	})
}

navBtn.addEventListener('click', handleNav)
handleModal()

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
