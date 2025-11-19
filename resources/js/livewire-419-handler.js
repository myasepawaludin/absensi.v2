/**
 * Custom Livewire 419 Error Handler
 *
 * Menampilkan modal custom yang cantik untuk error 419 (Page Expired)
 * menggantikan popup default Livewire
 */

// Fungsi untuk membuat dan menampilkan modal custom
function showCustom419Modal() {
    // Hapus modal lama jika ada
    const existingModal = document.getElementById('custom-419-modal');
    if (existingModal) {
        existingModal.remove();
    }

    // Buat modal HTML
    const modalHTML = `
        <div id="custom-419-modal" class="fixed inset-0 z-[9999] flex items-center justify-center p-4 animate-fadeIn">
            <!-- Backdrop -->
            <div class="absolute inset-0 bg-black/50 backdrop-blur-sm animate-fadeIn"></div>

            <!-- Modal Content -->
            <div class="relative bg-white dark:bg-gray-800 rounded-2xl shadow-2xl max-w-md w-full p-8 animate-slideUp">
                <!-- Icon -->
                <div class="flex justify-center mb-6">
                    <div class="w-20 h-20 bg-gradient-to-br from-amber-400 to-orange-500 rounded-full flex items-center justify-center shadow-lg animate-bounce-slow">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>

                <!-- Title -->
                <h2 class="text-2xl font-bold text-gray-900 dark:text-white text-center mb-3">
                    Sesi Telah Berakhir
                </h2>

                <!-- Message -->
                <p class="text-gray-600 dark:text-gray-300 text-center mb-6 leading-relaxed">
                    Halaman ini telah kedaluwarsa karena Anda sudah tidak aktif terlalu lama.
                    Silakan muat ulang halaman untuk melanjutkan.
                </p>

                <!-- Buttons -->
                <div class="flex flex-col gap-3">
                    <button
                        onclick="window.location.reload()"
                        class="w-full px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl transform hover:scale-[1.02] transition-all duration-200"
                    >
                        🔄 Muat Ulang Halaman
                    </button>

                    <button
                        onclick="document.getElementById('custom-419-modal').remove(); document.body.style.overflow = '';"
                        class="w-full px-6 py-3 bg-gray-100 dark:bg-gray-700 hover:bg-gray-200 dark:hover:bg-gray-600 text-gray-700 dark:text-gray-200 font-medium rounded-xl transition-all duration-200"
                    >
                        Tutup
                    </button>
                </div>

                <!-- Footer -->
                <div class="mt-6 pt-4 border-t border-gray-200 dark:border-gray-700">
                    <p class="text-xs text-gray-500 dark:text-gray-400 text-center">
                        Error Code: <span class="font-mono font-semibold">419</span>
                    </p>
                </div>
            </div>
        </div>
    `;

    // Inject CSS untuk animasi
    if (!document.getElementById('custom-419-modal-styles')) {
        const styleElement = document.createElement('style');
        styleElement.id = 'custom-419-modal-styles';
        styleElement.textContent = `
            @keyframes fadeIn {
                from { opacity: 0; }
                to { opacity: 1; }
            }

            @keyframes slideUp {
                from {
                    opacity: 0;
                    transform: translateY(20px) scale(0.95);
                }
                to {
                    opacity: 1;
                    transform: translateY(0) scale(1);
                }
            }

            @keyframes bounceSlow {
                0%, 100% { transform: translateY(0); }
                50% { transform: translateY(-10px); }
            }

            .animate-fadeIn {
                animation: fadeIn 0.3s ease-out;
            }

            .animate-slideUp {
                animation: slideUp 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            }

            .animate-bounce-slow {
                animation: bounceSlow 2s ease-in-out infinite;
            }
        `;
        document.head.appendChild(styleElement);
    }

    // Tambahkan modal ke body
    document.body.insertAdjacentHTML('beforeend', modalHTML);

    // Prevent body scroll
    document.body.style.overflow = 'hidden';

    // Auto-reload setelah 10 detik jika user tidak melakukan apa-apa
    setTimeout(() => {
        const modal = document.getElementById('custom-419-modal');
        if (modal) {
            window.location.reload();
        }
    }, 10000);
}

// Override window.confirm untuk mencegah popup default
let confirmOverridden = false;
const originalConfirm = window.confirm;

function overrideConfirm() {
    if (!confirmOverridden) {
        confirmOverridden = true;
        window.confirm = function(message) {
            // Jika pesan mengandung "expired" atau "refresh", block dan tampilkan modal custom
            if (message && (message.toLowerCase().includes('expired') || message.toLowerCase().includes('refresh'))) {
                showCustom419Modal();
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

    // Hook ke Livewire request lifecycle - Method 1: menggunakan fail
    Livewire.hook('request', ({ fail }) => {
        fail(({ status, preventDefault }) => {
            // Jika error 419 (Page Expired / CSRF Token Mismatch)
            if (status === 419) {
                // Prevent default behavior (popup konfirmasi)
                preventDefault();

                // Tampilkan modal custom
                showCustom419Modal();
            }
        });
    });

    // Hook ke commit lifecycle - Method 2: sebagai backup
    Livewire.hook('commit', ({ fail }) => {
        fail(({ status, preventDefault }) => {
            if (status === 419) {
                preventDefault();
                showCustom419Modal();
            }
        });
    });

    // Hook ke exception - Method 3: catch semua exception
    Livewire.hook('exception', ({ preventDefault }) => {
        preventDefault();
        showCustom419Modal();
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
                            showCustom419Modal();
                        }
                    });
                });

                Livewire.hook('commit', ({ fail }) => {
                    fail(({ status, preventDefault }) => {
                        if (status === 419) {
                            preventDefault();
                            showCustom419Modal();
                        }
                    });
                });

                Livewire.hook('exception', ({ preventDefault }) => {
                    preventDefault();
                    showCustom419Modal();
                });
            } catch (error) {
                console.warn('Failed to initialize Livewire 419 handler:', error);
            }
        }
    }, 100);
});

// Intercept semua dialog confirm sebagai fallback terakhir
window.addEventListener('beforeunload', (e) => {
    overrideConfirm();
});