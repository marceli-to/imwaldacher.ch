@php
	$slides = [
		['file' => 'imwaldacher-aussen',     'alt' => 'Im Waldacher Baltenswil – Aussenansicht der Überbauung'],
		['file' => 'imwaldacher-gartenhof',  'alt' => 'Im Waldacher Baltenswil – Gartenhof'],
		['file' => 'imwaldacher-dachwohnung', 'alt' => 'Im Waldacher Baltenswil – Wohnraum einer Dachwohnung'],
		['file' => 'imwaldacher-wohnzimmer', 'alt' => 'Im Waldacher Baltenswil – Wohnraum mit Gartenzugang'],
		['file' => 'imwaldacher-badezimmer', 'alt' => 'Im Waldacher Baltenswil – Badezimmer'],
	];
@endphp
<header class="relative z-10">
	<x-slider :slides="$slides" />
  <div class="absolute top-0 left-0 w-full z-50">
    <x-layouts.section class="flex justify-end">
      <img
        src="/images/logo.svg"
        alt="Im Waldacher Baltenswil"
        width="416"
        height="246"
        class="block pointer-events-none w-120 md:w-180 xl:w-220 h-auto" />
    </x-layouts.section>
  </div>
</header>
