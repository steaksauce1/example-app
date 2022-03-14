<x-layout>
 
    <x-settings heading="create a new post">
    </x-settings>
        <section class="py-8 max-w-sm mx-auto">
            <h1 class="text-3xl text-gray-900 font-bold mx-auto ">
                Creat a new Post
            </h1>

            <x-panel class="max-w-sm mx-auto">
            <form method="POST" action="/admin/posts" enctype="multipart/form-data">
                @csrf
              {{--   <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="title">Title</label>
                    <input class="border border-gray-400 p-2 w-full" type="text" name="title" value="{{ old('title') }}" id="title" required>
                    @error('title')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div> --}}
                <x-form.input name='title'/>

              {{--    <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="slug">Slug</label>
                    <input class="border border-gray-400 p-2 w-full" type="text" name="slug" value="{{ old('slug') }}" id="slug" required>
                    @error('slug')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div> --}}
                 <x-form.input name='slug'/>

            {{--     <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="thumbnail">Thumbnail</label>
                    <input class="border border-gray-400 p-2 w-full" type="file" name="thumbnail" value="{{ old('thumbnail') }}" id="thumbnail" required>
                    @error('thumbnail')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div> --}}
                <x-form.input name='slug' type='file'/>

             {{--    <div class="mb-6">
                      <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="excerpt">Excerpt</label>
                    <textarea class="border border-gray-400 p-2 w-full" type="textarea" name="excerpt" id="excerpt" required>{{ old('excerpt') }}</textarea>
                    @error('excerpt')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
              </div> --}}
              <x-form.textarea name='excerpt'/>

               {{--  <div class="mb-6">
                      <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="body">body</label>
                    <textarea class="border border-gray-400 p-2 w-full" type="textarea" name="body" id="body" required>{{ old('body') }}</textarea>
                    @error('body')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
              </div> --}}
              <x-form.textarea name='body'/>

            {{--     <div class="mb-6">
                      <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="category_id">Category</label>
                    <select name="category_id" id="category_id" required>
                        @php
                            $categories = \App\Models\Category::all();
                        @endphp

                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ old('catgory_id') == $category->id ? 'selected' : ''}}> {{ ucwords($category->name) }}</option>
                        @endforeach 
                        <option value="Personal">Personal</option>
                   
                    </select>
                     
              </div> --}}

                <x-form.field>
                    <x-form.label name="Category" />
                       <select name="category_id" id="category_id" required>
                        @php
                            $categories = \App\Models\Category::all();
                        @endphp

                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ old('catgory_id') == $category->id ? 'selected' : ''}}> {{ ucwords($category->name) }}</option>
                        @endforeach 
                        <option value="Personal">Personal</option>
                   
                        </select>
                        <x-form.error name="Category" />
                </x-form.field>

              <div class="mb-6"> 
                <x-form.button>Publish</x-form.button>
              </div>
            </form>
        </section>
    </x-panel>
</x-layout>