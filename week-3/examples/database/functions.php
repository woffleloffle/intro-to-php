<?php

	// We can put any useful functions in here
	//  and use them anywhere we include this file.


	// Our Response Class
	Class Response {
		public $code;
		public $status;
		public $body;
	};



	// Call this function whenever you want
	//  to use the database
	function dbConnect() {

		// Include the DB connection variables here
		//  to keep things even cleaner!
		include "dbconfig.php";

		// If you include these variables outside this
		//  function, don't forget the references.
		# global $datahost, $database, $username, $password;

		try {
		
			// Open the connection
			$pdo = new PDO("mysql:host=$datahost;dbname=$database", $username, $password);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

			return $pdo;

		} catch (PDOException $e) {

			// Oops, an error occurred.
			//  Let's build a nice response

			$resp = new Response();
			$resp->code = 500;
			$resp->status = "error";
			$resp->body = $e->getMessage();

			die(json_encode($resp));

		}

	}

?>