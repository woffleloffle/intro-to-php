<?php

	// Include some files
	//  to keep things nice and clean.
	include "functions.php";


	// Create the SQL
	$sql = "SELECT * FROM people WHERE firstname = :name";

	// Let's connect to the database
	$db = dbConnect();

	// Then, prepare the statement to run..
	$statement = $db->prepare($sql);

	// And populate the placeholder(s)
	$statement->execute(array(':name' => 'Dale'));

	// Go get the data.
	$data = $statement->fetchAll(PDO::FETCH_ASSOC);

	// Close the connection!
	$db = $statement = null;

	// Respond nicely
	$resp = new Response();
	$resp->code = 200;
	$resp->status = "success";
	$resp->body = $data;

	header('Content-Type: application/json');
	echo json_encode($resp);

?>