<!DOCTYPE html>
<html>
<head>
	<title>Post page</title>
</head>
<body>

	<article>
		<h1><?= $post->title; ?></h1>

		<div>
			<?= $post->body; ?>
		</div>
	</article>

	<a href="/posts">Go back</a>
</body>
</html>