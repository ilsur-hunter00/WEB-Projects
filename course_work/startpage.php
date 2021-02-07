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
                <div class="row">
                    <div class="garden-info col-lg-6">
                        <h1 class="header-main">Удобство - наше все</h1>
                        <div class="main-text">
                            <p>
                                Моей целью было создать удобную 
                                базу данных для администрации 
                                детского сада "WISH of KIDS". Управлять базой очень 
                                легко и комфортно. 
                                Также вы можете узнать некоторую информацию о нашем детском саде,
                                не регистрируясь.
                            </p>
                        </div>
                        <hr class="hr-line"  width="400px" align="left">
                        <hr class="hr-line"  width="200px" align="left">
                    </div>
                    <div class="garden-info-picture col-lg-6">
                        <img src="assets/img/garden-info-picture.png" alt="Дети">
                    </div>
                </div>
                <div class="row banners">
                        <div class="col-lg-3">
                            <div class="block">
                                <img src="assets/img/confusion.png" alt="Для клиента">
                            </div>
                            <div class="client">
                                <a href="client.php"><button type="submit" class="btn btn-info">Для клиента</button>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="block">
                                <img src="assets/img/employee.png" alt="Для сотрудника">
                            </div>
                            <div class="admin">
                                <a href="index.php"><button type="submit" class="btn btn-info">Для сотрудника</button></a>
                            </div>
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