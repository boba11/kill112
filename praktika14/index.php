<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>�����������</title>
		<link rel="stylesheet" href="style.css">
    </head>
	
	<body>
	
        <div class="fon">
		
            <div class="priv">
                <img src="1.jpg" height="80px">
                <p>����� ����������!</p>
            <p>������� ���������� ���<br> ������������ � ������<br> ��� ����� �� ����!</p>
                <br>
                <a href="#">�����������</a>
            </div>
				
				<?php $login = "alex228"; $pwd = "password";
				if(!isset($_POST['pwd']))
				{
					echo '<div class="clear">			
				</div>
					<div class="vhod">			
                <h2>����</h2>				
				<form method="POST"><div class="auto">			
					<div class="user">
                    <b>��� ������������</b><br>
					<input id="username" maxlength="20" name="username">
                    </div>
					
					<div class="pass">
                    <b>������</b><br>
                <input type="password" name="pwd">
					</div>
				
                <input class="but" type="submit" value="����">
			
				</div></form>
				<div class="clear">			
				</div>
            </div>';
				}
				else if($_POST['username'] == $login && $_POST['pwd'] == $pwd)
				{
					echo '<p style="margin-left: 390px; font-size:28px; margin-top:50px;"> ������ ������� ����� </p>';
					echo '<br><a href="./index.php"><p style="margin-left: 380px; font-size:40px; margin-top:70px;">����� </p></a>';
				}
				else if($_POST['username'] != $login || $_POST['pwd'] != $pwd)
				{
					echo '<div class="clear">			
				</div>
					<div class="vhod">			
                <h2>����</h2>				
				<form method="POST"><div class="auto">			
					<div class="user">
					<p style="margin-top:-40px;">������ ������� �������</p>
                    <b>��� ������������</b><br>
					<input id="username" maxlength="20" name="username">
                    </div>
					
					<div class="pass">
                    <b>������</b><br>
                <input type="password" name="pwd">
					</div>
				
                <input class="but" type="submit" value="����">
			
				</div></form>
				<div class="clear">			
				</div>
            </div>';
				}
				?>
				
           
        </div>
    </body>
</html>