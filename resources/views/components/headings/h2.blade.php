@props(['size' => 'lg'])

@php
$sizes = [
  'lg' => 'text-5xl md:text-7xl xl:text-8xl',
  'sm' => 'text-xl md:text-4xl xl:text-6xl',
];
@endphp

<h2 {{ $attributes->class(['font-condensed uppercase tracking-wide', $sizes[$size]]) }}>
  {{ $slot }}
</h2>
