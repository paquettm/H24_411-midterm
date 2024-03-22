<html>
<head>
	<title><?= $name ?> view</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
	<div class='container'>
		<h1>Post modification</h1>
		<p>Provide the modified message and the password assigned at the time of creation of this post.</p>
		<form method='post' action=''>
			<div class="form-group">
				<label>Message:<textarea class="form-control" name="message" placeholder="Hello World!"><?=$data->message ?></textarea></label>
			</div>
			<div class="form-group">
				<label>Modification/deletion password:<input type="password" class="form-control" name="password" placeholder="password" /></label>
			</div>

			<div class="form-group">
				<input type="submit" name="action" value="Modify Post" /> 
				<a href='/Post/index'>cancel</a>
			</div>
		</form>
	</div>
</body>
</html>