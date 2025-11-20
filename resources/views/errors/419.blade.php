<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="3;url={{ url('/') }}">
    <title>419 - Sesi Telah Berakhir</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        setTimeout(function() {
            window.location.href = '{{ url('/') }}';
        }, 3000);
    </script>
</head>
<body class="bg-gradient-to-br from-orange-50 via-white to-red-50 min-h-screen flex items-center justify-center p-4 sm:p-6">

    <div class="max-w-2xl w-full text-center">

        <!-- 419 BIG TEXT -->
        <h1 class="text-7xl sm:text-8xl md:text-9xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-orange-600 to-red-600 mb-6 animate-pulse">
            419
        </h1>

        <!-- ICON -->
        <div class="mb-8 flex justify-center">
            <div class="p-4 bg-red-100/70 rounded-full shadow-sm">
                <svg class="h-20 w-20 sm:h-24 sm:w-24 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6"
                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                </svg>
            </div>
        </div>

        <!-- MESSAGE TEXT -->
        <div class="px-4 mb-8">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-800 mb-3">
                Sesi Telah Berakhir
            </h2>
            <p class="text-base sm:text-lg text-gray-600 leading-relaxed max-w-xl mx-auto">
                Maaf, sesi Anda telah berakhir karena tidak aktif terlalu lama. Silakan muat ulang halaman dan coba lagi.
            </p>
        </div>

        <!-- INFORMATION BOX -->
        <div class="px-4 mb-8">
            <div class="bg-orange-50 border-2 border-orange-200 rounded-lg p-4 sm:p-5 max-w-lg mx-auto">
                <div class="flex items-start text-left">
                    <div class="flex-shrink-0 mr-3 mt-0.5">
                        <div class="w-6 h-6 rounded-full bg-orange-600 flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                    </div>
                    <div>
                        <p class="text-sm sm:text-base text-gray-800">
                            <strong class="font-semibold">Mengapa ini terjadi?</strong><br>
                            <span class="text-gray-600">Untuk keamanan, sesi akan otomatis berakhir setelah periode tidak aktif tertentu.</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- ACTION BUTTONS -->
        <div class="flex flex-col sm:flex-row gap-3 justify-center max-w-lg mx-auto px-4">

            <!-- RELOAD BUTTON -->
            <button onclick="window.location.reload()"
                    class="w-full sm:w-auto inline-flex items-center justify-center px-5 py-2.5 rounded-lg shadow-md
                           bg-white text-gray-900 font-semibold border-2 border-orange-600 text-sm
                           transition-all duration-200 hover:bg-orange-600 hover:text-white hover:shadow-xl hover:scale-[1.03]">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                </svg>
                Muat Ulang Halaman
            </button>

            <!-- HOME BUTTON -->
            <a href="{{ url('/') }}"
               class="w-full sm:w-auto inline-flex items-center justify-center px-5 py-2.5
                      bg-white border border-gray-300 text-gray-700 font-semibold rounded-lg shadow text-sm
                      hover:bg-gray-50 hover:shadow-lg transition-all duration-200 hover:scale-[1.03]">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                Kembali ke Halaman Utama
            </a>
        </div>

        <!-- SECURITY NOTE -->
        <div class="mt-10 px-4">
            <div class="inline-block bg-white px-6 py-3 rounded-lg shadow-sm border border-gray-200">
                <p class="text-xs sm:text-sm text-gray-500">
                    Fitur keamanan ini melindungi akun Anda dari akses yang tidak sah.
                </p>
            </div>
        </div>

    </div>

    <!-- Soft Background Blobs -->
    <div class="fixed inset-0 pointer-events-none -z-10 overflow-hidden">
        <div class="absolute top-1/4 left-1/4 w-56 h-56 bg-orange-200 rounded-full mix-blend-multiply blur-2xl opacity-25 animate-blob"></div>
        <div class="absolute top-1/3 right-1/4 w-56 h-56 bg-red-200 rounded-full mix-blend-multiply blur-2xl opacity-25 animate-blob animation-delay-2000"></div>
        <div class="absolute bottom-1/4 left-1/3 w-56 h-56 bg-yellow-200 rounded-full mix-blend-multiply blur-2xl opacity-25 animate-blob animation-delay-4000"></div>
    </div>

    <style>
        @keyframes blob {
            0%, 100% { transform: translate(0, 0) scale(1); }
            33% { transform: translate(25px, -35px) scale(1.08); }
            66% { transform: translate(-20px, 30px) scale(0.93); }
        }
        .animate-blob { animation: blob 7s infinite; }
        .animation-delay-2000 { animation-delay: 2s; }
        .animation-delay-4000 { animation-delay: 4s; }
    </style>

</body>
</html>