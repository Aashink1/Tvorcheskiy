<?php
session_start();
header('Content-Type: text/html; charset= utf-8');
require_once '../functions/connection.php';
$link = mysqli_connect($host, $user, $password, "testing");


if(!empty($_POST['password']) and !empty($_POST['email'])){
  $login = $_POST['email'];
  $password = trim($_POST['password']);

  $query = "SELECT * FROM t_users WHERE login='$login' AND password='$password'";
  $result = mysqli_query($link, $query);
  $user = mysqli_fetch_assoc($result);

  if (!empty($user)){
      $_SESSION['auth'] = true;
  }
  else{
      print "Вы ввели неправильный логин/пароль";
  }
}


include "../html/avtorisatsia.html";
?>
