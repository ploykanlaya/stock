<?php
			require("Class.php");

			$addpro = new Product;

			$servername = "localhost";
			$username = "root";
			$password = "";
			$database = "stock";
		    // Create connection
			$conn = new mysqli($servername, $username, $password,$database);
			mysqli_set_charset($conn,"utf8");
 
		    	$addpro->Product_Name=$_POST["Product_Name"];
		    	$addpro->Price=$_POST["Price"];
		    	$addpro->Unit=$_POST["Unit"];
		    	$addpro->Numstock=$_POST["Numstock"];
		    	$addpro->SafetyStock=$_POST["SafetyStock"];
		    	$addpro->ExpDate=$_POST["ExpDate"];
		    	$addpro->Wholesalers_ID=$_POST["Wholesalers_ID"];
		    	$addpro->ProductType_ID=$_POST["ProductType_ID"];
		    	$addpro->addproduct($conn,$addpro); 
	?>