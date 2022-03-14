
<x-layout>
	@auth
	<p style="text-align: center; color: lightgrey;">I'm a x-layout</p>
	<!-- <x-nav-layout /> -->

	 <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
	 	<p style="text-align: center; color: lightgrey;">I'm MAIN</p>

	 	 <h1 class="text-center font-bold text-xl">Create a new post</h1>
        <form method="POST" action="/submit-post" class="mt-10">
            
            @csrf
            <div class="mb-6">
                <label class="block mb-2 mt-4 uppercase font-bold text-xs text-gray-700" for="name">
                    Category
                </label>


                <div>
                	<x-slot name="trigger">
                		<button 
                		class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex">
                		{{isset($currentCategory) ? $currentCategory->name : 'Categories'}}
                		<x-icon name="down-arrow" class=" absolute pointer-events-none" style="right: 12px;"/>
                	</button>
                </x-slot>
                
            
                </div>

                <select id="category" name="category" class="py-2 pl-3 pr-9 text-sm font-semibold w-full  text-left flex lg:inline-flex border border-gray-400 p-2 mb-2 w-full">
                	@foreach (\App\Models\Category::all() as $category)
                		<option value="{{ $category->name }}"> {{ $category->name }} </option>
                	@endforeach
                </select>


                <label class="block mb-2 mt-4 uppercase font-bold text-xs text-gray-700" for="name">
                    Title
                </label>
                	                    <input  class="border border-gray-400 p-2 mb-2 w-full" 
                            type="text" 
                            name="title" 
                            id="title" 
                            value="{{ old('title') }}" 
                            required>

                        @error('title')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror

                <label class="block mb-2 mt-4 uppercase font-bold text-xs text-gray-700" for="username">
                    Slug
                </label>

                    <input  class="border border-gray-400 p-2 mb-2 w-full"
                            type="text" 
                            name="slug" 
                            id="slug" 
                            value="{{ old('slug') }}" 
                            required>
                    @error('slug')
                        <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror

                <label class="block mb-2 mt-4 uppercase font-bold text-xs text-gray-700" for="email">
                    excerpt
                </label>

                    <input  class="border border-gray-400 p-2 mb-2 w-full"
                            type="textarea" 
                            name="excerpt" 
                            id="excerpt" 
                            value="{{ old('excerpt') }}" 
                            required>

                        @error('excerpt')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror


                <label class="block mb-2 mt-4 uppercase font-bold text-xs text-gray-700" for="password">
                    body
                </label>

               
                     <textarea 
                    name="body" 
                    class="w-full text-sm focus:outline-none focus:ring border border-gray-400 p-2 mb-2 w-full" 
                    rows="5" 
                    placeholder="Think up something then mash it into ya keyboard..."
                    required></textarea>
          


                <div class="mb-6 py-2">
                    <button type="submit" class="bg-blue-500 text-white rounded py-2 px-4 hover:bg-blue-600">
                        Submit
                    </button>
                </div>

                @if($errors->any())
                <ul>
                @foreach ($errors->all() as $errors)
                    <li class="text-red-500 text-xs mt-2">{{ $errors }}</li>
                @endforeach
                </ul>
                @endif


            </div>
        </form>

	 </main>
     @endauth



     @guest
    
{{-- asdfasdfa --}}
        <p class="mt-20 mb-20 py-20 text-center">Please <a href="/login" class="font-bold text-blue-500">log in</a> to submit a post</p>
     @endguest

</x-layout>
