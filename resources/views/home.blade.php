<x-layouts.app>
	<x-layouts.header />

	<main class="">

    <section class="relative -mt-40 md:-mt-60 xl:-mt-80 z-20">
      <div class="mx-auto w-full max-w-6xl px-20">
        <div class="relative pr-20 pt-20 pb-28 md:pt-32 md:pb-40 xl:pt-40 xl:pb-48 text-white">

          <div class="absolute inset-y-0 right-0 left-[calc((100vw-100%)/-2)] -z-10 bg-ink"></div>

          <h1 class="mb-20 md:mb-24 xl:mb-28 font-condensed text-[32px] uppercase md:text-[48px] xl:text-[64px]">
            Wohnungen mit Charakter
          </h1>

          <div class="max-w-3xl space-y-16 md:space-y-24 xl:space-y-36">
            <div>
              <h2 class="mb-2 md:mb-4 xl:mb-6 font-condensed text-[22px] md:text-[30px] xl:text-[36px] uppercase text-sage">
                Erstvermietung ab Frühling 2027
              </h2>
              <p>An der Bassersdorferstrasse in Baltenswil entsteht ein Ensemble aus mehreren sorgfältig gestalteten Neubauten mit insgesamt 34 Mietwohnungen sowie zwei Gewerberäumen im Erdgeschoss. Die 2.5- bis 4.5-Zimmerwohnungen verfügen über grosszügige Aussenräume und bestechen durch eine moderne, aber wohnliche Architektur.</p>
            </div>

            <div>
              <h2 class="mb-6 font-condensed text-[22px] uppercase text-sage md:text-[30px] xl:text-[36px]">
                Interessiert geweckt?
              </h2>
              <p>
                Gerne senden wir Ihnen weitere Informationen, sobald die Vermietung startet.<br>
                Bitte füllen Sie dazu das Kontaktformular aus.
              </p>
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
