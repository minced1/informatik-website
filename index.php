<?php
/* 
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	header('Location: '.$uri.'/dashboard/');
	exit; */
?>
<!DOCTYPE html>
<head>
<title>Comments</title>
<link rel="stylesheet" href="styles.css">
<script src="script.js"></script> 
</head>
<html>
<body>
<!--
<div class = "login">
<div>Sign Up</div>
<form>
<label for="email">Email</label><br/>
<input type="email" id="email" name="email"><br/>
<label for="password">Password</label><br/>
<input type="password" id="password" name="password"><br/>
<input type="submit" value="Submit">
</form>
</div>
-->

<div class="flex-container">
	<div>	
		<textarea type="text" name="comment" placeholder="Write your comment here..."></textarea>
	</div>
</div>
<div class="flex-container">
	<div>
	<input type="text" name="username" placeholder="Username">
	</div>
	<div>
	<input type="submit" value="Submit">
	</div>
</div>
</body>
</html>