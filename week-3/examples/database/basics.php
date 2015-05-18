<?php

	// Include some files
	//  to keep things nice and clean.
	include "functions.php";


	// Create the SQL
	$sql = "SELECT * FROM people";

	// Let's connect to the database
	$db = dbConnect();

	// Then, query the database!
	$statement = $db->query($sql);
	$data = $statement->fetchAll(PDO::FETCH_ASSOC);

	// Close the connection!
	$db = $statement = null;

	// Respond nicely
	$resp = new Response();
	$resp->code = 200;
	$resp->status = "success";
	$resp->body = $data;

	echo json_encode($resp);

?>