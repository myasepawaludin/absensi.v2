<x-filament-panels::page>
    <div class="custom-profile-page">
        <x-filament-panels::form wire:submit="save">
            {{ $this->form }}

            <x-filament-panels::form.actions
                :actions="$this->getCachedFormActions()"
                :full-width="$this->hasFullWidthFormActions()"
            />
        </x-filament-panels::form>
    </div>
</x-filament-panels::page>