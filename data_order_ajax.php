
<?php
	echo json_encode($_REQUEST);

	// echo "<pre>";
	// 	print_r($_REQUEST);
	// echo "</pre>";
	// if ($_REQUEST['submit']) {
	// 	//подключаемся к БД
	// 	//сюда нужно вставить личные данные с timeweb
	// 	$DB_HOST = 'localhost:3306';
	// 	$DB_USER = 'userbx-stud37';
	// 	$DB_PASS = 'fd3EkM#tgwhb';
	// 	$DB_NAME = 'dbbx-stud37';
	// 	$link = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
	// 	if (!$link) {
	// 		echo "Ошибка: Невозможно установить соединение с MySQL.";
	// 		echo "Код ошибки errno: " . mysqli_connect_errno();
	// 		echo "Текст ошибки error: " . mysqli_connect_error();
	// 	} else {

	// 		$sql_contact = "INSERT INTO contacts (Name, SecondName, LastName) VALUES ('" . $_REQUEST['user_name'] . "', '" . $_REQUEST['user_second_name'] . "', '" . $_REQUEST['user_last_name'] . "')";
	// 		$result = mysqli_query($link, $sql_contact);
	// 		$contact_id = mysqli_insert_id($link);

	// 		$sql_order = "INSERT INTO orders (ContactId, City, Street, House, Flat) VALUES ('" . $contact_id . "', '" . $_REQUEST['user_address_city'] . "', '" . $_REQUEST['user_address_street'] . "', '" . $_REQUEST['user_address_house'] . "', '" . $_REQUEST['user_address_flat'] . "')";
	// 		$result2 = mysqli_query($link, $sql_order);
	// 		$order_id = mysqli_insert_id($link);

	// 		if ($result == false || $result2 == false) {
	// 			echo json_encode("Произошла ошибка при выполнении запроса");
	// 		} else {

	// 			echo "Спасибо за ваш заказ! Ему присвоен номер $order_id";
	// 		}
	// 	}
	// }
?>