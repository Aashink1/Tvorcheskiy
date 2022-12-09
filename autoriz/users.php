<?php session_start();?>
<?php header('Content-Type: text/html; charset= utf-8');?>
<?php require_once '../functions/connection.php';?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="/admin/css/style.css"  type="text/css"/>
	 <title>Админка</title>
</head>
<body>
	<?php
	$link = mysqli_connect($host, $user, $password, "t_users");
	?>





	<div style="text-align:center">
	
	<?php if(!empty($_SESSION["login"])) :?>

    <h1>Информация о зарегестрированных пользователях</h1>
		<br>
	<div class="sidenav">
        <a href="/admin/contact.php">Контакты</a>
        <a href="/admin/uslugi.php">Услуги</a>
		<a href="users.php">Пользователи</a>
        <a href="/admin.php">Вернуться</a>
        <a href="../logout.php">Выйти</a>
    </div>
	<div class='tab'>
	<table border='1'>
	<l>Пользователи</l>
	<br>
		<tr>
			<td>user_id</td>
			<td>Имя пользователя</td>
			<td>user_ip</td>
			<td>Email</td>
		</tr>
    	<?php
			$sql = mysqli_query($link, "SELECT user_id, user_login, user_ip, email FROM users");
			while($result = mysqli_fetch_array($sql)){
				echo "<tr>
					<td>{$result['user_id']}</td>
					<td>{$result['user_login']}</td>
					<td>{$result['user_ip']}</td>
					<td>{$result['email']}</td>
					</tr>";
			}
		?>
	</table>
		</div>


	<?php else:
		echo '<h2>Вы хакер?</h2>';
		echo '<a href="/login.php">На главную</a>';
		?>
	<?php endif ?>
</div>
</body>
</html>
