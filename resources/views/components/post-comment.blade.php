@props(['comment'])
<x-panel class="bg-gray-50">
    <article class="flex space-x-4">
        <div class="flex-shrink-0"><img src="https://i.pravatar.cc/100?u={{ $comment->user_id }}" alt=""
                class="rounded-xl"></div>
        <div class="ml-4">
            <header class="mb-4">
                <h3 class="font-bold">{{ $comment->author->name }}</h3>

                <p class="text-xs">Posted <time>{{ $comment->created_at->format('F j, Y, g:i a') }}</time></p>

                <p>{{ $comment->body }}</p>
            </header>
        </div>
    </article>
</x-panel>
