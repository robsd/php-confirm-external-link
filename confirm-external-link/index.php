<?php
	if (!$url = htmlspecialchars($_GET['url']))
	{
		die();
	}
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
		<title>External Link</title>
	</head>
	<body>
		<div class="container text-center my-5">
			<h1>External Link</h1>
			<p class="my-5">Are you sure you wish to visit the link <a href="<?php echo $url; ?>"><?php echo $url; ?></a>?</p>
			<a class="btn btn-primary" href="javascript: history.back()">Back to Safety</a>
			<a class="btn btn-danger" href="<?php echo $url; ?>">Proceed to External Link</a>
		</div>
	</body>
</html>