<!--
    The dynamic post page: serves /post/{slug} for every entry in
    resources/data/collections/post.json, with $post bound to the entry whose
    slug matches the URL. Add a post by adding an entry there — no new page
    file needed. The body is the entry's `content` HTML, styled by .prose.
-->
<x-layouts.main
    :title="$post->title"
    :description="$post->description"
    :menu="$menu">

    <article class="pt-12 sm:pt-20">
        <div class="mx-auto max-w-[68ch] px-6">
            <a href="/posts"
                class="group inline-flex items-center gap-x-1.5 text-base font-medium text-neutral-500 sm:text-sm dark:text-neutral-400">
                <svg viewBox="0 0 16 16" fill="currentColor"
                    class="size-4 h-lh shrink-0 transition duration-200 ease-out group-hover:-translate-x-0.5"
                    aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M14 8a.75.75 0 0 1-.75.75H4.56l3.22 3.22a.75.75 0 1 1-1.06 1.06l-4.5-4.5a.75.75 0 0 1 0-1.06l4.5-4.5a.75.75 0 0 1 1.06 1.06L4.56 7.25h8.69A.75.75 0 0 1 14 8Z"
                        clip-rule="evenodd" />
                </svg>
                All posts
            </a>
    
            <p class="mt-8 text-base tabular-nums text-neutral-500 sm:text-sm dark:text-neutral-500">{{ $post->dateFormatted
                }}<span class="mx-1.5 text-neutral-300 dark:text-neutral-700">·</span>{{ $post->readTime }}</p>
            <h1 class="mt-3 text-3xl font-semibold tracking-tight text-pretty text-neutral-950 sm:text-4xl dark:text-white">
                {{ $post->title }}</h1>
            <p class="mt-5 text-lg text-pretty text-neutral-600 dark:text-neutral-400">{{ $post->description }}</p>
        </div>
    
        <div class="mx-auto mt-12 max-w-4xl px-6">
            <img src="{{ $post->image }}" alt="{{ $post->imageAlt }}" class="w-full rounded-[min(1vw,12px)] outline-1 -outline-offset-1 outline-black/5 dark:outline-white/10">
        </div>
    
        <div class="mx-auto mt-12 max-w-[68ch] px-6">
            <div class="prose">
                {!! $post->content !!}
            </div>
        </div>
    </article>
    
    <x-newsletter />
    

</x-layouts.main>

