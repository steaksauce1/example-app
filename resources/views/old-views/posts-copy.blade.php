<!DOCTYPE html>
<html>
<head>
	<title>Blog Posts</title>
	
	<script type="text/javascript" src="/app.js"></script>
</head>
<link rel="stylesheet" type="text/css" href="/app.css">
<body>
	<h1>Starting section  for dynamic</h1>
		@foreach ($posts as $post)
			<article class=" {{ $loop->even ? 'foobar' : ''}}">
					<h2>
						<a href="/posts/{{ $post->slug }}">	
						{{ $post->title }}
						</a>
					</h2>
					<p>{{ $post->excerpt }}</p>
					<p class="foobar">YEAH</p>
					<hr>
			</article>
		@endforeach

	<h1>Starting section for static</h1>
		<article>
			<h2><a href="/post/my-first-post">My First Post</a></h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</article>

		<article>
			<h2><a href="/post/my-second-post">My Second Post</a></h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</article>

		<article>
			<h2><a href="/">My Third Post</a></h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</article>

</body>
</html>