<?php 
	require_once"create.logic.php";
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
 				<label for="name">species:</label>
 				<input id="species" name="species">
 			</section>
			
			<section>
 				<label for="name">illness:</label>
 				<input type="text" id="illness" name="illness">
 			</section>

 			<section>
 				<label></label>
 				<input type="submit" value="save">
 			</section>
 		</form>	
<?php 
	include "../common/footer.php";
?>