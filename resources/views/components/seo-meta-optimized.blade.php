{{-- Essential Meta Tags --}}
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

{{-- Primary SEO Tags --}}
<title>{{ $title ?? 'Sistem Absensi SMK BINUSA - Manajemen Kehadiran Digital' }}</title>
<meta name="description" content="{{ $description ?? 'Platform absensi digital SMK BINUSA untuk manajemen kehadiran siswa dan guru secara real-time dengan fitur rekap dan monitoring yang efisien.' }}">
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">

{{-- Open Graph (Essential) --}}
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $ogTitle ?? $title ?? 'Sistem Absensi SMK BINUSA' }}">
<meta property="og:description" content="{{ $ogDescription ?? $description ?? 'Platform absensi digital untuk SMK BINUSA' }}">
<meta property="og:url" content="{{ $ogUrl ?? url()->current() }}">
<meta property="og:locale" content="id_ID">

@if(isset($ogImage) || file_exists(public_path('images/binusa.png')))
<meta property="og:image" content="{{ $ogImage ?? asset('images/binusa.png') }}">
@endif

{{-- Twitter Card --}}
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $twitterTitle ?? $title ?? 'Sistem Absensi SMK BINUSA' }}">
<meta name="twitter:description" content="{{ $twitterDescription ?? $description ?? 'Platform absensi digital untuk SMK BINUSA' }}">

{{-- Canonical URL --}}
<link rel="canonical" href="{{ $canonical ?? url()->current() }}">

{{-- Theme Color --}}
<meta name="theme-color" content="#4F46E5">