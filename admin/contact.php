<?php session_start();?>
<?php header('Content-Type: text/html; charset= utf-8');?>
<?php require_once '../functions/connection.php';?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="css/style.css"  type="text/css"/>
	 <title>Админка</title>
</head>
<body>
	<div style="text-align:center">
	<h1>Редактирование контактной информации</h1>
	<?php if(!empty($_SESSION["login"])) :?>

	<?php echo "Добрый день, ".$_SESSION['login']; ?>
		<br>
	<div class="sidenav">
        <a href="contact.php">Контакты</a>
        <a href="uslugi.php">Услуги</a>
        <a href="../autoriz/users.php">Пользователи</a>
        <a href="../admin.php">Вернуться</a>
        <a href="../logout.php">Выйти</a>

    </div>
        <br>
    <?php
        $sql=$pdo->prepare("SELECT * FROM contact");
        $sql->execute();
        $res=$sql->fetch(PDO::FETCH_OBJ);
    ?>
    <form action="/admin/contact/contact.php" method="post">

    <input type="text" name="city" value="<?php echo $res->city ?>">
    <input type="text" name="phone" value="<?php echo $res->phone ?>">
    <input type="text" name="email" value="<?php echo $res->email ?>">
    <input type="submit" value="Сохранить">

    </form>


	<?php else:
		echo '<h2>Вы хакер?</h2>';
		echo '<a href="/login.php">На главную</a>';
		?>
	<?php endif ?>
</div>
</body>
</html>
