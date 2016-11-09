<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Авторизация</title>
		<link rel="stylesheet" href="style.css">
    </head>
	
	<body>
	
        <div class="fon">
		
            <div class="priv">
                <img src="1.jpg" height="80px">
                <p>Добро пожаловать!</p>
            <p>Введите правильные имя<br> пользователя и пароль<br> для входа на сайт!</p>
                <br>
                <a href="#">Регистрация</a>
            </div>
				
				<?php $login = "alex228"; $pwd = "password";
				if(!isset($_POST['pwd']))
				{
					echo '<div class="clear">			
				</div>
					<div class="vhod">			
                <h2>Вход</h2>				
				<form method="POST"><div class="auto">			
					<div class="user">
                    <b>Имя пользователя</b><br>
					<input id="username" maxlength="20" name="username">
                    </div>
					
					<div class="pass">
                    <b>Пароль</b><br>
                <input type="password" name="pwd">
					</div>
				
                <input class="but" type="submit" value="Вход">
			
				</div></form>
				<div class="clear">			
				</div>
            </div>';
				}
				else if($_POST['username'] == $login && $_POST['pwd'] == $pwd)
				{
					echo '<p style="margin-left: 390px; font-size:28px; margin-top:50px;"> Данные введены верно </p>';
					echo '<br><a href="./index.php"><p style="margin-left: 380px; font-size:40px; margin-top:70px;">Выход </p></a>';
				}
				else if($_POST['username'] != $login || $_POST['pwd'] != $pwd)
				{
					echo '<div class="clear">			
				</div>
					<div class="vhod">			
                <h2>Вход</h2>				
				<form method="POST"><div class="auto">			
					<div class="user">
					<p style="margin-top:-40px;">Данные введены неверно</p>
                    <b>Имя пользователя</b><br>
					<input id="username" maxlength="20" name="username">
                    </div>
					
					<div class="pass">
                    <b>Пароль</b><br>
                <input type="password" name="pwd">
					</div>
				
                <input class="but" type="submit" value="Вход">
			
				</div></form>
				<div class="clear">			
				</div>
            </div>';
				}
				?>
				
           
        </div>
    </body>
</html>