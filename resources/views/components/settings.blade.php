@props(['heading'])
<section class="py-8 max-w-4xl mx-auto">
            <h1 class="text-3xl text-gray-900 font-bold mx-auto py-4 border-b mb-6">
                {{ $heading }}
            </h1>
            <div class="flex">
            <aside class="w-48 flex-shrink-0">
                <h3 class="font-bold">Links</h3>
                <ul>
                    <li>
                        <a href="/admin/posts" class="{{ request()->is('admin/posts') ? 'text-blue-500' : '' }}">All posts</a>
                    </li>
                    <li>
                        <a href="/admin/posts/create" class="{{ request()->is('admin/posts/create') ? 'text-blue-500' : '' }}">Make a new post</a>
                    </li>
                  
                </ul>
                <h3 class="font-bold">Search</h3>
                <ul>
                     <li>
                         <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-2 py-1 mr-2">
                  
                    <form method="GET" action="/admin/posts/your">
                        @if (request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif
                        
                        <input 
                            type="text" 
                            name="search" 
                            placeholder="Find something"
                            class="bg-transparent placeholder-black font-semibold text-sm"
                            value="{{ request('search') }}"
                        >
                    </form>
                    </div>
                    </li>
                </ul>
            </aside>
            <main class="flex-1">
                <x-panel>
                    {{ $slot }}
                </x-panel>
            </main>
            </div>
        </section>