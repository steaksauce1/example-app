<x-layout>
    <x-settings :heading="'Edit post: ' . $post->title">
         <form method="POST" action="/admin/posts/{{ $post->id }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                
                <x-form.input name='title' :value="old('title', $post->title)"/>
                <x-form.input name='slug' :value="old('slug', $post->slug)"/>
                    <div class="mb-6">
                    <x-form.input name='thumbnail' type='file' :value="old('thumbnail', $post->thumbnail)"/>
                    <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="" class="rounded-xl" width="100">
                    </div>
                    <x-form.radio name='status' value="{{ $post->status }}" />
               {{-- active status radio buttons--}}
             {{--    <label for="active">
                <input 
                    type="radio" 
                    name="active" 
                    id="active" 
                    value="active"  
                 > Active </label>
                 &nbsp;&nbsp;&nbsp; 
                 <label for="inactive">   
                <input 
                    type="radio" 
                    name="inactive" 
                    id="inactive" 
                    value="inactive" 
                 > Inactive </label>     --}}


                <x-form.textarea name='excerpt'>{{ old('excerpt', $post->excerpt) }}</x-form.textarea>
                <x-form.textarea name='body'>{{ old('body', $post->body) }}</x-form.textarea>
                <x-form.field>
                    <x-form.label name="Category" />
                       <select name="category_id" id="category_id" required>
                        @php
                            $categories = \App\Models\Category::all();
                        @endphp

                        @foreach ($categories as $category)
                            <option 
                            value="{{ $category->id }}" 
                            {{ old('catgory_id', $post->category_id) == $category->id ? 'selected' : ''}}
                            > {{ ucwords($category->name) }}</option>
                        @endforeach 
                        <option value="Personal">Personal</option>
                   
                        </select>
                        <x-form.error name="Category" />
                </x-form.field>

            
                <x-form.button>Update</x-form.button>
              
            </form>
    </x-settings>
    
</x-layout>



{{-- <x-layout>
    <x-settings :heading="'Edit Post: ' . $post->title">
        <form method="POST" action="/admin/posts/{{ $post->id }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <x-form.input name="title" :value="old('title', $post->title)" required />
            <x-form.input name="slug" :value="old('slug', $post->slug)" required />


            <div class="flex mt-6">
                <div class="flex-1">
                    <x-form.input name="thumbnail" type="file" :value="old('thumbnail', $post->thumbnail)" />
                </div>

                <img src="{{ asset('storage/' . $post->thumbnail) }}" alt="" class="rounded-xl ml-6" width="100">
            </div>

           

            <x-form.textarea name="excerpt" required>{{ old('excerpt', $post->excerpt) }}</x-form.textarea>
            <x-form.textarea name="body" required>{{ old('body', $post->body) }}</x-form.textarea>

            <x-form.field>
                <x-form.label name="category"/>

                <select name="category_id" id="category_id" required>
                    @foreach (\App\Models\Category::all() as $category)
                        <option
                            value="{{ $category->id }}"
                            {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}
                        >{{ ucwords($category->name) }}</option>
                    @endforeach
                </select>

                <x-form.error name="category"/>
            </x-form.field>

            <x-form.button>Update</x-form.button>
        </form>
    </x-settings>
</x-layout>
 --}}