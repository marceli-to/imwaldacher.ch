@props(['slides' => []])
<div class="swiper header-swiper relative aspect-square w-full overflow-hidden sm:aspect-[16/9] xl:aspect-[16/8]">
	<div class="swiper-wrapper">
		@foreach ($slides as $slide)
		<div class="swiper-slide">
			<picture>
				<source media="(max-width: 639px)" type="image/avif" srcset="/images/{{ $slide['file'] }}-mobile.avif">
				<source media="(max-width: 639px)" type="image/webp" srcset="/images/{{ $slide['file'] }}-mobile.webp">
				<source media="(max-width: 639px)" type="image/jpeg" srcset="/images/{{ $slide['file'] }}-mobile.jpg">
				<source type="image/avif" srcset="/images/{{ $slide['file'] }}.avif">
				<source type="image/webp" srcset="/images/{{ $slide['file'] }}.webp">
				<img
					src="/images/{{ $slide['file'] }}.jpg"
					alt="{{ $slide['alt'] }}"
					width="2400"
					height="1266"
					class="size-full object-cover"
					@if ($loop->first) fetchpriority="high" @else loading="lazy" @endif>
			</picture>
		</div>
		@endforeach
	</div>

	{{-- Navigation: prev/next only, no indicators --}}
	<button type="button" class="header-prev group absolute top-1/2 left-16 z-10 flex size-32 -translate-y-1/2 items-center justify-center text-white transition hover:opacity-70 md:left-24 md:size-48" aria-label="Vorheriges Bild">
		<svg viewBox="0 0 24 24" fill="none" class="size-32 md:size-48" aria-hidden="true"><path d="M15 5 8 12l7 7" stroke="currentColor" stroke-width="2" stroke-linecap="square" stroke-linejoin="miter"/></svg>
	</button>
	<button type="button" class="header-next group absolute top-1/2 right-16 z-10 flex size-64 -translate-y-1/2 items-center justify-center text-white transition hover:opacity-70 md:right-24 md:size-48" aria-label="Nächstes Bild">
		<svg viewBox="0 0 24 24" fill="none" class="size-32 md:size-48" aria-hidden="true"><path d="M9 5l7 7-7 7" stroke="currentColor" stroke-width="2" stroke-linecap="square" stroke-linejoin="miter"/></svg>
	</button>
</div>
