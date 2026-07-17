@props(['link' => '', 'text' => ''])
<!-- The primary button. Use it once per page — every other action uses x-button-secondary or x-link-arrow -->
<a
    href="{{ $link }}"
    class="inline-flex items-center justify-center rounded-lg bg-neutral-950 px-3 py-2 text-sm font-medium text-white ring-1 ring-neutral-950 hover:bg-neutral-800 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-neutral-900 dark:bg-white dark:text-neutral-950 dark:ring-white dark:hover:bg-neutral-200 dark:focus-visible:outline-white">
    {{ $text }}
</a>
