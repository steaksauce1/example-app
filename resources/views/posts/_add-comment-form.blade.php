          <x-panel >
            <form method="POST" action="/posts/{{ $post->slug}}/comments">
                @csrf

                <header class="flex items-center">
                    <img 
                    src="https://i.pravatar.cc/60?u={{ auth()->id() }}" 
                    alt="" 
                    width="40" 
                    height="40" 
                    class="rounded-full">
                    <h2 class="ml-4">Want to participate?</h2>

                </header>

                <div class="mt-6">
                    <textarea 
                    name="body" 
                    class="w-full text-sm focus:outline-none focus:ring" 
                    rows="5" 
                    placeholder="Think up something then mash it into ya keyboard..."
                    required></textarea>

                    @error('body')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex justify-end mt-4 border-t border-gray-200">
                    <x-form.button>Post
                    </x-form.button>
                </div>
            </form>
        </x-panel>
