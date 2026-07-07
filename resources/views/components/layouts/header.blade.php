@php
	$slides = [
		['file' => 'imwaldacher-aussen',     'alt' => 'Im Waldacher Baltenswil – Aussenansicht der Überbauung'],
		['file' => 'imwaldacher-gartenhof',  'alt' => 'Im Waldacher Baltenswil – Gartenhof'],
		['file' => 'imwaldacher-dachwohnung', 'alt' => 'Im Waldacher Baltenswil – Wohnraum einer Dachwohnung'],
		['file' => 'imwaldacher-wohnzimmer', 'alt' => 'Im Waldacher Baltenswil – Wohnraum mit Gartenzugang'],
		['file' => 'imwaldacher-badezimmer', 'alt' => 'Im Waldacher Baltenswil – Badezimmer'],
	];
@endphp
<header class="relative">
	<x-slider :slides="$slides" />

	<img
		src="/images/logo.svg"
		alt="Im Waldacher Baltenswil"
		width="263"
		height="70"
		class="pointer-events-none absolute top-24 left-24 z-10 h-40 w-auto sm:left-auto sm:right-24 md:top-40 md:right-40 md:h-52"
	>
</header>
