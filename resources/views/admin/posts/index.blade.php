<x-layout>
    <x-settings heading="Manage posts">

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Thumbnail</th>
              <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
              <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
              <th scope="col" class="px-3 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Options</th>
              <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Edit</span>
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">

            @foreach( $posts as $post)
            <tr>
              <td class="px-3 py-1 max-w-xs">
                <div class="flex items-center">
                    <div class="text-xm font-small text-gray-900">
                        <a href="/posts/{{ $post->slug}}" >
                          @if($post->thumbnail)
                          <img src="{{ asset('storage/' . $post->thumbnail)}}" alt="missing-img">
                          @endif
                        </a>
                    </div>   
                </div>
              </td>
              <td class="px-6 py-4 ">
                <div class="flex items-center max-w-s">
                    <div class="text-sm font-medium text-gray-900">
                        <a href="/posts/{{ $post->slug}}" >
                        {{ $post->title }}
                        </a>
                    </div>   
                </div>
              </td>
              <td class="px-2 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800"> Active </span>
              </td>
              <td class="px-2 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a href="/admin/posts/{{ $post->id }}/edit" class="text-blue-500 hover:text-indigo-900">Edit</a>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
               {{--  <a href="/admin/posts/{{ $post->id }}/delete" class="text-blue-500 hover:text-indigo-900">Delete</a> --}}
               <form method="POST" action="/admin/posts/{{ $post->id }}">
                 @csrf
                 @method('DELETE')
                  <button>Delete</button>
               </form>
              </td>
            </tr>
            @endforeach

            <!-- More people... -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

    </x-settings>
    
</x-layout>