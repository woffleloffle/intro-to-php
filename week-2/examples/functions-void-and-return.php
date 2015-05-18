<?php

	// Functions

	$num1 = $num2 = "";

	// This is a void function insomuch as
	//  it doesn't return anything.
	// It 'works' on global variables or kills the page render.
	function checkThatNumbersExist(){

		global $num1;
		global $num2;

		if (!isset($_GET['number1']) || !isset($_GET['number2'])) {

			die('<hr><p>Please choose numbers.</p>');

		} else {
			$num1 = $_GET['number1'];
			$num2 = $_GET['number2'];
		}

	}

	function add($a, $b){

		// Add the two numbers.

		// #TODO: Proper type checks.

		return $a + $b;

	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Functions</title>
</head>
<body>

	<form action="functions.php" method="GET">
		<input name="number1" /> + 
		<input name="number2" />
		<button>Submit</button>
	</form>

	<?php

		checkThatNumbersExist();

	?>

		<p>Added together,
			<?php echo $num1 ?> and
			<?php echo $num2 ?> =
			<?php echo add($num1, $num2); ?></p>

</body>
</html>