<?php 
	require_once"create_logic.php";
	include"../common/header.php";
 ?>
 	<h1>New Client</h1>
 		<form method="post">
			<section>
 				<label for="name">id:</label>
 				<input type="text" id="id" name="name">
 			</section>
		
			<section>
 				<label for="name">name:</label>
 				<input type="text" id="name" name="name">
 			</section>

			<section>
 				<label for="name">telefoon nummer:</label>
 				<input id="gender" name="telf">
 			</section>
			
			<section>
 				<label for="name">product:</label>
 				<input type="text" id="products" name="products">
 			</section>

 			<section>
 				<label></label>
 				<input type="submit" value="save">
 			</section>
 		</form>	
<?php 
	include "../common/footer.php";
?>