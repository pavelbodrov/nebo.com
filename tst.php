<?php
	//$id = $_POST['id'];
	
	$db = new SQLite3('database.db');

	$query = $db->query("SELECT * FROM Items");
					while ($row = $query->fetchArray()) 
					{						
						echo $row['Image1'] . '<br>';
					}			
?>