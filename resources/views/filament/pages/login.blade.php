<x-filament-panels::page.simple>
    <style>
        .fi-simple-main {
            max-width: 400px !important;
        }

        .fi-simple-page {
            padding: 1rem !important;
        }

        @media (min-width: 768px) {
            .fi-simple-main {
                max-width: 380px !important;
            }
        }

        .fi-form-component-container {
            margin-bottom: 0.75rem !important;
        }

        .fi-input-wrp {
            padding: 0.5rem !important;
        }

        .fi-btn {
            padding: 0.5rem 1rem !important;
        }
    </style>

    <script>
        (function() {
            'use strict';

            // Fungsi untuk memuat email dari localStorage
            function loadSavedEmail() {
                const savedEmail = localStorage.getItem('remembered_email');
                const rememberMe = localStorage.getItem('remember_me');

                if (savedEmail && rememberMe === 'true') {
                    setTimeout(() => {
                        const emailInput = document.querySelector('input[type="email"]');
                        const rememberCheckbox = document.querySelector('input[type="checkbox"]');

                        if (emailInput) {
                            emailInput.value = savedEmail;
                            emailInput.dispatchEvent(new Event('input', { bubbles: true }));
                            emailInput.dispatchEvent(new Event('change', { bubbles: true }));
                        }

                        if (rememberCheckbox && !rememberCheckbox.checked) {
                            rememberCheckbox.checked = true;
                            rememberCheckbox.dispatchEvent(new Event('change', { bubbles: true }));
                        }
                    }, 150);
                }
            }

            // Fungsi untuk menyimpan email saat submit
            function handleFormSubmit() {
                const emailInput = document.querySelector('input[type="email"]');
                const rememberCheckbox = document.querySelector('input[type="checkbox"]');

                if (emailInput && rememberCheckbox) {
                    if (rememberCheckbox.checked) {
                        localStorage.setItem('remembered_email', emailInput.value);
                        localStorage.setItem('remember_me', 'true');
                    } else {
                        localStorage.removeItem('remembered_email');
                        localStorage.removeItem('remember_me');
                    }
                }
            }

            // Fungsi untuk handle perubahan checkbox
            function handleCheckboxChange(event) {
                if (event.target.type === 'checkbox') {
                    if (!event.target.checked) {
                        localStorage.removeItem('remembered_email');
                        localStorage.removeItem('remember_me');
                    }
                }
            }

            // Event listener saat DOM ready
            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', loadSavedEmail);
            } else {
                loadSavedEmail();
            }

            // Event listener untuk Livewire navigation
            document.addEventListener('livewire:navigated', loadSavedEmail);

            // Event listener untuk form submit
            document.addEventListener('submit', handleFormSubmit, true);

            // Event listener untuk checkbox change
            document.addEventListener('change', handleCheckboxChange, true);
        })();
    </script>

    @if (filament()->hasLogin())
        <x-slot name="heading">
            {{ __('filament-panels::pages/auth/login.heading') }}
        </x-slot>
    @endif

    {{ \Filament\Support\Facades\FilamentView::renderHook('panels::auth.login.form.before') }}

    <x-filament-panels::form wire:submit="authenticate">
        {{ $this->form }}

        <x-filament-panels::form.actions
            :actions="$this->getCachedFormActions()"
            :full-width="$this->hasFullWidthFormActions()"
        />
    </x-filament-panels::form>

    {{ \Filament\Support\Facades\FilamentView::renderHook('panels::auth.login.form.after') }}
</x-filament-panels::page.simple>