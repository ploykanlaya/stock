<?php
			require("Class.php");

			$adduser = new user;

			$servername = "localhost";
			$username = "root";
			$password = "";
			$database = "stock";
		    // Create connection
			$conn = new mysqli($servername, $username, $password,$database);
			mysqli_set_charset($conn,"utf8");

		    	
		    	$adduser->namesurname=$_POST["namesurname"];
		    	$adduser->Telephone=$_POST["Telephone"];
		    	$adduser->Address=$_POST["Address"];
		    	$adduser->Username=$_POST["Username"];
		    	$adduser->password=$_POST["password"];
				$adduser->position=$_POST["position"];
		    	$adduser->adduser($conn,$adduser); 


	?>