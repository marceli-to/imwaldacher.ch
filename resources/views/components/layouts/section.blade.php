@props(['container' => true])

<section {{ $attributes }}>
	@if ($container)
		<div class="mx-auto w-full max-w-6xl px-20 py-20 md:py-40">
			{{ $slot }}
		</div>
	@else
		{{ $slot }}
	@endif
</section>
