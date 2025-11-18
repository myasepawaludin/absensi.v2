{{-- Basic Meta Tags --}}
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

{{-- Primary SEO --}}
<title>{{ $title ?? 'Sistem Absensi SMK BINUSA - Manajemen Kehadiran Siswa & Guru' }}</title>
<meta name="description" content="{{ $description ?? 'Sistem Absensi Digital SMK BINUSA dengan fitur rekap absensi, laporan kehadiran, dan monitoring real-time untuk siswa dan guru.' }}">
<meta name="keywords" content="{{ $keywords ?? 'sistem absensi, absensi siswa, absensi guru, smk binusa, presensi online, manajemen kehadiran, laporan kehadiran, absensi digital' }}">
<meta name="author" content="SMK BINUSA">
<meta name="robots" content="index, follow">
<meta name="googlebot" content="index, follow">
<meta name="language" content="id">
<meta name="revisit-after" content="7 days">

{{-- Open Graph (FB, WhatsApp, LinkedIn) --}}
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $ogTitle ?? $title ?? 'Sistem Absensi SMK BINUSA' }}">
<meta property="og:description" content="{{ $ogDescription ?? $description ?? 'Platform absensi digital SMK BINUSA.' }}">
<meta property="og:url" content="{{ $ogUrl ?? url()->current() }}">
<meta property="og:site_name" content="Sistem Absensi SMK BINUSA">
<meta property="og:locale" content="id_ID">

<meta property="og:image" content="{{ $ogImage ?? asset('images/og-image.jpg') }}">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="Sistem Absensi SMK BINUSA">

{{-- Twitter Card --}}
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $twitterTitle ?? $title ?? 'Sistem Absensi SMK BINUSA' }}">
<meta name="twitter:description" content="{{ $twitterDescription ?? $description ?? 'Platform absensi digital SMK BINUSA.' }}">
<meta name="twitter:image" content="{{ $twitterImage ?? asset('images/twitter-card.jpg') }}">
<meta name="twitter:image:alt" content="Sistem Absensi SMK BINUSA">
<meta name="twitter:site" content="@smkbinusa">
<meta name="twitter:creator" content="@smkbinusa">

{{-- PWA & UI Enhancement --}}
<meta name="theme-color" content="#4F46E5">
<meta name="msapplication-TileColor" content="#4F46E5">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="apple-mobile-web-app-title" content="Absensi BINUSA">

{{-- Canonical --}}
<link rel="canonical" href="{{ $canonical ?? url()->current() }}">
