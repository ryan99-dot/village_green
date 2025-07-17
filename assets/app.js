import './bootstrap.js';
/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */
import './styles/app.css';

console.log('This log comes from assets/app.js - welcome to AssetMapper! 🎉');

document.addEventListener('DOMContentLoaded', function () {
	// Fonction pour mettre à jour les boutons actifs
	function updateIndicators(carouselId) {
		const carousel = document.querySelector(`#${carouselId}`);
		const indicators = carousel.querySelectorAll('.carousel-indicators button');

		carousel.addEventListener('slid.bs.carousel', function () {
			indicators.forEach(button => button.classList.remove('bg-custom'));

			const activeIndicator = carousel.querySelector('.carousel-indicators .active');
			if (activeIndicator) {
				activeIndicator.classList.add('bg-custom');
			}
		});
	}

	// Appliquer la logique aux deux carousels
	updateIndicators('produitsVedettes');
	updateIndicators('marquesVedettes');
});