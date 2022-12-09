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

        $password = trim($_POST['password']);

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
include "../html/registratsia.html";
?>
