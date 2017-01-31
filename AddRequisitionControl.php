<?php
			require("Class.php");

			$addReq = new Requisition($conn,$addReq);

			$servername = "localhost";
			$username = "root";
			$password = "";
			$database = "stock";
		    // Create connection
			$conn = new mysqli($servername, $username, $password,$database);
			mysqli_set_charset($conn,"utf8");
 
		    	$addReq->Requisition_ID=$_POST["Requisition_ID"];
		    	$addReq->Requisition_Date=$_POST["Requisition_Date"];
		    	$addReq->UserID=$_POST["UserID"];
		    	$addReq->Name=$_POST["Name"];
		    	$addReq->Requisition($conn,$addReq); 
	?>