import Swiper from 'swiper';
import { Navigation, Autoplay } from 'swiper/modules';
import 'swiper/css';

const el = document.querySelector('.header-swiper');

if (el) {
	new Swiper(el, {
		modules: [Navigation, Autoplay],
		loop: true,
		speed: 600,
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},
		navigation: {
			prevEl: '.header-prev',
			nextEl: '.header-next',
		},
	});
}
