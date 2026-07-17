@props([
    'items',
    'heading' => "Recent writing",
    'description' => "Notes on code, design, and the slower things around them.",
    'linkText' => "View all posts",
    'link' => "/posts",
])
<section class="mt-24 sm:mt-32">
    <div class="mx-auto max-w-4xl px-6">
        <x-section-heading
            :title="$heading"
            :description="$description"
            :link="$link"
            :linkText="$linkText"
        />

        <div class="mt-10 flex flex-col">
            <x-posts-loop :items="$items" count="3"/>
        </div>
    </div>
</section>
