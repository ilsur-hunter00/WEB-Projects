<?php

	$connect = mysqli_connect('localhost', 'root', '', 'asystem');

	if(!$connect) {
		die('Ошибка, подключитесь к БД');
	}

	
?>