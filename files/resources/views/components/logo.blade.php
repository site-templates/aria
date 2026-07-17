@props(['brand' => "aria"])
<a href="/" aria-label="Homepage" class="flex h-6 shrink-0 items-center gap-x-2 text-base font-semibold tracking-tight text-neutral-950 dark:text-white">
    <span aria-hidden="true" class="text-neutral-400 dark:text-neutral-500">✦</span>
    <!-- Logo Text -->
    <span>{{ $brand }}</span>
</a>
