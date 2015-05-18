<!DOCTYPE html>
<html>
<head>
	<title>Parameters</title>
</head>
<body>

<?php

	// Parameters

	// GET

	echo "<p>GET Parameters:</p><hr>";
	echo "<pre>";
	print_r($_GET);
	echo "</pre><hr>";

	// POST

	echo "<p>POST Parameters:</p><hr>";
	echo "<pre>";
	print_r($_POST);
	echo "</pre><hr>";

?>

	<!--
		Change the method  to change the type of Parameter
		you get when you submit the form.

		It can be either 'GET' or 'POST'
	-->
	<form action="parameters.php" method="POST">
		<input name="username" type="text" placeholder="Username" />
		<input name="password" type="password" placeholder="Password" />
		<button>Submit</button>
	</form>

</body>
</html>