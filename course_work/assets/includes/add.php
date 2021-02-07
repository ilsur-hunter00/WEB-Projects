<?php

	session_start();
	require 'connect.php';

	
	$name = $_POST['name'];
	$circle_name = $_POST['circle_name'];
	$group_number = $_POST['group_number'];
	$teacher_name = $_POST['teacher_name'];
	$dov_face_name = $_POST['dov_face_name'];
	$propusk_number = $_POST['propusk_number'];
	$propusk_number_dov_face = $_POST['propusk_number'];

	$circles = ("INSERT INTO `circles` (`id`, `id_circle`, `name_circle`) SELECT NULL, 
		(SELECT `id_circle` FROM `circles` WHERE `circles`.`name_circle` = '$circle_name' LIMIT 1),
		'$circle_name' ");
	$circles_check = mysqli_query($connect, $circles);

	$teacher = ("INSERT INTO `teacher` (`id`, `id_teacher`, `name_teacher`) SELECT NULL, 
		(SELECT `id_teacher` FROM `teacher` WHERE `teacher`.`name_teacher` = '$teacher_name' LIMIT 1),
		'$teacher_name' ");
	$teacher_check = mysqli_query($connect, $teacher);

	$dov_face = ("INSERT INTO `dov_face` (`id_dov_face`, `name_dov_face`, `propusk_number_dov_face`) VALUES (NULL, '$dov_face_name', '$propusk_number_dov_face') ");
	$dov_face_check = mysqli_query($connect, $dov_face);

	$children = ("INSERT INTO `children` 
	(`id`, `name`, `id_circle`, `group_number`, `id_teacher`, `id_dov_face`, `propusk_number`) 
	SELECT
		NULL,
		'$name', 
		(SELECT `id_circle` FROM `circles` WHERE `circles`.`name_circle` = '$circle_name' LIMIT 1),
		'$group_number', 
		(SELECT `id_teacher` FROM `teacher` WHERE `teacher`.`name_teacher` = '$teacher_name' LIMIT 1),
		(SELECT `id_dov_face` FROM `dov_face` WHERE `dov_face`.`name_dov_face` = '$dov_face_name' LIMIT 1),
		'$propusk_number'
	");
	$children_check = mysqli_query($connect, $children);
		

	$_SESSION['mes'] = 'карта добавлена';

	header('Location: ../../enter.php#darkness1');


?>