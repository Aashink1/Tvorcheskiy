<?php session_start();?>
<?php header('Content-Type: text/html; charset= utf-8');?>
<?php require_once '../functions/connection.php';?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="../admin/css/style.css"  type="text/css"/>
	 <title>Админка</title>
</head>
<body>
	<?php
	$link = mysqli_connect($host, $user, $password, "testing");
	?>





	<div style="text-align:center">
	
	<?php if(!empty($_SESSION["login"])) :?>

    <h1>Информация о зарегестрированных пользователях</h1>
		<br>
	<div class="sidenav">
        <a href="../admin/contact.php">Контакты</a>
        <a href="../admin/uslugi.php">Услуги</a>
		<a href="users.php">Пользователи</a>
        <a href="orders.php">Заказы</a>
        <a href="emp.php">Работники</a>
        <a href="../admin.php">Вернуться</a>
        <a href="../logout.php">Выйти</a>
    </div>
	<div class='tab'>
	<table border='1'>
	<l>Заказы</l>
	<br>
		<tr>
			<td>Номер заказа</td>
			<td>Имя заказчика</td>
			<td>Название услуги</td>
			<td>Выполненность</td>
		</tr>
    	<?php
			$sql = mysqli_query($link, "SELECT orders.id, t_users.login, uslugi.title, orders.completion FROM orders, t_users, uslugi WHERE t_users.id = orders.customer_id and uslugi.id = orders.usl_id");
			while($result = mysqli_fetch_array($sql)){
				echo "<tr>
					<td>{$result['id']}</td>
					<td>{$result['login']}</td>
					<td>{$result['title']}</td>
					<td><form action='' method='GET'>
					<select name='value' size='1' multiple>";
					if($result['completion']==0){
						echo"<option value='0'>Не выполнено</option>;
							<option value='1'>Выполнено</option>";
					}
					else
						echo"<option value='1'>Выполнено</option>;
							<option value='0'>Не выполнено</option>";
					echo "</select>
					<input type='submit' value='Изменить'/>
					</form>
					</td>
					</tr>";
			}
			if($_GET['value']==='1'){
				header('Location:/emp.php');
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
