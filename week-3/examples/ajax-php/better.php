<?php

	// We use this Class to always render a
	//  response code as well as a message.. super easy!
	Class Response {
		public $code;
		public $status;
		public $body;
	};


	// Create an instance of the Response Class
	$resp = new Response();

	// Assign the variables!
	$resp->code = 200;
	$resp->status = "success";
	$resp->body = "<div>This copy sits in <b>better.php</b></div>"; // htmlentities

	echo json_encode($resp);

