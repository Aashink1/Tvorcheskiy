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
        <a href="pp.php">Заказы</a>
        <a href="pp1.php">Ваши заказы</a>
        <div class="SupContainer">
          <div class="SupContainer1">
          <div class='tab'>
        <table border='1' >
     <l>Ваши заказы</l>
         <br>
            <tr>
                <td>Наименование заказа</td>
                <td>Цена</td>
                <td>Состояние заказа</td>
            </tr>
    <?php 
        $user_id = $_SESSION['id'];
        $sql=mysqli_query($link, "SELECT uslugi.id, uslugi.title, uslugi.price, orders.completion FROM uslugi, orders WHERE orders.customer_id = $user_id and uslugi.id = orders.usl_id");
        while($result = mysqli_fetch_array($sql)){
            echo "<tr>
                <td>{$result['title']}</td>
                <td>{$result['price']} ₽</td>";
                if ($result['completion'] == 1)
                {
                    echo"
                <td>Выполнен</td>";
                }
                else echo"
                <td>Не выполнен</td>
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
