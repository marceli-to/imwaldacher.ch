import Swiper from 'swiper';
import { Navigation } from 'swiper/modules';
import 'swiper/css';

const el = document.querySelector('.header-swiper');

if (el) {
	new Swiper(el, {
		modules: [Navigation],
		loop: true,
		speed: 600,
		navigation: {
			prevEl: '.header-prev',
			nextEl: '.header-next',
		},
	});
}
