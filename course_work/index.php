<?php
    session_start();
    error_reporting(0);
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
                            <p class="title-logo">WISH of KIDS data BASE</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Форма регистрации-->
        <section class="main">
            <img class="main-pic" src="assets/img/main-pic.png" alt="фото страницы регистрации">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row justify-content-center">
                            <form action="assets/includes/signin.php" method="post" class="pform">
                                <h2 class="enter">Вход в систему</h2>
                                <div class="forms-fields">

                                    <label class="username-label">Логин</label><br>  
                                    <input type="text" class="username-textfield" name="login" 
                                    required="Это поле обязательно" placeholder="Введите логин"><br>
                        
                                    <label class="password-label">Пароль</label><br>
                                    <input type="text" class="password-textfield" name="password" 
                                    required="Это поле обязательно" placeholder="Введите пароль"><br>

                                </div>
                                
                                <br><button type="submit" class="btn btn-info">Войти</button>
                                <div class="registration">							
                                    <a href="#darkness" class="reg">
                                        Регистрация
                                    </a>
                                </div>
                                <div class="msg">
                                    <?php
                                        echo $_SESSION['mess'];
                                        unset($_SESSION['mess']);
                                    ?>
                                </div>
                                <hr class="hr-line" width="208px" align="center">
                            </form>
                                <div id="darkness">
                                    <div id="registr">
                                        <form action="assets/includes/signup.php" method="post" class="pform">
                                            <h2 class="enter-reg">Регистрация</h2>
                                            <div class="forms-fields">
                                                <label class="username-label">Придумайте логин</label><br>
                                                <input type="text" class="username-textfield" name="login" 
                                                required="Это поле обязательно" placeholder=""><br>
                                            
                                                <label class="password-label">Придумайте пароль</label><br>
                                                <input type="text" class="password-textfield" name="password" 
                                                required="Это поле обязательно" placeholder=""><br>
                                            
                                                <label class="password-label">Повторите пароль</label><br>
                                                <input type="text" class="password-textfield" name="password_confirm" 
                                                required="Это поле обязательно" placeholder=""><br>
                                            </div>
                                            <br><button type="submit" class="btn btn-info">Зарегистрироваться</button>
                                            <a href="index.php"><button type="button" class="btn btn-info">Закрыть окно</button></a>
                                            <div class="msg">
                                                <?php
                                                    echo $_SESSION['message'];
                                                    unset($_SESSION['message']);
                                                ?>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            
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