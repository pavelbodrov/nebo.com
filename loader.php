<?php
	$id = $_POST['id'];
	
	$db = new SQLite3('database.db');

	// Запрос на выборку данных
	$query = $db->query("SELECT image1,image2,image3, image4, ItemPrice, (SELECT ProductName FROM Products WHERE Products.ProductID = Items.ProductID) as ItemType FROM items WHERE itemid='$id'");
	//$query2 = $db->query('SELECT ItemPrice FROM items WHERE itemid=1');
	// Помещаем результат в массив
	$result = $query->fetchArray();
	//$price = $query2->fetchArray();
	//$item_price=$price[0];
	// Нулевой элемент - то, что нужно
				// Проверяем, выводим содержимое
				//var_dump($imagelink);

				// Выводим картинку
				//echo "<img src=$imagelink>";
	echo json_encode($result);
	//echo $id;
	//echo json_encode($item_price);
?>