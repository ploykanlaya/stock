<?php
			require("Class.php");

			$editw = new Wholesalers;

			$servername = "localhost";
			$username = "root";
			$password = "";
			$database = "stock";
		    // Create connection
			$conn = new mysqli($servername, $username, $password,$database);
			mysqli_set_charset($conn,"utf8");

		    	
		    	$editw->Wholesalers_ID=$_POST['Wholesalers_ID'];
		    	$editw->Wholesalers_Name=$_POST["Wholesalers_Name"];
		    	$editw->Telephone=$_POST["Telephone"];
		    	$editw->Email=$_POST["Email"];
		    	$editw->Address=$_POST["Address"];
		    	$editw->editwho($conn,$editw); 


	?>

	 