<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404 - Halaman Tidak Ditemukan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-50 via-white to-purple-50 min-h-screen flex items-center justify-center p-4 sm:p-6">

    <div class="max-w-2xl w-full text-center">

        <!-- 404 BIG TEXT -->
        <h1 class="text-7xl sm:text-8xl md:text-9xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600 mb-6 animate-pulse">
            404
        </h1>

        <!-- ICON -->
        <div class="mb-8 flex justify-center">
            <div class="p-4 bg-blue-100/70 rounded-full shadow-sm">
                <svg class="h-20 w-20 sm:h-24 sm:w-24 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6"
                        d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
        </div>

        <!-- MESSAGE TEXT -->
        <div class="px-4 mb-10">
            <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-gray-800 mb-3">
                Halaman Tidak Ditemukan
            </h2>
            <p class="text-base sm:text-lg text-gray-600 leading-relaxed max-w-xl mx-auto">
                Maaf, halaman yang Anda cari tidak dapat ditemukan. Halaman mungkin telah dipindahkan atau tidak ada.
            </p>
        </div>

        <!-- ACTION BUTTONS -->
        <div class="flex flex-col sm:flex-row gap-3 justify-center max-w-lg mx-auto px-4">

            <!-- HOME BUTTON (PUTIH DENGAN TEXT HITAM) -->
            <a href="{{ url('/') }}"
               class="w-full sm:w-auto inline-flex items-center justify-center px-5 py-2.5 rounded-lg shadow-md
                      bg-white text-gray-900 font-semibold border-2 border-gray-900 text-sm
                      transition-all duration-200 hover:bg-gray-900 hover:text-white hover:shadow-xl hover:scale-[1.03]">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                Kembali ke Halaman Utama
            </a>

            <!-- BACK BUTTON -->
            <button onclick="window.history.back()"
                    class="w-full sm:w-auto inline-flex items-center justify-center px-5 py-2.5
                           bg-white border border-gray-300 text-gray-700 font-semibold rounded-lg shadow text-sm
                           hover:bg-gray-50 hover:shadow-lg transition-all duration-200 hover:scale-[1.03]">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Kembali
            </button>
        </div>

        <!-- HELP TEXT -->
        <div class="mt-10 px-4">
            <div class="inline-block bg-white px-6 py-3 rounded-lg shadow-sm border border-gray-200">
                <p class="text-xs sm:text-sm text-gray-500">
                    Jika Anda yakin ini adalah kesalahan, silakan hubungi administrator.
                </p>
            </div>
        </div>

    </div>

    <!-- Soft Background Blobs -->
    <div class="fixed inset-0 pointer-events-none -z-10 overflow-hidden">
        <div class="absolute top-1/4 left-1/4 w-56 h-56 bg-blue-200 rounded-full mix-blend-multiply blur-2xl opacity-25 animate-blob"></div>
        <div class="absolute top-1/3 right-1/4 w-56 h-56 bg-purple-200 rounded-full mix-blend-multiply blur-2xl opacity-25 animate-blob animation-delay-2000"></div>
        <div class="absolute bottom-1/4 left-1/3 w-56 h-56 bg-pink-200 rounded-full mix-blend-multiply blur-2xl opacity-25 animate-blob animation-delay-4000"></div>
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