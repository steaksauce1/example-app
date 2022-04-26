<x-layout>
	@include('posts._header')
	<p style="text-align: center; color: lightgrey;">I'm a x-layout</p>
	

	 <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
	 	<p style="text-align: center; color: lightgrey;">I'm MAIN</p>
	 	@if ($posts->count())
	
			<x-post-grid :posts="$posts"/>


	 	
		 	{{ $posts->links()}}
	 	 @else
	 	 	<p class="text-center">No post here boss, what are you doing!?</p>
	 	 @endif
	 </main>









{{-- 	@foreach ($posts as $post)
			<article class=" {{ $loop->even ? 'foobar' : ''}}">
					<h2>
						<a href="/posts/{{ $post->slug }}">	
							{{ $post->title }}
						</a>
					</h2>

					<p>
						<a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
					</p>
					<p>
						{{ $post->excerpt }}
					</p>
					<hr>
			</article>
		@endforeach
		<p>end of the loop for me</p> --}}
</x-layout>
