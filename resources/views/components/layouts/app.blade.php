@props(['title' => null, 'description' => null])
@php
	$metaTitle = $title ?? 'Im Waldacher Baltenswil – Wohnungen mit Charakter und Gewerberäumen';
	$metaDescription = $description ?? 'Erstvermietung ab Sommer 2027: 34 moderne und grosszügige 2.5- bis 4.5-Zimmer-Mietwohnungen sowie zwei Gewerberäume an der Bassersdorferstrasse 14 in Baltenswil.';
	$metaImage = url('/images/imwaldacher-og.jpg');
@endphp
<!DOCTYPE html>
<html lang="de" class="scroll-smooth">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ $metaTitle }}</title>
<meta name="description" content="{{ $metaDescription }}">
<link rel="canonical" href="{{ url()->current() }}">
<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="/favicon.svg" />
<link rel="shortcut icon" href="/favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
<meta name="apple-mobile-web-app-title" content="Im Waldacher" />
<link rel="manifest" href="/site.webmanifest" />
<link rel="preconnect" href="https://use.typekit.net" crossorigin>
<link rel="stylesheet" href="https://use.typekit.net/iyh1voa.css">
<meta property="og:type" content="website">
<meta property="og:site_name" content="{{ config('app.name') }}">
<meta property="og:title" content="{{ $metaTitle }}">
<meta property="og:description" content="{{ $metaDescription }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:image" content="{{ $metaImage }}">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:locale" content="de_CH">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $metaTitle }}">
<meta name="twitter:description" content="{{ $metaDescription }}">
<meta name="twitter:image" content="{{ $metaImage }}">
@if (filled(config('services.turnstile.site_key')))
<script src="https://challenges.cloudflare.com/turnstile/v0/api.js?onload=onTurnstileLoad" async defer></script>
<script>window.onTurnstileLoad = () => document.dispatchEvent(new Event('turnstile:loaded'));</script>
@endif
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-cream text-petrol text-xs md:text-sm xl:text-lg leading-[1.3] antialiased">
{{ $slot }}
</body>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-DM3J8GD1XF"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-DM3J8GD1XF');
</script>
</html>
