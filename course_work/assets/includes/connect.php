<?php 

    $connect = mysqli_connect('localhost', 'root', '', 'children-garden');

    if(!$connect) {
        die('Ошибка, поключитесь к БД');
    }

?>