@props([
    'items',
    'heading' => "Selected projects",
    'description' => "A few things I've designed and shipped recently — tools for developers, mostly built in public.",
    'linkText' => "View all projects",
    'link' => "/projects",
])
<section class="mt-24 sm:mt-32">
    <div class="mx-auto max-w-4xl px-6">
        <x-section-heading
            :title="$heading"
            :description="$description"
            :link="$link"
            :linkText="$linkText"
        />

        <div class="mt-10 grid grid-cols-1 items-stretch gap-8 sm:grid-cols-2 md:grid-cols-3">
            @foreach ($items as $project)
                <x-project :name="$project->name" :description="$project->description" :image="$project->image" :url="$project->url"/>
                @break($loop->iteration == 3)
            @endforeach
        </div>
    </div>
</section>
