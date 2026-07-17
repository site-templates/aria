@props(['title' => '', 'description' => '', 'menu'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- The title and description below are set per page via the layout component's attributes -->
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}">

    <!-- Used to add dark mode right away, adding here prevents any flicker -->
    <script>
        if (typeof(Storage) !== "undefined") {
            if(localStorage.getItem('dark_mode') && localStorage.getItem('dark_mode') == 'true'){
                document.documentElement.classList.add('dark');
            }
        }
    </script>

    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:type" content="website">

    <link rel="icon" type="image/png" href="https://cdn.jsdelivr.net/gh/static-templates/aria@a8e18c3c6692e0710b5aa6575be00d47ceac6c68/src/assets/images/favicon.png">

    <!-- Inter, loaded from the source. This build ships the Display optical size and supports
         the OpenType features switched on in resources/css/site.css — Google Fonts ships neither. -->
    <link rel="preconnect" href="https://rsms.me">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <!-- The line below loads Tailwind and inlines your resources/css/site.css -->
    @vite('resources/css/site.css')
</head>
<body class="isolate antialiased bg-white text-neutral-600 dark:bg-neutral-950 dark:text-neutral-400">
    <!-- The faint grid behind the top of the page — see the page-grid utility in resources/css/site.css -->
    <div class="page-grid pointer-events-none absolute inset-x-0 top-0 -z-10 h-140" aria-hidden="true"></div>

    <x-header :menu="$menu"/>

    <main>
        {{ $slot }}
    </main>

    <x-footer/>

    <script src="/js/main.js"></script>
</body>
</html>
