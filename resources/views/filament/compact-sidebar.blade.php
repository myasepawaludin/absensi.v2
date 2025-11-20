<style>
    /**
     * Compact Sidebar - Mengurangi jarak antar menu
     */

    /* Kurangi gap antar navigation items */
    .fi-sidebar-nav {
        gap: 0.25rem !important; /* Default: 0.5rem */
    }

    /* Kurangi gap di dalam navigation list */
    .fi-sidebar-nav > ul {
        gap: 0.25rem !important;
    }

    /* Kurangi padding pada navigation item */
    .fi-sidebar-item {
        padding-top: 0.25rem !important;
        padding-bottom: 0.25rem !important;
    }

    /* Kurangi gap pada navigation group */
    .fi-sidebar-group {
        margin-top: 0.5rem !important;   /* Default: lebih besar */
        margin-bottom: 0.5rem !important;
    }

    /* Kurangi spacing pada group items */
    .fi-sidebar-group-items {
        gap: 0.25rem !important;
        margin-top: 0.25rem !important;
    }

    /* Kurangi padding pada link items */
    .fi-sidebar-item-button,
    .fi-sidebar-item-label {
        padding-top: 0.5rem !important;   /* Default: 0.75rem */
        padding-bottom: 0.5rem !important; /* Default: 0.75rem */
    }

    /* Compact untuk group label/header */
    .fi-sidebar-group-label {
        padding-top: 0.5rem !important;
        padding-bottom: 0.5rem !important;
        margin-bottom: 0.25rem !important;
    }

    /* Kurangi spacing list items */
    nav.fi-sidebar-nav li {
        margin-top: 0 !important;
        margin-bottom: 0 !important;
    }
</style>