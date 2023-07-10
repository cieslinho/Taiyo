const navBtn = document.querySelector('.nav__btn')
const navMenu = document.querySelector('.nav__menu')
const navOverlay = document.querySelector('.nav__overlay')

const handleNav = () => {
	navBtn.classList.toggle('active')
	navMenu.classList.toggle('active')
	navOverlay.classList.toggle('active')
}

navBtn.addEventListener('click', handleNav)
