// script.js
$(document).ready(function () {
	// Płynne przewijanie do sekcji po kliknięciu linku w menu
	$('nav a').click(function (e) {
		if (this.hash !== '') {
			e.preventDefault()

			const hash = this.hash
			const target = $(hash)

			if (target.length) {
				$('html, body').animate(
					{
						scrollTop: target.offset().top - 100,
					},
					800
				)
			}
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
	const navLinks = document.querySelectorAll('nav ul li a')

	if (menuToggle && nav) {
		menuToggle.addEventListener('click', function () {
			this.classList.toggle('active')
			nav.classList.toggle('active')
		})

		// Zamykanie menu po kliknięciu w link
		if (navLinks.length > 0) {
			navLinks.forEach(link => {
				link.addEventListener('click', function () {
					menuToggle.classList.remove('active')
					nav.classList.remove('active')
				})
			})
		}

		// Zamykanie menu po kliknięciu poza menu
		document.addEventListener('click', function (e) {
			if (!e.target.closest('nav') && !e.target.closest('.menu-toggle')) {
				menuToggle.classList.remove('active')
				nav.classList.remove('active')
			}
		})
	}
})

// Gallery modal functionality
document.addEventListener('DOMContentLoaded', function () {
	const modal = document.getElementById('galleryModal')
	const modalImg = document.getElementById('modalImage')
	const closeBtn = document.querySelector('.modal-close')
	const galleryItems = document.querySelectorAll('.gallery-item')

	// Jeśli elementy nie istnieją, zakończ funkcję
	if (!modal || !modalImg || !closeBtn) {
		console.log('Elementy galerii nie istnieją - pomijam inicjalizację')
		return
	}

	// Open modal when clicking on gallery item
	if (galleryItems && galleryItems.length > 0) {
		galleryItems.forEach(item => {
			item.addEventListener('click', function () {
				const imgSrc = this.querySelector('img').src
				modalImg.src = imgSrc
				modal.style.display = 'block'
			})
		})
	}

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

	if (wojewodztwoButtons.length > 0) {
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
	}
})

// Obsługa przycisku powrotu do góry
document.addEventListener('DOMContentLoaded', function () {
	const backToTopButton = document.querySelector('.back-to-top')

	// Jeśli przycisk nie istnieje, zakończ funkcję
	if (!backToTopButton) {
		console.log('Przycisk powrotu do góry nie istnieje - pomijam inicjalizację')
		return
	}

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

// Share counter functionality
document.addEventListener('DOMContentLoaded', function () {
	const shareCounters = document.querySelectorAll('.share-counter')

	shareCounters.forEach(counter => {
		const countElement = counter.querySelector('.share-count')
		const articleUrl = counter.closest('.card-content').querySelector('a').href

		// Wczytaj zapisany licznik z localStorage
		let count = localStorage.getItem(`share_${articleUrl}`) || 0
		countElement.textContent = count

		// Obsługa kliknięcia w licznik
		counter.addEventListener('click', function () {
			count++
			countElement.textContent = count
			localStorage.setItem(`share_${articleUrl}`, count)
		})
	})
})

// Share button functionality
document.addEventListener('DOMContentLoaded', function () {
	const shareButtons = document.querySelectorAll('.share-btn')

	shareButtons.forEach(button => {
		button.addEventListener('click', function () {
			const url = this.getAttribute('data-url')
			const shareCountElement = this.nextElementSibling

			// Otwórz okno udostępniania na Facebooku
			window.open(
				`https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(url)}`,
				'facebook-share-dialog',
				'width=800,height=600'
			)

			// Pobierz aktualny licznik z localStorage
			let count = parseInt(localStorage.getItem(`share_${url}`)) || 0

			// Zwiększ licznik i zaktualizuj w localStorage
			count++
			localStorage.setItem(`share_${url}`, count)

			// Zaktualizuj licznik w interfejsie
			shareCountElement.textContent = `${count} udostępnień`
		})

		// Wczytaj zapisany licznik z localStorage przy ładowaniu strony
		const url = button.getAttribute('data-url')
		const savedCount = localStorage.getItem(`share_${url}`)
		if (savedCount) {
			button.nextElementSibling.textContent = `${savedCount} udostępnień`
		}
	})
})

// Newsletter email validation
document.querySelector('.newsletter-form input[name="newsletter_email"]').addEventListener('input', function () {
	const email = this.value
	const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
	if (!emailRegex.test(email)) {
		this.style.borderColor = 'red'
	} else {
		this.style.borderColor = 'green'
	}
})

// FAQ functionality
document.addEventListener('DOMContentLoaded', function () {
	const faqQuestions = document.querySelectorAll('.faq-question')

	faqQuestions.forEach(question => {
		question.addEventListener('click', function () {
			const faqItem = this.parentElement
			const answer = faqItem.querySelector('.faq-answer')

			// Zamknij wszystkie inne odpowiedzi
			document.querySelectorAll('.faq-item').forEach(item => {
				if (item !== faqItem) {
					item.classList.remove('active')
					const otherAnswer = item.querySelector('.faq-answer')
					otherAnswer.style.maxHeight = null
				}
			})

			// Przełącz aktywną odpowiedź
			faqItem.classList.toggle('active')
			if (faqItem.classList.contains('active')) {
				answer.style.maxHeight = answer.scrollHeight + 'px'
			} else {
				answer.style.maxHeight = null
			}
		})
	})
})
