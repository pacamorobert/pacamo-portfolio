<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr" data-wc-theme-default="system" data-hbb-relurl="/">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ config('portfolio.role') }} — {{ config('portfolio.site_name') }}">
    <title>@yield('title', config('portfolio.site_name'))</title>

    <script>
        (function () {
            const stored = localStorage.getItem('hb-theme');
            const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            if (stored === 'dark' || (!stored && prefersDark)) {
                document.documentElement.classList.add('dark');
            }
        })();
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&family=Source+Serif+4:opsz,wght@8..60,400;8..60,500;8..60,600;8..60,700&family=Source+Code+Pro:wght@400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/academicons/1.9.4/css/academicons.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[var(--hb-color-background)] text-[var(--hb-color-foreground)] page-wrapper" id="top">

    <div id="page-bg"></div>

    @include('partials.header')

    <div class="page-body">
        @yield('content')
    </div>

    @include('partials.footer')

    <div id="hb-notification-container" class="fixed top-20 right-4 z-[9999] pointer-events-none" aria-live="polite" aria-atomic="true"></div>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.9/dist/cdn.min.js"></script>
</body>
</html>