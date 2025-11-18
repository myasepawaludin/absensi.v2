<footer class="py-4 mt-auto border-t border-gray-200 dark:border-gray-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @php
            $isCenteredPage = in_array(request()->route()->getName(), ['login', 'register', 'profile.edit', 'profile.show']);
        @endphp

        <!-- Mobile Layout -->
        <div class="flex flex-col items-center gap-3 sm:hidden">
            <!-- Copyright -->
            <p class="text-sm text-gray-700 dark:text-gray-300 text-center">
                &copy; {{ date('Y') }} SMK BINUSA. All rights reserved.
            </p>
            
            <!-- Developer Credit -->
            <p class="text-xs text-gray-700 dark:text-gray-300 italic flex items-center gap-1.5">
                <span>Dev with</span>
                <svg class="w-3 h-3 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
                </svg>
                <span>Asep Awaludin</span>
            </p>
        </div>

        <!-- Desktop Layout -->
        <div class="hidden sm:{{ $isCenteredPage ? 'flex flex-col' : 'grid grid-cols-3' }} items-center gap-{{ $isCenteredPage ? '3' : '4' }}">
            @if(!$isCenteredPage)
                <!-- Empty spacer - Kiri -->
                <div></div>
            @endif

            <!-- Copyright - Tengah -->
            <p class="text-sm text-gray-700 dark:text-gray-300 text-center">
                &copy; {{ date('Y') }} SMK BINUSA. All rights reserved.
            </p>

            <!-- Developer Credit -->
            <div class="{{ $isCenteredPage ? '' : 'flex justify-end' }}">
                <p class="text-xs text-gray-700 dark:text-gray-300 italic flex items-center gap-1.5">
                    <span>Dev with</span>
                    <svg class="w-3 h-3 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
                    </svg>
                    <span>Asep Awaludin</span>
                </p>
            </div>
        </div>
    </div>
</footer>