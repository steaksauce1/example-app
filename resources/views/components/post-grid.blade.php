	@props(['posts'])


	<x-one-card :post="$posts[0]" />



 	@if ($posts->count() > 1)
 	<div class="lg:grid lg:grid-cols-6 justify-evenly">
 		@foreach($posts->skip(1) as $post)
 			{{-- @unless($post->status == True) --}}
 			<x-two-card :post="$post" class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2'}}"/>
 				{{-- <x-two-card :post="$post" class="{{ $loop->iteration < 5 ? 'col-span-2' : 'col-span-2'}}"/> --}}
 		{{-- 	@endunless --}}
 		@endforeach
 	</div>
 	@endif