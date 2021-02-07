 <?php 
	session_start();
	error_reporting(0);

	include('includes/connect.php');
	 
	if ($_SESSION['user']['login'] == '1'){
		$_SESSION['user']['login'] = "Незнакомец";
	}
	 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Добро пожаловать</title>
	<link rel="stylesheet" href="Assets/CSS/main.css">
	<link rel="stylesheet" href="Assets/CSS/bootstrap.min.css">
</head>
<body>
	<p><?php$_SESSION['user']['login']?></p>
	<div id='wrapper'>
		<header id="header" class="header">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="d-flex flex-row justify-content-center">
							<a href="AS.php">
								<img src="Assets/img/city.png" alt="logo" class="logo">	
							</a>
							<p class="logo_txt">Система поиска недвижимости КАИ</p>
						</div>
					</div>
				</div>
			</div>
		</header>
		<section class="form">
			<div class="container">
				
					<div class="row justify-content-center">
						<h3>Добро пожаловать, <?php echo $_SESSION['user']['login'];?>!</h3>
						<div class="w-100"></div>
						<p class="lead">Наш сайт поможет быстро найди хорошее жилье по доступной цене.</p>
					</div>
						<div class="row">
							<div class="col-lg-3">
								<p id="flat">Выполните поиск по БД </p>
								<div class="w-100"></div>
								<form name="form" method="post" class="pform_2">

									<input type="text" name="search" class="search" placeholder="Поиск">
   	 								<input type="submit" name="submit" value="Найти">



									<!-- Выбор комнат -->
									<!-- <label class="rooms">Количество комнат</label> -->
									 <!-- test -->
									 
									 <!-- <div class="btn-group" role="group" aria-label="Basic example"> -->
  											<!-- <button type="button" class="btn btn-secondary">Одна</button> -->
  													<!-- <button type="button" class="btn btn-secondary">Две</button> -->
  														<!-- <button type="button" class="btn btn-secondary">Три</button> -->
									
									<!-- <input class="roomCheck" type="checkbox" name="one-room" value="1"><label >1 комната</label>
									
									<input class="roomCheck" type="checkbox" name="two-rooms" value="2"><label> 2 комнаты</label>
									
									<input class="roomCheck" type="checkbox" name="three-rooms" value="3"><label> 3 комнаты</label>	
									 -->
									<!-- Выбор райнона -->
									<!-- <label class="rooms">Выберите район</label>
									
									<p><select name="list2" required>
									
																	    <option name="Priv">Приволжский</option>
																	    <option name="Sov">Советский</option>	
									<option name="Vah">Вахитовский</option>		
														    
																	    </select></p>
									Выбор цены
									<label class="rooms">Цена</label>
									 									
									<input type="text" class="num" name="price_start" placeholder="От">
									<input type="text" class="num" name="price_end" placeholder="До"> -->
									
									<!-- <input type="submit" name="filter" class="btn btn-info" value="Найти" id="test"> -->

								</form>
								<div class="w-100"></div>
								<p id="flat">Добавление квартиры в базу </p>
								<div class="w-100"></div>
								<form action="includes/db.php" name="form" method="post" class="pform_3" enctype="multipart/form-data">

									<label class="title">Введите заголовок объявления</label>
									<input type="text" class="title" name="title" placeholder="1-к квартира, 50м2">

									<label class="photo">Вставьте три фотографии квартиры</label>
									<input type="text" class="photo" name="photo1">
									<input type="text" class="photo" name="photo2"> 
									<input type="text" class="photo" name="photo3"> 

									<label class="district">Введите район</label>
									<input type="text" class="district" name="district" placeholder="Приволжский">

									<label class="adress">Введите адрес</label>
									<input type="text" class="adress" name="adress" placeholder="Казань, ул. Пушкина, 17">

									<label class="Цена">Введите стоимость квартиры</label>
									<input type="text" class="price" name="price" placeholder="2650000">

									<label class="Описание">Введите описание</label>
									<input type="textfield" class="description" name="description">

									<button type="submit" class="btn btn-info">Отправить</button> 

									<p class="msg">
										<?php
											echo $_SESSION['mes'];
											unset($_SESSION['mes']);
										?>
									</p>

								</form>
								
							</div>


							<div class="col-lg-9">
								
								<ul id="flat-grid">
								
								<?php

									if(isset($_POST['submit'])) {
										$search = explode(" ", $_POST['search']);
										$count = count($search);
										$array = array();

										$i = 0;
										foreach ($search as $key) {
											$i++;
											if($i < $count)
												$array[] = "CONCAT (`title`, `photo1`, `photo2`, `photo3`,`price`, `description`, `district`, `adress`) LIKE '%".$key."%' OR "; 
											else $array[] = "CONCAT (`title`, `photo1`, `photo2`, `photo3`, `price`, `description`, `district`, `adress`) LIKE '%".$key."%'";
										}
										$sql = "SELECT * FROM `sell` WHERE ".implode("", $array);
										//echo $sql;
										$query1 = mysqli_query($connect, $sql);
										
										while($row = mysqli_fetch_assoc($query1)) {
											if ($row["photo1"] != "" && $row["photo2"] != "" && $row["photo3"] != "") {
												$img_path1 = $row["photo1"];
												$img_path2 = $row["photo2"];
												$img_path3 = $row["photo3"];
												$max_width = 300;
												$max_height = 400;
												list($width, $height) = getimagesize($img_path1);
												list($width, $height) = getimagesize($img_path2);
												list($width, $height) = getimagesize($img_path3);
												$ratioh = $max_height/$height;
												$ratiow = $max_width/$width;
												$ratio = min($ratioh, $ratiow);
												$width = intval($ratio*$width);
												$height = intval($ratio*$height);
											} else {
												$img_path = "";
												$width = 300;
												$height = 200;
											}
											echo '<li id="li-grid"><p class="title-grid"><strong>'.$row["title"].'</strong></p>
												<div class="img-grid">
													<img src="'.$img_path1.'" width="'.$width.'" height="'.$height.'">
													<img src="'.$img_path2.'" width="'.$width.'" height="'.$height.'">
													<img src="'.$img_path3.'" width="'.$width.'" height="'.$height.'">
												</div>
												<p class="district-grid"><strong>Район:</strong> '.$row['district'].'</p>
												<p class="adress-grid"><strong>Адрес:</strong> '.$row['adress'].'</p>
												<p class="price-grid"><strong>Цена:</strong>'.$row['price'].'руб.</p>
												<p class="description-grid"><strong>Описание:</strong> '.$row['description'].'</p>
												</li>';
										}
									}

								?>

								<?php

									if(isset($_GET['del'])) {
										$id = $_GET['del'];

										$query = "DELETE FROM `sell` WHERE `id` = '$id'";
										mysqli_query($connect, $query) or die(mysqli_error($connect));

									}

									$result_1 = mysqli_query($connect, "SELECT * FROM sell  ");

                                        /*$rooms = 0;
                                        if(isset($_GET['one-room']) && $_GET['one-room']== 1){
                                            $rooms .= 1;
                                        }
                                        if(isset($_GET['two-rooms']) && $_GET['two-rooms']== 2){
                                            $rooms .= 2;
                                        }
                                        if(isset($_GET['three-rooms']) && $_GET['three-rooms']== 3){
                                            $rooms .= 3;
                                        }*/
                                        if(mysqli_num_rows($result_1) > 0) {
                                            $row_1 = mysqli_fetch_array($result_1);
                                            do {
                                                /*if (strpos($rooms, 1) === false && $row_1["количество комнат"] == 1){
                                                    continue;
                                                }
                                                if (strpos($rooms, 2) === false && $row_1["количество комнат"] == 2){
                                                    continue;
                                                }
                                                if (strpos($rooms, 3) === false && $row_1["количество комнат"] == 3){
                                                    continue;
                                                }*/
												if ($row_1["photo1"] != "" && $row_1["photo2"] != "" && $row_1["photo3"] != "") {
													$img_path1 = $row_1["photo1"];
													$img_path2 = $row_1["photo2"];
													$img_path3 = $row_1["photo3"];
													$max_width = 300;
													$max_height = 400;
													list($width, $height) = getimagesize($img_path1);
													list($width, $height) = getimagesize($img_path2);
													list($width, $height) = getimagesize($img_path3);
													$ratioh = $max_height/$height;
													$ratiow = $max_width/$width;
													$ratio = min($ratioh, $ratiow);
													$width = intval($ratio*$width);
													$height = intval($ratio*$height);
												} else {
													$img_path = "";
													$width = 300;
													$height = 200;
												}
												

													echo '<li>
															<p class="title-grid"><strong>'.$row_1["title"].'</strong></p>
															<div class="img-grid">
																<img src="'.$img_path1.'" width="'.$width.'" height="'.$height.'">
																<img src="'.$img_path2.'" width="'.$width.'" height="'.$height.'">
																<img src="'.$img_path3.'" width="'.$width.'" height="'.$height.'">
															</div>
															<p class="district-grid"><strong>Район:</strong> '.$row_1["district"].'</p>
															<p class="adress-grid"><strong>Адрес:</strong> '.$row_1["adress"].'</p>
															<p class="price-grid"><strong>Цена:</strong> '.$row_1["price"].' руб</p>
															<p class="description-grid"><strong>Описание:</strong> '.$row_1["description"].'</p>
															<a href="?del='.$row_1["id"].'">Удалить</a>
														</li>
													';
												
												
											} while ($row_1 = mysqli_fetch_array($result_1));
										}

									
								?>

								</ul>
							</div>
						</div>
			</div>
		</section>
		<footer id="footer" class="footer">
			<div class="container">
				<div class="row justify-content-center">
					<p>Студенты группы 4211 Вафин И.М., Абдуллаев Л.Х.</p>
				</div>
			</div>
		</footer>
	</div>
</body>
</html>