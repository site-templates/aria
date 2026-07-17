@props(['title' => '', 'description' => ''])
<!-- Each line carries its own max-w-[*ch] so the measure stays readable — never put a width on the wrapper -->
<div>
    <h1 class="max-w-[35ch] text-3xl font-semibold tracking-tight text-balance text-neutral-950 sm:text-4xl dark:text-white">{{ $title }}</h1>
    <p class="mt-5 max-w-[48ch] text-lg text-pretty text-neutral-600 sm:mt-6 dark:text-neutral-400">{{ $description }}</p>
</div>
