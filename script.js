// script.js
$(document).ready(function () {
	// Płynne przewijanie do sekcji po kliknięciu linku w menu
	$('nav a').click(function (e) {
		if (this.hash !== '') {
			e.preventDefault()

			const hash = this.hash

			$('html, body').animate(
				{
					scrollTop: $(hash).offset().top - 100,
				},
				800
			)
		}
	})

	// Mobilne menu
	$('.mobile-toggle').click(function () {
		$('nav ul').toggleClass('active')
	})

	// Efekt pojawiania się elementów podczas scrollowania
	$(window).scroll(function () {
		$('.service-card').each(function () {
			var position = $(this).offset().top
			var scroll = $(window).scrollTop()
			var windowHeight = $(window).height()

			if (scroll > position - windowHeight + 200) {
				$(this).addClass('visible')
			}
		})
	})
})

document.addEventListener('DOMContentLoaded', function () {
	const menuToggle = document.querySelector('.menu-toggle')
	const nav = document.querySelector('nav')

	menuToggle.addEventListener('click', function () {
		this.classList.toggle('active')
		nav.classList.toggle('active')
	})

	// Zamykanie menu po kliknięciu w link
	document.querySelectorAll('nav ul li a').forEach(link => {
		link.addEventListener('click', function () {
			menuToggle.classList.remove('active')
			nav.classList.remove('active')
		})
	})

	// Zamykanie menu po kliknięciu poza menu
	document.addEventListener('click', function (e) {
		if (!e.target.closest('nav') && !e.target.closest('.menu-toggle')) {
			menuToggle.classList.remove('active')
			nav.classList.remove('active')
		}
	})
})
