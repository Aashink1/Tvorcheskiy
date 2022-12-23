<?php
header('Content-Type: text/html; charset= utf-8');
require_once '../functions/connection.php';
$link=mysqli_connect($host, $user, $password,"testing");

if(isset($_POST['submit']))
{
    if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['login'])){
        $err[] = "Логин может состоять только из букв английского алфавита и цифр";
    }

    if(strlen($_POST['login']) < 3 or strlen($_POST['login']) > 30)
    {
        $err[] = "Логин должен содержать не менее трех символов и не более 30";
    }

    $query = mysqli_query($link, "SELECT id FROM t_users WHERE login='".mysqli_real_escape_string($link, $_POST['login'])."'");
    if(!$query || mysqli_num_rows($query)>0){
        $err[] = "Пользователь с таким логином уже существует";
    }

    $query = mysqli_query($link, "SELECT id FROM t_users WHERE email='".mysqli_real_escape_string($link, $_POST['email'])."'");
    if(!$query || mysqli_num_rows($query)>0){
        $err[] = "Эта почта уже занята другим аккаунтом";
    }
    
    if($_POST['password']!==$_POST['repeat_password']){
        $err[] = "Пароли не совпадают";
    }

    if(count($err) == 0){
        $login = $_POST['login'];

        $password = md5(trim($_POST['password']));

        $email = $_POST['email'];

        $to = $email;
        $subject = "Thanks for registration";
        $message = "Hello";
        $headers = 'From: index@inbox.com'."\r\n"."Reply-To: index@inbox.com"."\r\n".'X-Mailer: PHP/'.phpversion();
        mail($to, $subject, $message, $header);

        mysqli_query($link, "INSERT INTO t_users SET login='".$login."', password='".$password."', email='".$email."'");
        header("Location: login.php"); exit();
    }
    else{
        print "<b>При регистрации произошли следующие ошибки:</b><br>";
        foreach($err AS $error){
            print $error."<br>";
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/registr.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />
    <title>Document</title>
  </head>
  <body>
  <form action="" method="post">
    <main>
      <div class="circle"></div>
      <div class="register-form-container">
        <h1 class="form-title">Регистрация</h1>
        <div class="form-fields">
          <div class="form-field">
            <input type="text" placeholder="Имя" name="login" />
          </div>
          <div class="form-field">
            <input type="email" placeholder="Почта" name="email" />
          </div>
          <div class="form-field">
            <input type="password" placeholder="Пароль" name="password" />
          </div>
          <div class="form-field">
            <input type="password" placeholder="Подтвердить пароль" name="repeat_password" />
          </div>
        </div>
        <div class="form-buttons">
          <button type="submit" class="button" name="submit">Регистрация</button>
          <div class="divider">или</div>
          <a href="#" class="button button-google">Google</a>
        </div>
      </div>
    </main>
  </form>
  </body>
</html>