	@props(['posts'])

	@unless($posts[0]->status)
	<x-one-card :post="$posts[0]" />
	<p>{{$posts[0]->status}}</p>
	@endunless

 	@if ($posts->count() > 1)
 	<div class="lg:grid lg:grid-cols-6">
 		@foreach($posts->skip(1) as $post)
 			@unless($post->status)
 			<x-two-card :post="$post" class="{{ $loop->iteration < 3 ? 'col-span-3' : 'col-span-2'}}"/>
 			@endunless
 		@endforeach
 	</div>
 	@endif