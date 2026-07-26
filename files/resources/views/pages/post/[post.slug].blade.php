<!--
    The dynamic post page: serves /post/{slug} for every entry in
    resources/data/collections/post.json, with $post bound to the entry whose
    slug matches the URL. Add a post by adding an entry there — no new page
    file needed. The body is the entry's `content` HTML, styled by .prose.
-->
<x-layouts.post
    :title="$post->title"
    :description="$post->description"
    :date="$post->dateFormatted"
    :readTime="$post->readTime"
    :image="$post->image"
    :imageAlt="$post->imageAlt"
    :menu="$menu">

    {!! $post->content !!}

</x-layouts.post>
