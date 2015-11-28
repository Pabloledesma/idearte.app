<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Post</title>
	</head>
	<body>
		<h1>{{ $post->title }}</h1>

		@can('update-post', $post)
			<a href="">Edit the post</a>
		@endcan
	</body>
</html>