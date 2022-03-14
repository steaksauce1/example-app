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
                    <li>
                        <a  href="/admin/posts/your" class="{{ request()->is('admin/posts/your') ? 'text-blue-500' : '' }}">Your posts</a>
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