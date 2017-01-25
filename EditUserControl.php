<?php
			require("Class.php");

			$editu = new User;

			$servername = "localhost";
			$username = "root";
			$password = "";
			$database = "stock";
		    // Create connection
			$conn = new mysqli($servername, $username, $password,$database);
			mysqli_set_charset($conn,"utf8");

		    	
		    	$editu->UserID=$_POST['UserID'];
		    	$editu->Name=$_POST["Name"];
		    	$editu->Telephone=$_POST["Telephone"];
		    	$editu->Address=$_POST["Address"];
		    	$editu->Username=$_POST["Username"];
		    	$editu->edituser($conn,$editu); 


	?>