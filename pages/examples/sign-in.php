<?php
			require("../../class.php");

			$memberlogin = new user;

			$servername = "localhost";
			$username = "root";
			$password = "";
			$database = "stock";
		    // Create connection
			$conn = new mysqli($servername, $username, $password,$database);
			mysqli_set_charset($conn,"utf8");

			$_query=mysqli_query($conn,"SELECT * FROM `user` WHERE 1");
		        $memberlogin->username = $_POST["user"];
				$memberlogin->password = $_POST["pass"];
				$memberlogin->memberlogin($conn,$memberlogin,$_query);
		  
?>
