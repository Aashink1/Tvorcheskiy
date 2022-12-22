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
    
    if(isset($_POST["first_name"]) && isset($_POST['second_name']) && isset($_POST['position'])){
        if(!isset($_GET['red_id'])){
            $sql = mysqli_query($link, "INSERT INTO employees (first_name, second_name, position, first_date) VALUES('{$_POST['first_name']}', '{$_POST['second_name']}', '{$_POST['position']}', NOW())");
        } else {
           echo 'Не удалось добавить работника в базу данных';
        }
    

    if($sql){
        echo '<p>Успешно!</p>';
    } else {
        echo '<p>Возникла ошибка: '.mysqli_error($link).'</p>'; 
    }
    }

    if(isset($_GET['del_id'])){
        $sql = mysqli_query($link, "DELETE FROM employees WHERE id = {$_GET['del_id']}");
        if($sql){
            echo "<p>Работник удален.</p>";
        } else {
            echo '<p>Произошла ошибка: '.mysqli_error($link).'</p>';
        }
    }

    if(isset($_GET['red_id'])){
        $sql = mysqli_query($link, "SELECT id, first_name, second_name, position FROM employees WHERE id={$_GET['red_id']}");
        $employees = mysqli_fetch_array($sql);
    }

    ?>
    <div>
    <h1 style="text-align:center">Редактирование данных о работниках</h1>
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
     <l>Таблица работники</l>
         <br>
            <tr>
                <td>Идентификатор</td>
                <td>Имя</td>
                <td>Фамилия</td>
                <td>Должность</td>
                <td>Дата начала работы</td>
                <td>Удаление</td>
            </tr>
    <?php 
        $sql=mysqli_query($link, "SELECT id, first_name, second_name, position, first_date FROM employees");
        while($result = mysqli_fetch_array($sql)){
            echo "<tr>
                <td>{$result['id']}</td>
                <td>{$result['first_name']}</td>
                <td>{$result['second_name']}</td>
                <td>{$result['position']}</td>
                <td>{$result['first_date']}</td>
                <td><a href='?del_id={$result['id']}'>Удалить</a></td>
                </tr>";
        }
    ?>
        </table>
        <form action="" method="post">
        <table class="t1">
            <tr>
                <td>Введите имя:</td>
                <td><input type="text" name="first_name" value="<?= isset($_GET['red_id']) ? $employees['first_name']:'';?>"></td>
            </tr>
            <tr>
                <td>Введите фамилию</td>
                <td><input type="text" name="second_name" size="3" value="<?=isset($_GET['red_id']) ?$employees['second_name']:'';?>"></td>
            </tr>
            <tr>
                <td>Введите должность</td>
                <td><input type="text" name="position" size="3" value="<?=isset($_GET['red_id']) ?$employees['position']:'';?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Добавить нового работника"></td>
            </tr>
        </table>
    </form>

    </div>

    <?php else:
        echo '<h2>Вы хакер?</h2>';
        echo '<a href="/login.php">На главную</a>';
        ?>
    <?php endif ?>
</body>
</html>