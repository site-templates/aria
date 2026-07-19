@props([
    'badge' => 'Error 404',
    'heading' => 'This page wandered off.',
    'body' => "There's nothing at this address — it may have moved, or I may never have written it. Everything I've published is still here, one click away.",
    'buttonText' => 'Back to the homepage',
    'buttonLink' => '/',
    'secondaryText' => 'Read my writing',
    'secondaryLink' => '/posts',
])
<!-- The not-found message — shown when a visitor reaches a URL that doesn't exist -->
<section class="pt-16 pb-8 sm:pt-24">
    <div class="mx-auto max-w-3xl px-6 text-center">
        <p class="inline-flex items-center gap-x-2 rounded-full py-1 px-3 text-base font-medium text-neutral-600 ring-1 ring-neutral-950/8 sm:text-sm dark:text-neutral-400 dark:ring-white/10">
            {{ $badge }}
        </p>

        <h1 class="mt-5 text-4xl font-semibold tracking-tight text-balance text-neutral-950 sm:text-5xl dark:text-white">{{ $heading }}</h1>

        <p class="mx-auto mt-5 max-w-[48ch] text-lg text-pretty text-neutral-600 dark:text-neutral-400">{{ $body }}</p>

        <div class="mt-8 flex flex-wrap justify-center gap-3">
            <x-button :text="$buttonText" :link="$buttonLink"/>
            <x-button-secondary :text="$secondaryText" :link="$secondaryLink"/>
        </div>
    </div>
</section>
