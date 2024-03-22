<html>
<head>
	<title><?= $name ?> view</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
	<div class='container'>
		<h1>Message posting</h1>
		<p>Write your message and define a password to protect thsi message from modifications or deletion.</p>
		<p>You can modify your messages later by providing the password that you created to protect this message.</p>
		<form method='post' action=''>
			<div class="form-group">
				<label>Message:<textarea class="form-control" name="message" placeholder="Hello World!"></textarea></label>
			</div>
			<div class="form-group">
				<label>Modification/deletion password:<input type="password" class="form-control" name="password" placeholder="password" /></label>
			</div>

			<div class="form-group">
				<input type="submit" name="action" value="Create Post" /> 
				<a href='/Post/index'>cancel</a>
			</div>
		</form>
	</div>
</body>
</html>