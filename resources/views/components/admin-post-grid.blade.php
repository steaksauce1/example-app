	@props(['posts'])

	

	
 	@if ($posts->count() > 0)
 	<div class="lg:grid lg:grid-cols-6">
 		
 			     <table class="min-w-full divide-y divide-gray-200">
       
          <tbody class="bg-white divide-y divide-gray-200">

            @foreach( $posts ?? '' as $post)
            <tr>
              <td class="px-3 py-1 max-w-xs">
                <div class="flex items-center">
                    <div class="text-xm font-small text-gray-900">
                        <a href="/posts/{{ $post->slug}}" >
                          @if($post->thumbnail)
                          <img src="{{ asset('storage/' . $post->thumbnail)}}" alt="icon-img">
                          @elseif(!$post->thumbnail)
                            <img src="/images/missing.jpg" alt="missing-img">
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
               <td class="px-6 py-4 ">
                <div class="flex items-center max-w-s">
                    <div class="text-sm font-medium text-gray-900">
                        
                        {{ $post->user_id }}
                        
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
 	@endif