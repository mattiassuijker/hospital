<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		$database = new mysqli('localhost','root','','hospital');
		
		// Prepare data for insertion
		$name = $database->escape_string($_POST["name"]);
		$telf = $database->escape_string($_POST["telf"]);
		$products = $database->escape_string($_POST["products"]);

		// Prepare query and execute
		$query = "INSERT INTO client(name, telf, products) VALUES ('$name','$telf','$products')";
		$result = $database->query($query);
    // Tell the browser to go back to the index page

    header("Location: ./");	
    exit();
	endif;

?>
