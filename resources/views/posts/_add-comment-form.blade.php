@auth
    <x-panel>
        <form method="POST" action="/posts/{{ $post->slug }}/comments">
            @csrf
            <header class="flex items-center">
                <img src="https://i.pravatar.cc/100?u={{ auth()->id() }}" alt="" width="40" height="40"
                    class="rounded-full">

                <h2 class="ml-4">Want to participate?</h2>
            </header>

            <div class="mt-6">
                <textarea name="body" class="w-full text-s focus:outline-none focus:ring" rows="6"
                    placeholder="Quick, think of something to say!" required></textarea>
            </div>

            @error('body')
                <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror

            <x-submit-button>
                Post
            </x-submit-button>
        </form>
    </x-panel>
@else
    <p class="font-semibold">
        <a class="hover:underline" href="/register">Register</a> or <a class="hover:underline" href="/login">Log In </a> to
        post a comment!
    </p>
@endauth
