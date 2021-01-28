<!DOCTYPE html>
<html lang="en"> 
    <head>
        <title>Login QCRM</title>
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/main.css"/>
        <style>
            .wrapper{
                background: url(img/<?php require 'backgroundName.php';?>.jpg)no-repeat center;
            }
        </style>
    </head>
    <body>
        <main class="wrapper">
            <div class="form-wrapper">
                <form class="form" method="post" action="success.php">
                    <div class="form__logo">
                        <div class="logo__block orange"></div>
                        <div class="logo__block pink"></div>
                        <div class="logo__block blue"></div>
                        <div class="logo__block green"></div>
                    </div>
                    <h1 class="form__title">QCRM</h1>
                    <h2 class="form__description">by SupportYourApp</h2>
                    <p class="form__error">User with this login and password not found</p>
                    <input type="text" name="login" placeholder="Login" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <div class="checkbox">
                        <input class="checkbox__input" type="checkbox" name="check" id="checked" required>
                        <label class="checkbox__label" for="checked">Remember me on this computer</label>
                    </div>
                    <button class="form__button" data-submit="submit">Sign In to QCRM</button>
                </form>
            </div>
        </main>
     
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <!-- Подключаем файл-валидатор, для проверки формы на заполненность и валидацию полей  -->
        <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.js"></script> 
         <script src="js/main.js"></script>
    </body>
</html>
