<style>
    /* Perbaiki icon collapse/expand sidebar - Chevron Button */

    /* Target button collapse sidebar */
    .fi-sidebar-collapse-button,
    button[x-on\:click*="toggleSidebarCollapse"] {
        transition: all 0.25s ease-in-out !important;
        border-radius: 0.5rem !important;
    }

    /* Hover effect untuk button */
    .fi-sidebar-collapse-button:hover,
    button[x-on\:click*="toggleSidebarCollapse"]:hover {
        background-color: rgb(var(--primary-50)) !important;
        transform: translateX(2px) scale(1.05) !important;
    }

    .dark .fi-sidebar-collapse-button:hover,
    .dark button[x-on\:click*="toggleSidebarCollapse"]:hover {
        background-color: rgb(var(--primary-900)) !important;
    }

    /* Icon SVG Chevron - Perbesar dan pertebal */
    .fi-icon-btn-icon,
    button[x-on\:click*="toggleSidebarCollapse"] svg {
        width: 1.5rem !important;
        height: 1.5rem !important;
        stroke-width: 3 !important;
        color: rgb(var(--gray-700)) !important;
        transition: all 0.25s ease-in-out !important;
    }

    .dark .fi-icon-btn-icon,
    .dark button[x-on\:click*="toggleSidebarCollapse"] svg {
        color: rgb(var(--gray-200)) !important;
    }

    /* Hover state - Icon berubah warna dan lebih tebal */
    .fi-sidebar-collapse-button:hover .fi-icon-btn-icon,
    button[x-on\:click*="toggleSidebarCollapse"]:hover svg {
        color: rgb(var(--primary-600)) !important;
        stroke-width: 3.5 !important;
        transform: translateX(3px) !important;
    }

    .dark .fi-sidebar-collapse-button:hover .fi-icon-btn-icon,
    .dark button[x-on\:click*="toggleSidebarCollapse"]:hover svg {
        color: rgb(var(--primary-400)) !important;
    }

    /* Border dan shadow untuk button */
    .fi-sidebar-collapse-button,
    button[x-on\:click*="toggleSidebarCollapse"] {
        border: 1.5px solid rgb(var(--gray-300)) !important;
        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.08) !important;
    }

    .dark .fi-sidebar-collapse-button,
    .dark button[x-on\:click*="toggleSidebarCollapse"] {
        border-color: rgb(var(--gray-600)) !important;
        box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2) !important;
    }

    /* Active/pressed state */
    .fi-sidebar-collapse-button:active,
    button[x-on\:click*="toggleSidebarCollapse"]:active {
        transform: scale(0.95) !important;
    }

    /* Path chevron - rounded edges */
    .fi-icon-btn-icon path,
    button[x-on\:click*="toggleSidebarCollapse"] svg path {
        stroke-linecap: round !important;
        stroke-linejoin: round !important;
    }
</style>
