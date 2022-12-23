<?php require_once "connection.php";?>
<?php session_start();?>
<?php
$email=$_POST["email"];
$password=md5($_POST["password"]);

$sql = $pdo->prepare("SELECT id FROM t_users WHERE email=:email AND password=:password");
$sql->execute(array('email' =>$email,'password' =>$password));
$array=$sql->fetch(PDO::FETCH_ASSOC);
if($array["id"]>0){
    $_SESSION['email']=$array["email"];
    $_SESSION['id']=$array['id'];
    header('Location: ../index.php');
}
else{
    header('Location:../autoriz/login.php');
}