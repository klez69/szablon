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

// Gallery modal functionality
document.addEventListener('DOMContentLoaded', function () {
	const modal = document.getElementById('imageModal')
	const modalImg = document.getElementById('modalImage')
	const closeBtn = document.querySelector('.modal-close')
	const galleryItems = document.querySelectorAll('.gallery-item')

	// Open modal when clicking on gallery item
	galleryItems.forEach(item => {
		item.addEventListener('click', function () {
			const imgSrc = this.querySelector('img').src
			modalImg.src = imgSrc
			modal.classList.add('active')
			document.body.style.overflow = 'hidden'
		})
	})

	// Close modal when clicking close button
	closeBtn.addEventListener('click', function () {
		modal.classList.remove('active')
		document.body.style.overflow = ''
	})

	// Close modal when clicking outside the image
	modal.addEventListener('click', function (e) {
		if (e.target === modal) {
			modal.classList.remove('active')
			document.body.style.overflow = ''
		}
	})

	// Close modal with Escape key
	document.addEventListener('keydown', function (e) {
		if (e.key === 'Escape' && modal.classList.contains('active')) {
			modal.classList.remove('active')
			document.body.style.overflow = ''
		}
	})
})

// Obsługa przewijania do sekcji województw
document.addEventListener('DOMContentLoaded', function () {
	const wojewodztwoButtons = document.querySelectorAll('.wojewodztwo-btn')

	wojewodztwoButtons.forEach(button => {
		button.addEventListener('click', function () {
			const targetId = this.getAttribute('data-target')
			const targetSection = document.getElementById(targetId)

			if (targetSection) {
				// Płynne przewijanie do sekcji
				targetSection.scrollIntoView({
					behavior: 'smooth',
					block: 'start',
				})

				// Dodanie efektu podświetlenia sekcji
				targetSection.style.transition = 'background-color 0.3s ease'
				targetSection.style.backgroundColor = 'rgba(230, 0, 0, 0.1)'

				// Usunięcie podświetlenia po 1.5 sekundy
				setTimeout(() => {
					targetSection.style.backgroundColor = ''
				}, 1500)
			}
		})
	})
})

// Obsługa przycisku powrotu do góry
document.addEventListener('DOMContentLoaded', function () {
	const backToTopButton = document.querySelector('.back-to-top')

	// Funkcja sprawdzająca pozycję przewijania
	function toggleBackToTop() {
		if (window.pageYOffset > 300) {
			backToTopButton.classList.add('visible')
		} else {
			backToTopButton.classList.remove('visible')
		}
	}

	// Obsługa kliknięcia przycisku
	backToTopButton.addEventListener('click', function () {
		window.scrollTo({
			top: 0,
			behavior: 'smooth',
		})
	})

	// Nasłuchiwanie zdarzenia przewijania
	window.addEventListener('scroll', toggleBackToTop)

	// Sprawdzenie początkowej pozycji
	toggleBackToTop()
})
