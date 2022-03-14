@extends('layout')
	
	@section('banner')
	<h2>The drums, theres music, there's love</h2>
	@endsection
	@section('content')
	<article>
		<h1><?= $post->title; ?></h1>

		<div>
			by <?= $post->user_id->name ?> in <?= $post->category_id->name ?>
		</div>
			<?= $post->body; ?>
		</div>
	</article>

	<a href="/posts">Go back</a>
	@endsection