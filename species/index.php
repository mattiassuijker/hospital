<?php
	include "../common/header.php";
	require_once "index.logic.php";

	?>
<h1>species</h1>
	<p class="options"><a href="create.php">create</a></p>	
	<table>
		<thead>
			<tr>
				<th>id</th>
				<th>name</th>
				<th>species</th>
				<th>illness</th>
				<th>edit</th>
				<th>delete</th>
			</tr>
		</thead>
	</tbody>
<?php 

	foreach($speciess as $species):
 ?>
			<tr>
				<td><?=$species['id'] ?></td>
				<td><?=$species['name'] ?></td>
				<td><?=$species['species'] ?></td>
				<td><?=$species['illness'] ?></td>
				<td class="center"><a href="edit.php?id=<?=$species['id']?>">edit</a></td>
				<td class="center"><a href="delete.php?id=<?=$species['id']?>">delete</a></td>
			</tr>
<?php 
endforeach;
 ?>
 		</tbody>
 	</table>

<?php
	include "../common/footer.php";
?>