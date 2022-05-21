<!doctype html>

<title>Laravel From Scratch Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link href="{{ asset('app.css') }}" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.3.0/alpine.js" integrity="sha512-nIwdJlD5/vHj23CbO2iHCXtsqzdTTx3e3uAmpTm4x2Y8xCIFyWu4cSIV8GaGe2UNVq86/1h9EgUZy7tn243qdA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<style type="text/css">
    html{
        scroll-behavior: smooth;
    }
</style>
<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">


        <!-- This is the nav section at the very top of the page -->
        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/posts">
                    <img src="/images/timocast.png" alt="Laracasts Logo" width="165" height="16">
                </a>
                <a href="/" class="text-xs font-bold uppercase mt-2 text-gray-100">back to start</a><br>
                <a href="/admin/posts/create" class="text-xs font-bold uppercase mt-2 text-gray-100">make a post (admin)</a>
            </div>

            <div class="mt-8 md:mt-0 flex items-center">
                @auth
                <x-dropdown>
                    <x-slot name="trigger">
                        <button href="/register" class="text-xs font-bold uppercase">Welcome, {{ auth()->user()->name }}</button>
                    </x-slot>
                    @if(auth()->user()->can('admin'))
                    <x-dropdown-item href="/admin/posts" :active="request()->is('admin/posts')">AdminDash</x-dropdown-item>
                    <x-dropdown-item href="/admin/posts/create" :active="request()->is('admin/posts/create')">New Post</x-dropdown-item>
                    @endif
                     <x-dropdown-item href="#" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()">Log out</x-dropdown-item>
                    <x-dropdown-item href="/mastermind" :active="request()->is('mastermind')">Mastermind</x-dropdown>
                        <x-dropdown-item href="/dashboard" :active="request()->is('dashboard')">Dashboard</x-dropdown>
                     <form id="logout-form" method="POST" action="/logout" class="text-xs font-semibold text-blue-500 ml-6 hidden">
                        @csrf
                    </form>
                </x-dropdown>
                   {{--  <form method="POST" action="/logout" class="text-xs font-semibold text-blue-500 ml-6">
                        @csrf
                        <button type="submit">Log Out</button>
                    </form> --}}
                @else
                 <a href="/register" class="text-xs font-bold uppercase">Register</a>
                 <a href="/login" class="text-xs font-bold uppercase ml-6">Log In</a>
                @endauth

                <a href="#newsletter" class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                    Subscribe for Updates
                </a>
            </div>
        </nav>

        <!-- This is the header section of the page -->
       


        <!--This is the main section of the page -->
        <!-- where we use $slot -->
            {{ $slot }}
    
  
        <!--This is the footer section of the page -->
        <footer id="newsletter" class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
            <img src="./images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
            <h5 class="text-3xl">Stay in touch with the latest posts</h5>
            <p class="text-sm mt-3">Promise to keep the inbox clean.</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                    <form method="POST" action="/newsletter" class="lg:flex text-sm">
                        @csrf
                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                            </label>

                            <input id="email" name="email" type="text" placeholder="Your email address"
                                   class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">

                                     @error('email')
                                    <span class="text-red-500 text-xs">{{ $message }}</span>
                                    @enderror
                        </div>

                        <button type="submit"
                                class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8"
                        >
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </footer>
    </section>
    <x-flash />
</body>
