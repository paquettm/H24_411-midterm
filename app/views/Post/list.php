<html>
<head>
	<title><?= $name ?> view</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
	<div class='container'>
		<h1>Bulletin Board</h1>
		<p>This is a bulletin board of public messages.</p>
		<p>You can create post messages for all to see here.
		When creating a post message, you also assign a password to this post.
		Only those who know the password assigned to a post can edit or delete this post.</p>
		<a href='/Post/create'>Create a new post</a>
		<table>
		<tr><th>Message</th><th>Actions</th></tr>
		<?php
			foreach ($data as $post) {				
				echo "<tr><td>$post->message</td>
				<td>
				<a href='/Post/edit/$post->post_id'>edit</a> | 
				<a href='/Post/delete/$post->post_id'>delete</a> 
				</td></tr>";
			}
		?>
	</table>
	</div>
</body>
</html>