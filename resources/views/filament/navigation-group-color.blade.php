<style>
    /* Override warna default NavigationGroup agar mengikuti mode tampilan */
    .fi-sidebar-group-label {
        color: rgb(var(--gray-700)) !important;
    }

    /* Dark mode */
    .dark .fi-sidebar-group-label {
        color: rgb(var(--gray-200)) !important;
    }

    /* Hover effect untuk NavigationGroup */
    .fi-sidebar-group-button:hover .fi-sidebar-group-label {
        color: rgb(var(--primary-600)) !important;
    }

    .dark .fi-sidebar-group-button:hover .fi-sidebar-group-label {
        color: rgb(var(--primary-400)) !important;
    }
</style>
