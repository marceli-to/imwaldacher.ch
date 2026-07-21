{{-- The XML declaration is concatenated so the literal "<?" never appears in
     this file — Blade tokenizes it as a PHP open tag when short_open_tag is on. --}}
{!! '<'.'?xml version="1.0" encoding="UTF-8"?'.'>' !!}
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
@foreach ($pages as $page)
	<url>
		<loc>{{ route($page['route']) }}</loc>
		<changefreq>{{ $page['changefreq'] }}</changefreq>
		<priority>{{ $page['priority'] }}</priority>
	</url>
@endforeach
</urlset>
