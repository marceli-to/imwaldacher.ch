<footer {{ $attributes->merge(['class' => 'mx-auto w-full max-w-6xl px-20 py-20 md:py-28 xl:py-36']) }}>
	<div class="flex flex-col gap-20 md:grid gap-y-32 md:grid-cols-12 text-xs xl:text-sm">

    <div class="md:col-span-9">

      <address class="not-italic flex flex-col">
        Gfeller Treuhand und Verwaltungs AG<br>
        Bahnhofstrasse 60<br>
        8600 Dübendorf<br>
        <a href="https://www.kolb-immobilien.ch" target="_blank" rel="noopener" class="hover:underline decoration-1 underline-offset-2">
          www.gfeller-treuhand.ch
        </a>
      </address>

    </div>

		<nav class="md:text-right md:col-span-3 md:self-end">
			<ul>
				<li>
					<a href="{{ route('disclaimer') }}" class="hover:underline decoration-1 underline-offset-2">
						Disclaimer
					</a>
				</li>
				<li>
					<a href="{{ route('imprint') }}" class="hover:underline decoration-1 underline-offset-2">
						Impressum
					</a>
				</li>
				<li>
					<a href="{{ route('privacy') }}" class="hover:underline decoration-1 underline-offset-2">
						Datenschutz
					</a>
				</li>
				<li>
					<a href="https://stoz.ch" target="_blank" rel="noopener" class="hover:underline decoration-1 underline-offset-2">
						design by stoz
					</a>
				</li>
			</ul>
		</nav>

	</div>
</footer>
