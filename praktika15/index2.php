<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Авторизация</title>
    	<link rel="stylesheet" href="style.css">
    </head>
      <body style="background-image: url(http://pattern4site.ru/images/noise/_thumb/16-fon-dlya-sayta.png)">
      <form method="post" align="center" class="regform">
        <label style="font-size: 35px;">Регистрация нового пользователя <br></label>
          <label>  * - обязательно для заполнения<br></label>
        <label>Имя пользователя *</label><br>
        <input type="text" name="log" required value="<? if(isset($_POST['log'])) echo $_POST['log']; ?>"><br>
        <label>Пароль *</label><br>
        <input type="password" name="pwd" required value="<? if(isset($_POST['pwd'])) echo $_POST['pwd']; ?>"><br>
        <label>Повторите пароль *</label><br>
        <input type="password" name="pwd1" required value="<? if(isset($_POST['pwd1'])) echo $_POST['pwd1']; ?>"><br>
        <label>Имя *</label><br>
        <input type="text" name="surname" required value="<? if(isset($_POST['surname'])) echo $_POST['name']; ?>"><br>
        <label>Фамилия *</label><br>
        <input type="text" name="name" required value="<? if(isset($_POST['name'])) echo $_POST['surname']; ?>"><br>
        <label>Отчество</label><br>
        <input type="text" name="midname" value="<? if(isset($_POST['midname'])) echo $_POST['midname']; ?>"><br>
        <label>Пол *</label><br>
        <select name="sex" required>
          <option value="Мужской">
          Мужской
          </option>
          <option value="Женский">
          Женский
          </option>
        </select><br>
        <label>E-Mail *</label><br>
        <input type="email" name="email" required value="<? if(isset($_POST['email'])) echo $_POST['email']; ?>"><br>
        <label>Возраст *</label><br>
        <input type="text" name="age" required value="<? if(isset($_POST['age'])) echo $_POST['age']; ?>"><br>


        <label>О себе</label><br>
        <textarea style="resize: none;" rows="8" cols="35" name="about"><? if(isset($_POST['about'])) echo $_POST['about']; ?></textarea><br>
        <input type="submit" value="Регистрация"/>
        <input type="reset" value="Сброс"/>
        </form><br>
  <?
  
      if(isset($_POST['log']) && isset($_POST['pwd']) && isset($_POST['pwd1']) && isset($_POST['name']) && isset($_POST['surname'])
       && isset($_POST['sex']) && isset($_POST['email']) && isset($_POST['age']) 
      && !empty($_POST['log']) && !empty($_POST['pwd']) && !empty($_POST['pwd1']) && !empty($_POST['name']) && !empty($_POST['surname'])
       && !empty($_POST['sex']) && !empty($_POST['email']) && !empty($_POST['age']))
      {
          if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
          {
            if($_POST['pwd'] == $_POST['pwd1'])
            {
              $pd = false;
              $file = fopen("logins.txt", "r");
              while(!feof($file))
              {
                $line = fgets($file);
                $arr = explode('|', $line);
                if(@$arr[0] == $_POST['log']) $pd = true;
              }
              fclose($file);
              if($pd == false)
              {
                $str = $_POST['log'].'|'.$_POST['pwd'].'|'.$_POST['name'].'|'.$_POST['surname'].'|'.$_POST['midname'].'|'.$_POST['sex'].'|'.$_POST['email'].'|'.$_POST['age'].'|'.$_POST['about'];
                $file = file_put_contents('logins.txt', $str.PHP_EOL , FILE_APPEND | LOCK_EX);
                echo '<span>Регистрация успешна!</span>';
              }
              else echo' <span>Логин уже занят.</span>';
          }
          else echo '<span>Пароли не совпадают.</span>';
        }
        else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) echo '<span>Неверный формат Email.</span>';
      }
    ?>
  </body>
</html>
