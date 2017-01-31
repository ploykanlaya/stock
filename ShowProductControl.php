<?php
			require("Class.php");

			$editpro = new Product;

			$servername = "localhost";
			$username = "root";
			$password = "";
			$database = "stock";
		    // Create connection
			$conn = new mysqli($servername, $username, $password,$database);
			mysqli_set_charset($conn,"utf8");

		    	
		    	$editpro->Product_ID=$_POST['Product_ID'];
		    	$editpro->Product_Name=$_POST["Product_Name"];
		    	$editpro->Price=$_POST["Price"];
		    	$editpro->Unit=$_POST["Unit"];
		    	$editpro->Numstock=$_POST["Numstock"];
		    	$editpro->SafetyStock=$_POST["SafetyStock"];
		    	$editpro->ExpDate=$_POST["ExpDate"];
		    	$editpro->Wholesalers_ID=$_POST["Wholesalers_ID"];
		    	$editpro->ProductType_ID=$_POST["ProductType_ID"];
		    	$editpro->editproduct($conn,$editpro); 


	?>