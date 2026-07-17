@props(['link' => '', 'text' => ''])
<!-- A quiet text link with an arrow that nudges on hover. Used for "view all" style actions -->
<a href="{{ $link }}" class="group inline-flex items-center gap-x-1.5 text-sm font-medium text-neutral-950 dark:text-white">
    {{ $text }}
    <svg viewBox="0 0 16 16" fill="currentColor" class="size-4 h-lh shrink-0 transition duration-200 ease-out group-hover:translate-x-0.5" aria-hidden="true">
        <path fill-rule="evenodd" d="M2 8a.75.75 0 0 1 .75-.75h8.69L8.22 4.03a.75.75 0 0 1 1.06-1.06l4.5 4.5a.75.75 0 0 1 0 1.06l-4.5 4.5a.75.75 0 0 1-1.06-1.06l3.22-3.22H2.75A.75.75 0 0 1 2 8Z" clip-rule="evenodd"/>
    </svg>
</a>
