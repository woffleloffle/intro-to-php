<?php

	// Functions

	function sayHello ($name = "") {

		// Echoing here will add the string to the returned
		//  parameters. Be careful.
		// echo "Erm.. ";

		return "Hello $name";

	}

	function add($a, $b) {
		
		// #TODO Type Checking.

		return $a + $b;
	}

?><!DOCTYPE html>
<html>
<head>
	<title>Functions</title>
</head>
<body>

	<p><?php echo sayHello(); ?></p>

	<p><?php echo sayHello("Foo"); ?></p>

	<p>3 + 4 = <?php echo add(3, 4); ?></p>

</body>
</html>