<style>
    /* Ganti icon chevron dengan icon modern sidebar */

    /* Sembunyikan icon chevron default */
    .fi-sidebar-collapse-button svg,
    button[x-on\:click*="toggleSidebarCollapse"] svg {
        display: none !important;
    }

    /* Target button collapse sidebar */
    .fi-sidebar-collapse-button,
    button[x-on\:click*="toggleSidebarCollapse"] {
        position: relative !important;
        transition: all 0.3s ease-in-out !important;
        border-radius: 0.5rem !important;
        width: 2.5rem !important;
        height: 2.5rem !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
    }

    /* Buat custom icon dengan pseudo elements - 3 garis horizontal (hamburger style) */
    .fi-sidebar-collapse-button::before,
    button[x-on\:click*="toggleSidebarCollapse"]::before {
        content: '' !important;
        position: absolute !important;
        width: 1.25rem !important;
        height: 0.125rem !important;
        background-color: rgb(var(--gray-700)) !important;
        border-radius: 2px !important;
        transition: all 0.3s ease-in-out !important;
        box-shadow:
            0 -0.375rem 0 rgb(var(--gray-700)),
            0 0.375rem 0 rgb(var(--gray-700)) !important;
    }

    .dark .fi-sidebar-collapse-button::before,
    .dark button[x-on\:click*="toggleSidebarCollapse"]::before {
        background-color: rgb(var(--gray-200)) !important;
        box-shadow:
            0 -0.375rem 0 rgb(var(--gray-200)),
            0 0.375rem 0 rgb(var(--gray-200)) !important;
    }

    /* Hover effect untuk button */
    .fi-sidebar-collapse-button:hover,
    button[x-on\:click*="toggleSidebarCollapse"]:hover {
        background-color: rgb(var(--primary-50)) !important;
        transform: scale(1.08) !important;
    }

    .dark .fi-sidebar-collapse-button:hover,
    .dark button[x-on\:click*="toggleSidebarCollapse"]:hover {
        background-color: rgb(var(--primary-900)) !important;
    }

    /* Hover state - Icon berubah warna menjadi primary */
    .fi-sidebar-collapse-button:hover::before,
    button[x-on\:click*="toggleSidebarCollapse"]:hover::before {
        background-color: rgb(var(--primary-600)) !important;
        box-shadow:
            0 -0.375rem 0 rgb(var(--primary-600)),
            0 0.375rem 0 rgb(var(--primary-600)) !important;
        width: 1.35rem !important;
    }

    .dark .fi-sidebar-collapse-button:hover::before,
    .dark button[x-on\:click*="toggleSidebarCollapse"]:hover::before {
        background-color: rgb(var(--primary-400)) !important;
        box-shadow:
            0 -0.375rem 0 rgb(var(--primary-400)),
            0 0.375rem 0 rgb(var(--primary-400)) !important;
    }

    /* Border dan shadow untuk button */
    .fi-sidebar-collapse-button,
    button[x-on\:click*="toggleSidebarCollapse"] {
        border: 1.5px solid rgb(var(--gray-300)) !important;
        box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.1) !important;
    }

    .dark .fi-sidebar-collapse-button,
    .dark button[x-on\:click*="toggleSidebarCollapse"] {
        border-color: rgb(var(--gray-600)) !important;
        box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.3) !important;
    }

    /* Active/pressed state */
    .fi-sidebar-collapse-button:active,
    button[x-on\:click*="toggleSidebarCollapse"]:active {
        transform: scale(0.95) !important;
    }

    /* Hover border yang lebih terang */
    .fi-sidebar-collapse-button:hover,
    button[x-on\:click*="toggleSidebarCollapse"]:hover {
        border-color: rgb(var(--primary-300)) !important;
    }

    .dark .fi-sidebar-collapse-button:hover,
    .dark button[x-on\:click*="toggleSidebarCollapse"]:hover {
        border-color: rgb(var(--primary-600)) !important;
    }
</style>
