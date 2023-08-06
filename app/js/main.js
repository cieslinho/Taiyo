const navBtn = document.querySelector('.nav__btn')
const navLinks = document.querySelectorAll('.menu-item')
const navMenu = document.querySelector('.nav__menu')
const navOverlay = document.querySelector('.nav__overlay')
const mainContent = document.querySelector('.main')
const footerContent = document.querySelector('.footer')

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

navBtn.addEventListener('click', handleNav)
