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
	$resp->body = htmlentities("<h1>Hello from <b>better.php</b></h1>");

	echo json_encode($resp);
