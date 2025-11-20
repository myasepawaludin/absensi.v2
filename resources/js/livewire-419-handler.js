let confirmOverridden = false;
const originalConfirm = window.confirm;

function overrideConfirm() {
    if (!confirmOverridden) {
        confirmOverridden = true;
        window.confirm = function(message) {
            // Jika pesan mengandung "expired" atau "refresh", block popup dan langsung reload
            if (message && (message.toLowerCase().includes('expired') || message.toLowerCase().includes('refresh'))) {
                // Langsung reload halaman tanpa popup
                window.location.reload();
                return false; // Prevent default action
            }
            // Untuk confirm lain, gunakan original
            return originalConfirm.call(this, message);
        };
    }
}

// Untuk Livewire v3 (digunakan oleh Filament v3)
document.addEventListener('livewire:init', () => {
    // Override confirm sebelum Livewire menggunakannya
    overrideConfirm();

    // Hook ke Livewire request lifecycle
    Livewire.hook('request', ({ fail }) => {
        fail(({ status, preventDefault }) => {
            // Jika error 419 (Page Expired / CSRF Token Mismatch)
            if (status === 419) {
                // Prevent default behavior (popup konfirmasi)
                preventDefault();

                // Langsung reload halaman tanpa popup
                // Laravel akan menampilkan halaman 419.blade.php
                window.location.reload();
            }
        });
    });

    // Hook ke commit lifecycle sebagai backup
    Livewire.hook('commit', ({ fail }) => {
        fail(({ status, preventDefault }) => {
            if (status === 419) {
                preventDefault();
                window.location.reload();
            }
        });
    });

    // Hook ke exception sebagai backup
    Livewire.hook('exception', ({ preventDefault }) => {
        preventDefault();
        window.location.reload();
    });
});

// Backup: Handle jika event livewire:init tidak terdeteksi
window.addEventListener('DOMContentLoaded', () => {
    // Override confirm
    overrideConfirm();

    // Tunggu beberapa saat untuk memastikan Livewire sudah loaded
    setTimeout(() => {
        if (window.Livewire && !window.__livewire419HandlerInitialized) {
            window.__livewire419HandlerInitialized = true;

            try {
                Livewire.hook('request', ({ fail }) => {
                    fail(({ status, preventDefault }) => {
                        if (status === 419) {
                            preventDefault();
                            window.location.reload();
                        }
                    });
                });

                Livewire.hook('commit', ({ fail }) => {
                    fail(({ status, preventDefault }) => {
                        if (status === 419) {
                            preventDefault();
                            window.location.reload();
                        }
                    });
                });

                Livewire.hook('exception', ({ preventDefault }) => {
                    preventDefault();
                    window.location.reload();
                });
            } catch (error) {
                console.warn('Failed to initialize Livewire 419 handler:', error);
            }
        }
    }, 100);
});