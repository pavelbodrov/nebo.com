<?php
	//$redirect = isset($_SERVER['HTTP_REFERER'])? $_SERVER['HTTP_REFERER']:'index.html';
	//header("Location: $redirect");
	//exit();
	$data=$_POST['data'];
	$decode_d=json_decode($data);
	$db = new SQLite3('database.db');
	$clientName = $db->escapeString($decode_d->fio);
	$clientContact = $db->escapeString($decode_d->email);
	$queryClients = $db->query("INSERT INTO Clients (ClientName, ClientContact) VALUES ('$clientName', '$clientContact')");
	$lastClientId = $db->lastInsertRowid();
	//данные для вставки в таблицу заказов
	$orderDate = date("d.m.Y"); //currentDate
	date_default_timezone_set("Etc/GMT-6");
	$orderTime = date("H:i");
	$itemId = $decode_d->itemId;
	$sizeVal= $decode_d->size; //не экранируем, т.к. данные с радио инпута
	$price = substr($decode_d->price, 0, strlen($decode_d->price)-2);
	$d_date = $db->escapeString($decode_d->d_date);
	$d_address = $db->escapeString($decode_d->d_address);
	
	$queryOrders = $db->query("INSERT INTO Orders (OrderDate, OrderTime, ItemID, SizeID, OrderQuantity, OrderCost, ClientID, OrderDeliveryAddress, OrderDeliveryDate) 
	VALUES ('$orderDate', '$orderTime', '$itemId', (SELECT SizeID FROM Sizes WHERE SizeName = '$sizeVal'), 1, '$price', '$lastClientId', '$d_address', '$d_date')");
	
	//!!!!!!!!!!!! SEND MESSAGE TO MANAGER
	//('$orderDate', '$orderTime', 1, (SELECT SizeID FROM Sizes WHERE SizeName = '$sizeVal'), '1', '$price', '7', '$d_date', '$d_address')");
	//('12.02.2004', '17:15', 1, 2, 1, 515, 7, 'победы', '12.04.2017')
	//date,time,itemid, sizeId, OrderQuantity(1), OrderCost(price), clientId, OrderDeliveryAddress, OrderDeliveryDate 
	//$query = $db->query("INSERT INTO ");
	echo size . " is " . substr($decode_d->price, 0, strlen($decode_d->price)-2);
	echo name . " is " .$lastClientId;
?>