<style>
    /* Tampilkan username di user menu - Desktop & Mobile */

    /* Desktop - User menu trigger */
    .fi-dropdown-trigger[aria-label*="User"] .fi-dropdown-trigger-label,
    .fi-user-menu-trigger .fi-dropdown-trigger-label {
        display: inline-block !important;
        opacity: 1 !important;
        visibility: visible !important;
    }

    /* Mobile - Tampilkan username di topbar */
    @media (max-width: 1024px) {
        .fi-topbar .fi-dropdown-trigger-label,
        [x-data*="dropdown"] .fi-dropdown-trigger-label {
            display: inline-block !important;
            opacity: 1 !important;
            visibility: visible !important;
            max-width: none !important;
        }
    }

    /* Tablet & Mobile - User avatar button */
    @media (max-width: 768px) {
        .fi-user-menu-trigger .fi-dropdown-trigger-label,
        button[aria-label*="User"] .fi-dropdown-trigger-label {
            display: inline-block !important;
            visibility: visible !important;
            font-size: 0.875rem !important;
            white-space: nowrap !important;
        }
    }

    /* Extra styling untuk memastikan username terlihat di semua ukuran layar */
    .fi-dropdown-trigger-label {
        display: inline-block !important;
        opacity: 1 !important;
    }

    /* Override Filament default yang menyembunyikan text di mobile */
    @media (max-width: 640px) {
        .fi-user-menu-trigger span:not(.fi-dropdown-trigger-icon) {
            display: inline-block !important;
            visibility: visible !important;
        }
    }
</style>
