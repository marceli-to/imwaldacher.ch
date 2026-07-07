<footer {{ $attributes->merge(['class' => 'mx-auto w-full max-w-6xl px-20 py-20 md:py-40']) }}>
	<div class="flex flex-col gap-20 md:grid gap-y-32 md:grid-cols-12 text-xs md:text-sm">

    <div class="flex flex-col md:flex-row md:items-end gap-20 md:gap-x-32 lg:gap-x-72 md:col-span-9">

      <address class="not-italic flex flex-col">
        <strong>Gfeller Treuhand und Verwaltungs AG</strong>
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
