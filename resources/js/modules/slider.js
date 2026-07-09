import Swiper from 'swiper';
import { Navigation, Autoplay, EffectFade } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/effect-fade';

const el = document.querySelector('.header-swiper');

if (el) {
	new Swiper(el, {
		modules: [Navigation, Autoplay, EffectFade],
		loop: true,
		speed: 1200,
		effect: 'fade',
		fadeEffect: {
			crossFade: true,
		},
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
