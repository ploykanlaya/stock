<?php 

//print_r($result);exit;

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
				$adduser->position=$_POST["position"];
			 	$adduser->Image=$_FILES['Image']['name'];

		
			 	$target_dir = "images/";
				$target_file = $target_dir . basename($_FILES["Image"]["name"]);
				echo $target_file;
				if($_FILES['Image']['error'] == 0) 
					echo "0";
				if($_FILES['Image']['error'] == 1) 
					echo "1";
				if($_FILES['Image']['error'] == 2) 
					echo "2";
				if($_FILES['Image']['error'] == 3) 
					echo "3";
				if($_FILES['Image']['error'] == 4) 
					echo "4";
			 	try {
			 		$tmp_name = $_FILES["Image"]["tmp_name"];
    
				    if (!move_uploaded_file($tmp_name, $target_file)) {
				        throw new Exception('Could not move file');
				    }

				    echo "Upload Complete!";
				} catch (Exception $e) {
				    die ('File did not upload: ' . $e->getMessage());
				    error_reporting(E_ALL);
				}
		    	$adduser->adduser($conn,$adduser);





	?>