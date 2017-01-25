	<?php
 			require("class.php");
 			//require_once('class.upload.php') ;

		$detuser = new User;

		$servername = "localhost";
        $username = "root";
        $password = "";
        $database = "stock";

        // Create connection
        $conn = new mysqli($servername, $username, $password,$database);
        mysqli_set_charset($conn,"utf8");
        // Check connection
        if (mysqli_connect_errno($conn))
          {
             echo "Failed to connect to MySQL: " . mysqli_connect_error($conn);

          }

			//$query = mysqli_query($conn,"SELECT * FROM `page` WHERE 1");


			$detuser->UserID=$_POST['UserID'];
			$detuser->deleteuser($conn,$detuser);	
	
	?>