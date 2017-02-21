<?php 
			require("Class.php");

			$adduser = new User;

			$servername = "localhost";
			$username = "root";
			$password = "";
			$database = "stock";
		    // Create connection
			$conn = new mysqli($servername, $username, $password,$database);
			mysqli_set_charset($conn,"utf8");

		    	
		    	$adduser->Name=$_POST["Name"];

		    	$adduser->Telephone=$_POST["Telephone"];
		    	$adduser->Address=$_POST["Address"];
		    	$adduser->Username=$_POST["Username"];
		    	$adduser->password=$_POST["password"];
				$adduser->position=$_POST["position"];
			 	$adduser->Image=$_FILES['Image']['name'];
		    	$adduser->adduser($conn,$adduser);





	?>