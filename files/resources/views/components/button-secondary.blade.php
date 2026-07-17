@props(['link' => '', 'text' => ''])
<!-- The secondary button — an outline. Every action that is not the page's primary CTA uses this -->
<a
    href="{{ $link }}"
    class="inline-flex items-center justify-center rounded-lg px-3 py-2 text-sm font-medium text-neutral-950 ring-1 ring-neutral-950/10 hover:bg-neutral-950/3 dark:text-white dark:ring-white/15 dark:hover:bg-white/5">
    {{ $text }}
</a>
