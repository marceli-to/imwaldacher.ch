<?php

use App\Mail\RegistrationConfirmation;
use App\Models\Registration;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

new class extends Component
{
	/** @var array<int,string> */
	public array $apartment_sizes = [];

	public string $first_name = '';

	public string $last_name = '';

	public string $street = '';

	public string $zip_city = '';

	public string $email = '';

	public string $phone = '';

	public bool $privacy = false;

	public string $turnstileToken = '';

	public bool $submitted = false;

	/** Options offered, as value => label, in display order. */
	public array $sizes = [
		'2.5' => '2.5-Zimmerwohnung',
		'3.5' => '3.5-Zimmerwohnung',
		'4.5' => '4.5-Zimmerwohnung',
		'gewerbe' => 'Gewerbeflächen',
	];

	/** @return array<string,mixed> */
	protected function rules(): array
	{
		return [
			'apartment_sizes' => ['required', 'array', 'min:1'],
			'first_name' => ['required', 'string', 'max:255'],
			'last_name' => ['required', 'string', 'max:255'],
			'street' => ['required', 'string', 'max:255'],
			'zip_city' => ['required', 'string', 'max:255'],
			'email' => ['required', 'email', 'max:255'],
			'phone' => ['nullable', 'string', 'max:255'],
			'privacy' => ['accepted'],
		];
	}

	public function submit(): void
	{
		$this->validate();

		if (! $this->verifyTurnstile()) {
			$this->addError('turnstileToken', __('Die Spam-Prüfung ist fehlgeschlagen. Bitte versuchen Sie es erneut.'));
			$this->dispatch('turnstile:reset');

			return;
		}

		Registration::create([
			'apartment_sizes' => $this->apartment_sizes,
			'first_name' => $this->first_name,
			'last_name' => $this->last_name,
			'street' => $this->street,
			'zip_city' => $this->zip_city,
			'email' => $this->email,
			'phone' => $this->phone ?: null,
		]);

		Mail::to($this->email)->send(new RegistrationConfirmation);

		$this->reset([
			'apartment_sizes', 'first_name', 'last_name',
			'street', 'zip_city', 'email', 'phone', 'privacy', 'turnstileToken',
		]);

		$this->submitted = true;
	}

	private function verifyTurnstile(): bool
	{
		$secret = config('services.turnstile.secret_key');

		// No secret configured (e.g. local dev before keys arrive) → skip the check.
		if (blank($secret)) {
			return true;
		}

		if (blank($this->turnstileToken)) {
			return false;
		}

		$response = Http::asForm()->post('https://challenges.cloudflare.com/turnstile/v0/siteverify', [
			'secret' => $secret,
			'response' => $this->turnstileToken,
			'remoteip' => request()->ip(),
		]);

		return $response->json('success') === true;
	}
}; ?>

<x-layouts.section id="kontakt" class="pt-20 pb-28 md:pt-32 md:pb-40 xl:pt-40 xl:pb-48">
  <div>
    @if ($submitted)
      <div
        class="flex flex-col gap-24"
        role="status"
        aria-live="polite">
        <x-headings.h2 size="sm" class="text-petrol">
          Wir haben Ihre Anmeldung erhalten
        </x-headings.h2>
        <p class="text-pretty">
          Vielen Dank für Ihr Interesse. Wir melden uns, sobald die Vermietung startet.
        </p>
      </div>
    @else
      <x-headings.h2 size="lg" class="mb-20 md:mb-24 xl:mb-28 text-petrol">
        Kontaktformular
      </x-headings.h2>

      <form wire:submit="submit" class="mt-16 flex flex-col gap-20 md:gap-24">
        <fieldset>
          <x-headings.h3 size="sm" class="mb-4 md:mb-8 xl:mb-12 text-petrol">
            Ich interessiere mich für (Bitte auswählen)
          </x-headings.h3>
          <div
            x-data
            x-on:change="$el.querySelectorAll('input').forEach((c) => { c.classList.remove('bg-red-300'); c.classList.add('bg-sand'); })"
            class="grid grid-cols-1 gap-x-40 gap-y-8 sm:grid-flow-col sm:grid-cols-2 sm:grid-rows-2 max-w-2xl">
            @foreach ($sizes as $value => $label)
              <x-form.checkbox
                id="size-{{ \Illuminate\Support\Str::slug($value) }}"
                value="{{ $value }}"
                wire:model="apartment_sizes"
                :error="$errors->has('apartment_sizes')">
                {{ $label }}
              </x-form.checkbox>
            @endforeach
          </div>
        </fieldset>

        <div class="grid grid-cols-1 gap-20 md:gap-24 sm:grid-cols-2">
          <x-form.input name="first_name" label="Vorname*" wire:model="first_name" autocomplete="given-name" />
          <x-form.input name="last_name" label="Name*" wire:model="last_name" autocomplete="family-name" />
        </div>

        <div class="grid grid-cols-1 gap-20 md:gap-24 sm:grid-cols-2">
          <x-form.input name="street" label="Strasse/Nr*" wire:model="street" autocomplete="street-address" />
          <x-form.input name="zip_city" label="PLZ/Ort*" wire:model="zip_city" autocomplete="postal-code" />
        </div>

        <div class="grid grid-cols-1 gap-20 md:gap-24 sm:grid-cols-2">
          <x-form.input name="email" label="E-Mail*" type="email" wire:model="email" autocomplete="email" />
          <x-form.input name="phone" label="Telefon" type="tel" wire:model="phone" autocomplete="tel" />
        </div>

        <x-form.checkbox
          id="privacy"
          name="privacy"
          wire:model="privacy"
          multiline
          x-on:change="$el.classList.remove('bg-red-300'); $el.classList.add('bg-sand')"
          :error="$errors->has('privacy')">
          Ich habe die <a href="#" class="hover:underline decoration-1 underline-offset-2">Datenschutzerklärung</a> gelesen und akzeptiere diese.
        </x-form.checkbox>

        {{-- Cloudflare Turnstile runs invisibly (rendered after the form); only its error surfaces here --}}
        @error('turnstileToken')
          <p class="underline">{{ $message }}</p>
        @enderror

        <div>
          <button
            type="submit"
            class="cursor-pointer inline-flex items-center justify-center bg-petrol hover:bg-sand text-sand hover:text-petrol transition-colors px-12 py-8 font-condensed text-lg md:text-2xl xl:text-3xl uppercase tracking-wide disabled:opacity-60"
            wire:loading.attr="disabled"
            wire:target="submit">
            <span wire:loading.remove wire:target="submit">Absenden</span>
            <span wire:loading wire:target="submit">Wird gesendet…</span>
          </button>
        </div>
      </form>

      {{-- Cloudflare Turnstile (Invisible) — no visible UI; runs in the background and feeds the token to Livewire --}}
      @if (filled(config('services.turnstile.site_key')))
        <div
          wire:ignore
          x-data
          x-on:turnstile:reset.window="window.turnstile && $refs.widget.dataset.widgetId && window.turnstile.reset($refs.widget.dataset.widgetId)"
        >
          <div
            x-ref="widget"
            x-init="
              const render = () => {
                $refs.widget.dataset.widgetId = window.turnstile.render($refs.widget, {
                  sitekey: '{{ config('services.turnstile.site_key') }}',
                  callback: (token) => $wire.set('turnstileToken', token),
                  'expired-callback': () => $wire.set('turnstileToken', ''),
                });
              };
              window.turnstile ? render() : document.addEventListener('turnstile:loaded', render, { once: true });
            "
          ></div>
        </div>
      @endif
    @endif
  </div>
</x-layouts.section>

