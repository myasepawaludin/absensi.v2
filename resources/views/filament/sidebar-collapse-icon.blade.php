<style>
    /* Perbaiki icon collapse/expand sidebar */

    /* Icon collapse button styling */
    [x-data*="collapsedSidebarWidth"] button[type="button"] {
        transition: all 0.2s ease-in-out;
    }

    /* Hover effect untuk button */
    [x-data*="collapsedSidebarWidth"] button[type="button"]:hover {
        background-color: rgb(var(--primary-50)) !important;
        transform: scale(1.05);
    }

    .dark [x-data*="collapsedSidebarWidth"] button[type="button"]:hover {
        background-color: rgb(var(--primary-900)) !important;
    }

    /* Icon SVG styling - perbesar dan perjelas */
    [x-data*="collapsedSidebarWidth"] button[type="button"] svg {
        width: 1.25rem !important;
        height: 1.25rem !important;
        stroke-width: 2.5 !important;
        color: rgb(var(--gray-600)) !important;
    }

    .dark [x-data*="collapsedSidebarWidth"] button[type="button"] svg {
        color: rgb(var(--gray-300)) !important;
    }

    /* Hover state untuk icon */
    [x-data*="collapsedSidebarWidth"] button[type="button"]:hover svg {
        color: rgb(var(--primary-600)) !important;
        stroke-width: 2.8 !important;
    }

    .dark [x-data*="collapsedSidebarWidth"] button[type="button"]:hover svg {
        color: rgb(var(--primary-400)) !important;
    }

    /* Border dan shadow untuk button */
    [x-data*="collapsedSidebarWidth"] button[type="button"] {
        border: 1px solid rgb(var(--gray-200)) !important;
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05) !important;
    }

    .dark [x-data*="collapsedSidebarWidth"] button[type="button"] {
        border-color: rgb(var(--gray-700)) !important;
    }

    /* Active/pressed state */
    [x-data*="collapsedSidebarWidth"] button[type="button"]:active {
        transform: scale(0.98);
    }
</style>
