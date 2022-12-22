<?php session_start();?>
<?php header('Content-Type: text/html; charset=utf-8');?>
<?php require_once '../functions/connection.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
    <title>Услуги</title>
</head>
<body>
    <?php
    $link = mysqli_connect($host, $user, $password, $db);
    
    if(isset($_POST["title"])){
        if(isset($_GET['red_id'])){
            $sql = mysqli_query($link, "UPDATE uslugi SET title = '{$_POST['title']}', price = '{$_POST['price']}' WHERE id={$_GET['red_id']}");
        } else {
            $sql = mysqli_query($link, "INSERT INTO uslugi (title, price) VALUES('{$_POST['title']}', '{$_POST['price']}')");
        }
    

    if($sql){
        echo '<p>Успешно!</p>';
    } else {
        echo '<p>Возникла ошибка: '.mysqli_error($link).'</p>'; 
    }
    }

    if(isset($_GET['del_id'])){
        $sql = mysqli_query($link, "DELETE FROM uslugi WHERE id = {$_GET['del_id']}");
        if($sql){
            echo "<p>Товар удален.</p>";
        } else {
            echo '<p>Произошла ошибка: '.mysqli_error($link).'</p>';
        }
    }

    if(isset($_GET['red_id'])){
        $sql = mysqli_query($link, "SELECT id, title, price FROM uslugi WHERE id={$_GET['red_id']}");
        $uslugi = mysqli_fetch_array($sql);
    }
    ?>
    <div>
    <h1 style="text-align:center">Редактирование услуг</h1>
    <?php if(!empty($_SESSION["login"])) :?>
    <div class="sidenav">
        <a href="contact.php">Контакты</a>
        <a href="uslugi.php">Услуги</a>
        <a href="../autoriz/users.php">Пользователи</a>
        <a href="orders.php">Заказы</a>
        <a href="emp.php">Работники</a>
        <a href="../admin.php">Вернуться</a>
        <a href="../logout.php">Выйти</a>

    </div>
    </div>
        <br>
    <div class='tab'>
        <table border='1' >
     <l>Таблица услуг</l>
         <br>
            <tr>
                <td>Идентификатор</td>
                <td>Наименование</td>
                <td>Цена</td>
                <td>Удаление</td>
                <td>Редактирование</td>
            </tr>
    <?php 
        $sql=mysqli_query($link, "SELECT id, title, price FROM uslugi");
        while($result = mysqli_fetch_array($sql)){
            echo "<tr>
                <td>{$result['id']}</td>
                <td>{$result['title']}</td>
                <td>{$result['price']} ₽</td>
                <td><a href='?del_id={$result['id']}'>Удалить</a></td>
                <td><a href='?red_id={$result['id']}'>Изменить</a></td>
                </tr>";
        }
    ?>
        </table>
        <form action="" method="post">
        <table class="t1">
            <tr>
                <td>Название услуги:</td>
                <td><input type="text" name="title" value="<?= isset($_GET['red_id']) ? $uslugi['title']:'';?>"></td>
            </tr>
            <tr>
                <td>Цена:</td>
                <td><input type="text" name="price" size="3" value="<?=isset($_GET['red_id']) ?$uslugi['price']:'';?>"> руб.</td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="OK"></td>
            </tr>
        </table>
    </form>
    <p><a href="?add=new">Добавить новый товар</a></p>
    </div>

    <?php else:
        echo '<h2>Вы хакер?</h2>';
        echo '<a href="/login.php">На главную</a>';
        ?>
    <?php endif ?>
</body>
</html>