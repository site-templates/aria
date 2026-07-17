@props(['dates' => '', 'role' => '', 'company' => '', 'description' => '', 'logo' => ''])
<div class="group relative flex gap-x-5 pb-10 last:pb-0">
    <!-- The rail joins each role to the next one, so the last item doesn't draw it -->
    <div class="absolute top-14 bottom-0 left-6 w-px bg-neutral-950/10 group-last:hidden dark:bg-white/10" aria-hidden="true"></div>

    <!-- These are full-colour logos, so the tile stays light in dark mode to keep them legible -->
    <div class="grid size-12 shrink-0 place-items-center rounded-xl bg-white ring-1 ring-neutral-950/5 dark:ring-white/10">
        <img src="{{ $logo }}" alt="" class="size-7 shrink-0">
    </div>

    <div class="min-w-0 pt-1">
        <p class="text-sm tabular-nums text-neutral-500 dark:text-neutral-500">{{ $dates }}</p>
        <h3 class="mt-1 text-base font-semibold text-neutral-950 dark:text-white">{{ $role }}</h3>
        <p class="text-base font-medium text-neutral-700 sm:text-sm dark:text-neutral-300">{{ $company }}</p>
        <p class="mt-2 max-w-[60ch] text-base text-pretty text-neutral-600 sm:text-sm dark:text-neutral-400">{{ $description }}</p>
    </div>
</div>
