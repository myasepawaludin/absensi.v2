<style>
    /* ==========================================
       LOGIN PAGE - Desktop: Narrow & Perfect Height, Mobile: Normal
       ========================================== */

    /* Login Container - More Narrow */
    .fi-simple-main {
        max-width: 90% !important;
        width: 100% !important;
        border-radius: 1rem !important; /* Rounded di mobile */
    }

    @media (min-width: 480px) {
        .fi-simple-main {
            max-width: 320px !important;
        }
    }

    @media (min-width: 768px) {
        .fi-simple-main {
            max-width: 340px !important;
        }
    }

    /* ==========================================
       MOBILE - Ukuran Normal & Nyaman (Default)
       ========================================== */
    
    /* Main container padding mobile */
    .fi-simple-main {
        padding: 1.5rem 1.75rem !important;
        margin-top: 4rem !important;
        margin-bottom: 4rem !important;
    }

    /* Logo & Header mobile */
    .fi-simple-header {
        margin-bottom: 1rem !important;
    }

    .fi-logo {
        margin-bottom: 1rem !important;
    }

    /* Heading mobile - LEBIH KECIL */
    .fi-simple-header-heading {
        font-size: 1.125rem !important; /* Dari 1.5rem jadi 1.125rem (18px) */
        margin-bottom: 0.75rem !important;
        font-weight: 700 !important;
    }

    /* Form section mobile */
    .fi-simple-page section {
        gap: 1.25rem !important;
    }

    /* Field wrapper mobile */
    .fi-fo-field-wrp {
        margin-bottom: 1rem !important;
    }

    /* Label mobile */
    .fi-fo-field-wrp-label {
        margin-bottom: 0.5rem !important;
    }

    .fi-fo-field-wrp-label span {
        font-size: 0.9375rem !important;
        font-weight: 500 !important;
    }

    /* Input wrapper mobile - rounded */
    .fi-input-wrp {
        padding: 0.75rem 1rem !important;
        min-height: 3rem !important;
        border-radius: 0.75rem !important; /* Rounded input mobile */
    }

    .fi-input {
        font-size: 1rem !important;
        line-height: 1.5 !important;
        padding-top: 0.375rem !important;
        padding-bottom: 0.375rem !important;
    }

    /* Button mobile - rounded */
    .fi-btn {
        padding: 0.75rem 1.25rem !important;
        font-size: 1rem !important;
        min-height: 3rem !important;
        font-weight: 600 !important;
        border-radius: 0.75rem !important; /* Rounded button mobile */
    }

    /* Checkbox mobile - rounded */
    .fi-checkbox-input {
        width: 1.125rem !important;
        height: 1.125rem !important;
        border-radius: 0.375rem !important; /* Rounded checkbox mobile */
    }

    /* Form actions mobile */
    .fi-form-actions {
        margin-top: 1.25rem !important;
    }

    /* ==========================================
       TABLET & DESKTOP - Narrow & Perfect Height
       ========================================== */
    @media (min-width: 640px) {
        
        /* Main container - narrow with perfect padding */
        .fi-simple-main {
            padding: 0.75rem 1.125rem 0.875rem !important;
            margin-top: 2rem !important;
            margin-bottom: 2rem !important;
            border-radius: 0.75rem !important; /* Rounded di desktop juga */
        }

        /* Logo & Header - compact with space */
        .fi-simple-header {
            margin-bottom: 0.5rem !important;
        }

        .fi-logo {
            height: 1.875rem !important;
            margin-bottom: 0.5rem !important;
        }

        .fi-logo img {
            width: 2.125rem !important;
            height: 2.125rem !important;
        }

        .fi-logo p {
            font-size: 0.78125rem !important;
            line-height: 1.3 !important;
        }

        .fi-simple-header-heading {
            font-size: 1rem !important;
            margin-bottom: 0.4rem !important;
            font-weight: 700 !important;
            line-height: 1.35 !important;
            margin-top: 0.3rem !important;
        }

        /* Form section - balanced spacing */
        .fi-simple-page section {
            gap: 0.55rem !important;
        }

        /* Field wrapper - balanced */
        .fi-fo-field-wrp {
            margin-bottom: 0.425rem !important;
        }

        .fi-fo-field-wrp > div {
            gap: 0.275rem !important;
        }

        /* Label - readable */
        .fi-fo-field-wrp-label {
            margin-bottom: 0.275rem !important;
        }

        .fi-fo-field-wrp-label span {
            font-size: 0.78125rem !important;
            font-weight: 500 !important;
            line-height: 1.3 !important;
        }

        /* Input wrapper - perfect size with rounded */
        .fi-input-wrp {
            padding: 0.45rem 0.75rem !important;
            min-height: 2.25rem !important;
            border-radius: 0.5rem !important; /* Rounded input desktop */
        }

        .fi-input {
            font-size: 0.84375rem !important;
            line-height: 1.3 !important;
            padding-top: 0.275rem !important;
            padding-bottom: 0.275rem !important;
        }

        /* Password icon button - rounded */
        .fi-input-wrp-suffix {
            padding: 0 0.35rem !important;
            border: none !important;
        }

        .fi-icon-btn {
            width: 1.75rem !important;
            height: 1.75rem !important;
            margin: 0 !important;
            border-radius: 0.375rem !important; /* Rounded icon button */
        }

        .fi-icon-btn-icon {
            width: 1.0625rem !important;
            height: 1.0625rem !important;
        }

        /* Button - perfect size with rounded */
        .fi-btn {
            padding: 0.45rem 0.9375rem !important;
            font-size: 0.84375rem !important;
            min-height: 2.25rem !important;
            font-weight: 600 !important;
            border-radius: 0.5rem !important; /* Rounded button desktop */
            gap: 0.35rem !important;
        }

        .fi-btn-icon {
            width: 0.96875rem !important;
            height: 0.96875rem !important;
        }

        .fi-btn-label {
            line-height: 1.3 !important;
        }

        /* Checkbox - balanced with rounded */
        .fi-checkbox-input {
            width: 0.96875rem !important;
            height: 0.96875rem !important;
            border-radius: 0.25rem !important; /* Rounded checkbox desktop */
        }

        .fi-fo-checkbox span {
            font-size: 0.78125rem !important;
            line-height: 1.3 !important;
        }

        /* Form actions - balanced margin */
        .fi-form-actions {
            margin-top: 0.55rem !important;
        }

        .fi-ac {
            gap: 0.45rem !important;
        }

        /* Form gap */
        .fi-form {
            gap: 0.55rem !important;
            margin: 0 !important;
            padding: 0 !important;
        }

        /* Component container */
        .fi-fo-component-ctn {
            gap: 0.425rem !important;
        }

        /* Page spacing */
        .fi-simple-page {
            padding: 0.5rem !important;
        }
    }

    /* ==========================================
       PROFILE PAGE - Compact & Beautiful
       ========================================== */

    .custom-profile-page {
        max-width: 42rem !important;
        margin: 0 auto !important;
    }

    .custom-profile-page .fi-header,
    .custom-profile-page .fi-header-heading,
    body:has(.custom-profile-page) .fi-page-heading {
        display: none !important;
    }

    .custom-profile-page .fi-section {
        margin-bottom: 0.75rem !important;
        border-radius: 0.5rem !important;
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1) !important;
    }

    .custom-profile-page .fi-section-content {
        padding: 0.75rem !important;
    }

    .custom-profile-page .fi-section-content .fi-fo-field-wrp {
        margin-bottom: 0.45rem !important;
    }

    .custom-profile-page .fi-input-wrp {
        min-height: 1.875rem !important;
        padding: 0.35rem 0.7rem !important;
        border-radius: 0.375rem !important;
    }

    .custom-profile-page .fi-input {
        font-size: 0.875rem !important;
        line-height: 1.25 !important;
    }

    .custom-profile-page .fi-btn {
        min-height: 1.875rem !important;
        padding: 0.35rem 0.9rem !important;
        font-size: 0.875rem !important;
        border-radius: 0.375rem !important;
        font-weight: 600 !important;
    }

    .custom-profile-page .fi-fo-field-wrp-label {
        margin-bottom: 0.15rem !important;
    }

    .custom-profile-page .fi-fo-field-wrp-label .fi-fo-field-wrp-label-text {
        font-size: 0.75rem !important;
        font-weight: 500 !important;
        letter-spacing: 0.01em !important;
    }

    .custom-profile-page .fi-section-header-heading {
        font-size: 0.9375rem !important;
        margin-bottom: 0.45rem !important;
        font-weight: 600 !important;
    }

    .custom-profile-page .fi-form-actions {
        margin-top: 0.75rem !important;
    }
</style>
