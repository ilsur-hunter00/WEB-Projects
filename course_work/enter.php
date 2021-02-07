<?php
    session_start();
    error_reporting(0);

    include('assets/includes/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Childrens' garden base</title>
    <link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;
    700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <!-- Голова сайта-->
        <header class="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="d-flex">
                            <a href="startpage.php"><img src="assets/img/logo.png" alt="Логотип дет.Сада" class="children-garden-logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="d-flex">
                            <p class="title-logo">База данных WISH of KIDS</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Форма регистрации-->
        <section class="main">
            <div class="container">
                <div class="row table">
                    <div class="col-lg-6">
                        <form method="post" class="search-form">
                            <!-- <input type="text" class="search" name="search" placeholder="Поиск по базе"> -->

                            <input type="submit" name="submit" class="btn btn-info" value="Показать карточки" style="margin-left: 10px;">
                            <input type="submit" name="close-submit" class="btn btn-info" value="Закрыть карточки" style="margin-left: 10px;">
                            <input type="submit" name="submit-sort" class="btn btn-info" value="Сортировать карточки" style="margin-left: 10px;">
                        </form>
                    </div>
                    <div class="button-add col-lg-6">

                        <a href="#darkness1"><button class="btn btn-info" style="outline: none;">Добавить ребенка</button></a>
                    </div>
                </div>
                <hr class="hr-line-thin">
                <div id="darkness1">
                    <div id="registr1">
                        <form action="assets/includes/add.php" name="form" method="post" class="pform" enctype="multipart/form-data">
                            <h2 class="enter-reg">Заполните форму</h2>
                            <div class="forms-fields">
                                <label class="username-label">Имя ребенка</label><br>
                                <input type="text" class="username-textfield" name="name" 
                                required="Это поле обязательно" placeholder=""><br>
                            
                                <label class="password-label">Номер группы</label><br>
                                <input type="number" class="password-textfield" name="group_number" 
                                required="Это поле обязательно" placeholder=""><br>

                                <label class="password-label">Кружок</label><br>
                                <input type="text" class="password-textfield" name="circle_name" 
                                required="Это поле обязательно" placeholder=""><br>
                            
                                <label class="password-label">Имя воспитателя</label><br>
                                <input type="text" class="password-textfield" name="teacher_name" 
                                required="Это поле обязательно" placeholder=""><br>

                                <label class="password-label">Имя доверенного лица</label><br>
                                <input type="text" class="password-textfield" name="dov_face_name" 
                                required="Это поле обязательно" placeholder=""><br>

                                <label class="password-label">Номер пропуска</label><br>
                                <input type="number" class="password-textfield" name="propusk_number" 
                                required="Это поле обязательно" placeholder=""><br>
                            </div>
                            <br><button type="submit" class="btn btn-info">Добавить</button> 
                            <a href="enter.php"><button type="button" class="btn btn-info">Закрыть окно</button></a>
                            <div class="msg">
                                <?php
                                    echo $_SESSION['mes'];
                                    unset($_SESSION['mes']);
                                ?>
                            </div> 
                        </form>
                    </div>
                </div>
                <?php
                    if(isset($_POST['submit'])) {
                        
                        // $sql = "SELECT * FROM `children` LEFT JOIN `circles` ON `children`.`id_circle`=`circles`.`id_circle`
                        // LEFT JOIN `teacher` ON `children`.`id_teacher`=`teacher`.`id_teacher` LEFT JOIN `dov_face` ON `children`.`id_dov_face`=`dov_face`.`id_dov_face` GROUP BY `children`.`id` WHERE ".implode("", $array);
                        // echo $sql;
                        $result_1 = mysqli_query($connect, "SELECT * FROM `children` LEFT JOIN `circles` ON `children`.`id_circle`=`circles`.`id_circle`
                        LEFT JOIN `teacher` ON `children`.`id_teacher`=`teacher`.`id_teacher` LEFT JOIN `dov_face` ON `children`.`id_dov_face`=`dov_face`.`id_dov_face` GROUP BY `children`.`id` ");
                
                            if(mysqli_num_rows($result_1) > 0) {
                                
                                
                                while ($row_1 = mysqli_fetch_assoc($result_1)) { 
                                    
                                    echo '
                                <div class="child-card">
                                    <div class="child-info-logo d-flex">
                                        <img src="assets/img/abc.png" alt="">
                                        <h3>Карточка ребенка</h3>
                                        <button class="btn btn-info" style="background-color: aliceblue; color: black; outline: none"><a class="delete-button" href="?del='.$row_1['id_dov_face'].'">Удалить карточку</a></button>

                                    </div>
                                    <hr class="red-line">
                                    <div class="row child-info-content">
                                        <div class="col-lg-2">
                                            <img class="card-image" src="assets/img/card.png" alt="">
                                        </div>
                                        <div class="col-lg-10">
                                            <div class="main-child-info row">
                                                
                                                <div class="not-info col-lg-4">
                                                    <p>Имя ребенка</p>
                                                    <hr class="hr-line-thin" style="margin: 0; width: 190px;">
                                                    <p>Номер группы</p>
                                                    <hr class="hr-line-thin" style="margin: 0; width: 190px;">
                                                    <p>Имя воспитателя</p>
                                                    <hr class="hr-line-thin" style="margin: 0; width: 190px;">
                                                    <p>Посещаемый кружок</p>
                                                    <hr class="hr-line-thin" style="margin: 0; width: 190px;">
                                                    <p>Имя доверенного лица</p>     
                                                    <hr class="hr-line-thin" style="margin: 0; width: 190px;">    
                                                    <p>Номер пропуска</p>
                                                </div>

                                                <div class="info col-lg-8">            
                                                    <p>'.$row_1["name"].'</p>
                                                    <p>'.$row_1["group_number"].'</p>
                                                    <p>'.$row_1["name_teacher"].'</p>
                                                    <p>'.$row_1["name_circle"].'</p>
                                                    <p>'.$row_1["name_dov_face"].'</p>
                                                    <p>'.$row_1["propusk_number"].'</p>

                                                </div>
                                            </div>
                                
                                        </div>
                                    </div>
                                </div>'; 
                                } 
                            } else {
                                echo "<script>alert(\"В базе нет детей\");</script>"; ;
                            }
                            if(isset($_GET['del'])) {
                                $id = $_GET['del'];
        
                                $query = "DELETE FROM `children` WHERE `id_dov_face` = '$id'";
                                
                                mysqli_query($connect, $query);
        
                            }

                        
                    } else if (isset($_POST['close-submit'])) {
                        echo '
                            
                        ';
                    } else if (isset($_POST['submit-sort'])) {
                        $result_1 = mysqli_query($connect, "SELECT * FROM `children` LEFT JOIN `circles` ON `children`.`id_circle`=`circles`.`id_circle`
                        LEFT JOIN `teacher` ON `children`.`id_teacher`=`teacher`.`id_teacher` LEFT JOIN `dov_face` ON `children`.`id_dov_face`=`dov_face`.`id_dov_face` GROUP BY `children`.`id` ORDER BY `children`.`name` ");

                        if(mysqli_num_rows($result_1) > 0) {
                                                        
                                                        
                            while ($row_1 = mysqli_fetch_assoc($result_1)) { 
                                
                                echo '
                            <div class="child-card">
                                <div class="child-info-logo d-flex">
                                    <img src="assets/img/abc.png" alt="">
                                    <h3>Карточка ребенка</h3>
                                    <button class="btn btn-info" style="background-color: aliceblue; color: black; outline: none"><a class="delete-button" href="?del='.$row_1['id_dov_face'].'">Удалить карточку</a></button>

                                </div>
                                <hr class="red-line">
                                <div class="row child-info-content">
                                    <div class="col-lg-2">
                                        <img class="card-image" src="assets/img/card.png" alt="">
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="main-child-info row">
                                            
                                            <div class="not-info col-lg-4">
                                                <p>Имя ребенка</p>
                                                <hr class="hr-line-thin" style="margin: 0; width: 190px;">
                                                <p>Номер группы</p>
                                                <hr class="hr-line-thin" style="margin: 0; width: 190px;">
                                                <p>Имя воспитателя</p>
                                                <hr class="hr-line-thin" style="margin: 0; width: 190px;">
                                                <p>Посещаемый кружок</p>
                                                <hr class="hr-line-thin" style="margin: 0; width: 190px;">
                                                <p>Имя доверенного лица</p>     
                                                <hr class="hr-line-thin" style="margin: 0; width: 190px;">    
                                                <p>Номер пропуска</p>
                                            </div>

                                            <div class="info col-lg-8">            
                                                <p>'.$row_1["name"].'</p>
                                                <p>'.$row_1["group_number"].'</p>
                                                <p>'.$row_1["name_teacher"].'</p>
                                                <p>'.$row_1["name_circle"].'</p>
                                                <p>'.$row_1["name_dov_face"].'</p>
                                                <p>'.$row_1["propusk_number"].'</p>

                                            </div>
                                        </div>
                            
                                    </div>
                                </div>
                            </div>'; 
                            } 
                        } else {
                            echo "<script>alert(\"В базе нет детей\");</script>"; ;
                        }
                        if(isset($_GET['del'])) {
                            $id = $_GET['del'];

                            $query = "DELETE FROM `children` WHERE `id_dov_face` = '$id'";
                            
                            mysqli_query($connect, $query);

                        }
                    }
                ?>
                
            </div>
        </section>
        <!-- Нижняя часть сайта-->
        <footer class="footer">
            <div class="container">
                <div class="row justify-content-center">
                    <p class="footer-info">
                        Студент группы 4311 Вафин И.М
                    </p>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>