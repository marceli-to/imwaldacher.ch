<x-layouts.app>
	<x-layouts.header />

	<main>

    <section class="relative -mt-40 md:-mt-60 xl:-mt-80 z-20">
      <div class="mx-auto w-full max-w-6xl px-20">
        <div class="relative pr-20 pt-20 pb-28 md:pt-32 md:pb-40 xl:pt-40 xl:pb-48 text-white">
          <div class="absolute inset-y-0 right-0 left-[calc((100vw-100%)/-2)] -z-10 bg-petrol"></div>

          <x-headings.h1 size="lg" class="mb-20 md:mb-24 xl:mb-28">
            Wohnungen mit Charakter und Gewerberäumen
          </x-headings.h1>

          <div class="max-w-4xl space-y-16 md:space-y-24 xl:space-y-36">
            <div>
              <x-headings.h2 size="sm" class="text-sand">
                Erstvermietung
              </x-headings.h2>
              <p>An der Bassersdorferstrasse in Baltenswil entsteht ein Ensemble aus mehreren sorgfältig 
              gestalteten Neubauten mit insgesamt 34 Mietwohnungen sowie zwei Gewerberäumen im Erdgeschoss. Die 2.5- bis 4.5-Zimmerwohnungen verfügen über grosszügige Aussenräume und bestechen durch eine moderne, aber wohnliche Architektur.</p>
              <p class="text-sm md:text-lg xl:text-xl">
                <strong>Etappe 1: Herbst 2027</strong><br>
                <strong>Etappe 2: Frühling/Sommer 2028</strong>
              </p>
            </div>
            <div>
              <x-headings.h2 size="sm" class="text-sand">
                Interesse geweckt?
              </x-headings.h2>
              <p>Gerne senden wir Ihnen weitere Informationen, sobald die Vermietung startet.<br>Bitte füllen Sie dazu das Kontaktformular aus.</p>
            </div>
          </div>
          
        </div>
      </div>
    </section>

    <livewire:contact-form />

    <x-map />

	</main>

	<x-layouts.footer />
</x-layouts.app>
