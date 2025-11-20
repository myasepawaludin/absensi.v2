<style>
    /* Icon 3 strip horizontal sederhana untuk sidebar collapse */

    /* Sembunyikan icon chevron default */
    .fi-sidebar-collapse-button svg,
    button[x-on\:click*="toggleSidebarCollapse"] svg {
        display: none !important;
    }

    /* Target button collapse sidebar */
    .fi-sidebar-collapse-button,
    button[x-on\:click*="toggleSidebarCollapse"] {
        position: relative !important;
        transition: all 0.2s ease !important;
        border-radius: 0.5rem !important;
        width: 2.5rem !important;
        height: 2.5rem !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        background: transparent !important;
    }

    /* Buat 3 strip horizontal dengan pseudo element */
    .fi-sidebar-collapse-button::before,
    button[x-on\:click*="toggleSidebarCollapse"]::before {
        content: '' !important;
        position: absolute !important;
        width: 1.25rem !important;
        height: 2px !important;
        background-color: rgb(var(--gray-700)) !important;
        border-radius: 1px !important;
        transition: all 0.2s ease !important;
        box-shadow:
            0 -6px 0 rgb(var(--gray-700)),
            0 6px 0 rgb(var(--gray-700)) !important;
    }

    .dark .fi-sidebar-collapse-button::before,
    .dark button[x-on\:click*="toggleSidebarCollapse"]::before {
        background-color: rgb(var(--gray-200)) !important;
        box-shadow:
            0 -6px 0 rgb(var(--gray-200)),
            0 6px 0 rgb(var(--gray-200)) !important;
    }

    /* Hover effect sederhana - hanya ubah warna */
    .fi-sidebar-collapse-button:hover::before,
    button[x-on\:click*="toggleSidebarCollapse"]:hover::before {
        background-color: rgb(var(--primary-600)) !important;
        box-shadow:
            0 -6px 0 rgb(var(--primary-600)),
            0 6px 0 rgb(var(--primary-600)) !important;
    }

    .dark .fi-sidebar-collapse-button:hover::before,
    .dark button[x-on\:click*="toggleSidebarCollapse"]:hover::before {
        background-color: rgb(var(--primary-400)) !important;
        box-shadow:
            0 -6px 0 rgb(var(--primary-400)),
            0 6px 0 rgb(var(--primary-400)) !important;
    }

    /* Hover background button */
    .fi-sidebar-collapse-button:hover,
    button[x-on\:click*="toggleSidebarCollapse"]:hover {
        background-color: rgb(var(--gray-100)) !important;
    }

    .dark .fi-sidebar-collapse-button:hover,
    .dark button[x-on\:click*="toggleSidebarCollapse"]:hover {
        background-color: rgb(var(--gray-800)) !important;
    }
</style>
