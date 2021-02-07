<?php

	session_start();
	require 'connect.php';

	$title = $_POST['title'];
	$district = $_POST['district'];
	$adress = $_POST['adress'];
	$price = $_POST['price'];
	$description = $_POST['description'];
	$photo1 = $_POST['photo1'];
	$photo2 = $_POST['photo2'];
	$photo3 = $_POST['photo3'];

/*	$sell = ("SELECT * FROM `sell` WHERE `title` = '$title' AND `district` = '$district' AND `adress` = '$adress' AND `price` = '$price' AND `description` = '$description'");*/
	$sell = ("INSERT INTO `sell` (`id`, `title`, `photo1`, `photo2`, `photo3`, `district`, `adress`, `price`, `description`) VALUES (NULL, '$title', '$photo1', '$photo2', '$photo3','$district', '$adress', '$price', '$description')");
	$check_flat = mysqli_query($connect, $sell);





	

	$_SESSION['mes'] = 'Квартира добавлена';

	header('Location: ../enter.php');

	


	//$sell = ("SELECT * FROM sell");
	//mysqli_query($connect, $sell);

?>