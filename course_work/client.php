<!-- <?php
    session_start();
    error_reporting(0);

    include('assets/includes/connect.php');
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WISH of KIDS</title>
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
        
        <section class="main">
            <div class="container">
                <div class="row col-lg-12">
                    <h1 class="header-main-client">Здание детского сада</h1>
                    <img class="main-client-picture" src="assets/img/main-client-picture.jpg" alt="Основное фото садика">
                </div>
                <hr class="hr-line" width="1100px" align="center">
                <div class="why-we">
                    <h2>Почему именно мы?</h2>
                </div>
                <div class="row">
                    <div class="banner-children-info col-lg-3">
                        <img src="assets/img/blocks.png" alt="Почему именно мы?">
                        <p>Качественное обучение</p>
                        <hr class="hr-line" width="150px">
                    </div>
                    <div class="banner-children-info col-lg-3">
                        <img src="assets/img/teacher.png" alt="Почему именно мы?">
                        <p>Лучшие воспитатели</p>
                        <hr class="hr-line" width="150px">
                    </div>
                    <div class="banner-children-info col-lg-3">
                        <img src="assets/img/best-price.png" alt="Почему именно мы?">
                        <p>Низкие цены</p>
                        <hr class="hr-line" width="150px">
                    </div>
                    <div class="banner-children-info col-lg-3">
                        <img src="assets/img/diet.png" alt="Почему именно мы?">
                        <p>Хорошее питание</p>
                        <hr class="hr-line" width="150px">
                    </div>
                </div>
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