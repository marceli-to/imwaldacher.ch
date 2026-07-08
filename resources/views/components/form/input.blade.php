@props([
	'name',
	'label',
	'type' => 'text',
])

<div x-data>
	<label for="{{ $name }}" class="sr-only">
    {{ $label }}
  </label>
	<input
		type="{{ $type }}"
		id="{{ $name }}"
		name="{{ $name }}"
		placeholder="{{ $label }}"
		@error($name) aria-invalid="true" @enderror
		x-on:focus="$el.classList.remove('bg-red-300'); $el.classList.add('bg-white'); $el.removeAttribute('aria-invalid')"
		{{ $attributes->class([
			'w-full px-15 py-10 text-black placeholder:text-black focus:outline-none focus:outline focus-visible:outline focus-visible:outline-petrol',
			'bg-white' => ! $errors->has($name),
			'bg-red-300' => $errors->has($name),
		]) }}
	>
</div>
