<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ $attributes->get('title', 'Judul Default') }}</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <x-partisi.include.css />
    {{ $css ?? '' }}
</head>

<body class="index-page">

    <x-partisi.include.header />

    <main class="main">
        {{ $slot }}
    </main>

    <x-partisi.include.footer />

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    {{ $js ?? '' }}
    <x-partisi.include.js />

</body>

</html>
