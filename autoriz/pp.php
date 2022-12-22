<?php
session_start();
header('Content-Type: text/html; charset= utf-8');
require_once '../functions/connection.php';
$link = mysqli_connect($host, $user, $password, "testing");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/personal.css" />
    <title>Document</title>
  </head>
  <body>
    <header>
      <div class="header">
        <h1 class="PersonalAccount">Личный кабинет</h1>
      </div>
      <div class="MainContainer">
        <div class="SupContainer">
          <div class="SupContainer1">
          <div class='tab'>
    <?php
          if(isset($_GET['dob_id'])){
        $sql = mysqli_query($link, "SELECT id, login, email FROM t_users");
		$result = mysqli_fetch_array($sql);
        $user_id = $_SESSION['id'];
        $usl_id = $_GET['dob_id'];
        $sql = mysqli_query($link, "INSERT INTO orders (customer_id, usl_id) VALUES ($user_id, $usl_id)");
        if($sql){
            echo "<p>Заказ добавлен.</p>";
        } else {
            echo '<p>Произошла ошибка: '.mysqli_error($link).'</p>';
        }
    }
    ?>
        <table border='1' >
     <l>Таблица услуг</l>
         <br>
            <tr>
                <td>Наименование</td>
                <td>Цена</td>
                <td>Приобрести</td>
            </tr>
    <?php 
        $sql=mysqli_query($link, "SELECT id, title, price FROM uslugi");
        while($result = mysqli_fetch_array($sql)){
            echo "<tr>
                <td>{$result['title']}</td>
                <td>{$result['price']} ₽</td>
                <td><a href='?dob_id={$result['id']}'>Выбрать</a></td>
                </tr>";
        }
    ?>
        </table>
            </div>
          </div>
        </div>
      </div>
    </header>
  </body>
</html>
