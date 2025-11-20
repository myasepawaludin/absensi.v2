<style>
    /* Override warna default NavigationGroup agar mengikuti mode tampilan */
    .fi-sidebar-group-label {
        color: rgb(var(--gray-700)) !important;
    }

    /* Dark mode */
    .dark .fi-sidebar-group-label {
        color: rgb(var(--gray-200)) !important;
    }

    /* Membuat jarak menu SANGAT kompak - hilangkan semua spacing berlebih */
    .fi-sidebar-nav {
        gap: 0 !important;
        display: flex !important;
        flex-direction: column !important;
    }

    .fi-sidebar-group {
        gap: 0 !important;
        margin: 0 !important;
        padding: 0 !important;
    }

    .fi-sidebar-group + .fi-sidebar-group {
        margin-top: 0 !important;
        padding-top: 0 !important;
    }

    .fi-sidebar-item {
        margin: 0 !important;
        padding-top: 0.125rem !important;
        padding-bottom: 0.125rem !important;
    }

    .fi-sidebar-group-items {
        gap: 0 !important;
        margin: 0 !important;
        padding: 0 !important;
    }

    /* Hilangkan padding di navigation items */
    nav.fi-sidebar-nav {
        padding-top: 0 !important;
        padding-bottom: 0 !important;
    }

    /* Kompakkan navigation item wrapper */
    .fi-sidebar-item-button {
        margin: 0 !important;
    }
</style>
