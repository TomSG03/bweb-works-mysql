<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<title>Оформление заказа</title>
</head>

<body>

	<?php
	// echo "<pre>";
	// print_r($_REQUEST);
	// echo "</pre>";
	if ($_REQUEST['submit']) {
		//подключаемся к БД
		//сюда нужно вставить личные данные с timeweb
		$DB_HOST = 'localhost:3306';
		$DB_USER = '';
		$DB_PASS = '';
		$DB_NAME = '';
		$link = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
		if (!$link) {
			echo "Ошибка: Невозможно установить соединение с MySQL.";
			echo "Код ошибки errno: " . mysqli_connect_errno();
			echo "Текст ошибки error: " . mysqli_connect_error();
		} else {

			$sql_contact = "INSERT INTO contacts (Name, SecondName, LastName) VALUES ('" . $_REQUEST['user_name'] . "', '" . $_REQUEST['user_second_name'] . "', '" . $_REQUEST['user_last_name'] . "')";
			$result = mysqli_query($link, $sql_contact);
			$contact_id = mysqli_insert_id($link);

			$sql_order = "INSERT INTO orders (ContactId, City, Street, House, Flat) VALUES ('" . $contact_id . "', '" . $_REQUEST['user_address_city'] . "', '" . $_REQUEST['user_address_street'] . "', '" . $_REQUEST['user_address_house'] . "', '" . $_REQUEST['user_address_flat'] . "')";
			$result2 = mysqli_query($link, $sql_order);
			$order_id = mysqli_insert_id($link);

			if ($result == false || $result2 == false) {
				echo "Произошла ошибка при выполнении запроса";
			} else {
	?>
				<div class="container">
					<h2>Оформление заказа</h2>
					<form action="data_order.php" method="POST">
						<fieldset>
							<legend>Имя</legend>
							<p>
								<?php
								$name = $_REQUEST['user_name'] . ' ' . $_REQUEST['user_second_name'] . ' ' . $_REQUEST['user_last_name'];
								echo "$name"; ?>
							</p>
							<legend>Адрес</legend>
							<p>
								<?php
								$adress =  $_REQUEST['user_address_city'] . ' ' . $_REQUEST['user_address_street'] . ' ' . $_REQUEST['user_address_house'] . ' ' . $_REQUEST['user_address_flat'];
								echo "$adress"; ?>
							</p>
							<legend>Заказ</legend>
							<p>
								<?php	echo "Спасибо за ваш заказ! Ему присвоен номер $order_id"; ?>
							</p>
						</fieldset>				
						<input class="btn btn-primary" type="button" onclick="location.href='form_order.php'" id="submit" value="Назад" />
					</form>
				</div>
	<?php
			}
		}
	}
	?>

</body>

</html>