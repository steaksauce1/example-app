<x-layout>
    <x-settings heading="Slap a post on the site">
         <form method="POST" action="/admin/posts" enctype="multipart/form-data">
                @csrf
                <x-form.input name='title'/>
                <x-form.input name='slug'/>
                <x-form.input name='thumbnail' type='file'/>
                <x-form.textarea name='excerpt'/>
                <x-form.textarea name='body'/>
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
    </x-settings>
    
</x-layout>