<style>
    /* Override warna default NavigationGroup agar mengikuti mode tampilan */
    .fi-sidebar-group-label {
        color: rgb(var(--gray-700)) !important;
    }

    /* Dark mode */
    .dark .fi-sidebar-group-label {
        color: rgb(var(--gray-200)) !important;
    }

    /* Membuat jarak menu lebih kompak - hilangkan spacing berlebih */
    .fi-sidebar-nav {
        gap: 0 !important;
    }

    .fi-sidebar-group {
        gap: 0 !important;
        margin-bottom: 0 !important;
        padding-bottom: 0 !important;
    }

    .fi-sidebar-group + .fi-sidebar-group {
        margin-top: 0.25rem !important;
    }

    .fi-sidebar-item {
        margin-bottom: 0.125rem !important;
    }

    .fi-sidebar-group-items {
        gap: 0.125rem !important;
        margin-top: 0.25rem !important;
    }
</style>
