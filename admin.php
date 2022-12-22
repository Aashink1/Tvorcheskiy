<?php session_start();?>
<?php header('Content-Type: text/html; charset= utf-8');?>
<?php require_once 'functions/connection.php';?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="admin/css/style.css"  type="text/css"/>
	 <title>Админка</title>
</head>
<body>
	<div style="text-align:center">
	
	<?php if(!empty($_SESSION["login"])) :?>

	<?php echo "Добрый день, ".$_SESSION['login']; ?>
		<br>
	<div class="sidenav">
        <a href="admin/contact.php">Контакты</a>
        <a href="admin/uslugi.php">Услуги</a>
		<a href="autoriz/users.php">Пользователи</a>
		<a href="admin/orders.php">Заказы</a>
		<a href="admin/emp.php">Работники</a>
        <a href="../logout.php">Выйти</a>

    </div>

	<?php else:
		echo '<h2>Вы хакер?</h2>';
		echo '<a href="login.php">На главную</a>';
		?>
	<?php endif ?>
</div>
</body>
</html>

    