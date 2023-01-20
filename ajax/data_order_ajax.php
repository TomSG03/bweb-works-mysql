
<?
if ($_REQUEST['submit']) {
	//подключаемся к БД
	//сюда нужно вставить личные данные с timeweb
	$DB_HOST = 'localhost:3306';
	$DB_USER = '';
	$DB_PASS = '';
	$DB_NAME = '';
	$link = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
	if (!$link) {
		$result = [
			"error" => 1,
			"error_message" => "Ошибка: Невозможно установить соединение с MySQL. Код ошибки errno: " . mysqli_connect_errno() . " Текст ошибки error: " . mysqli_connect_error()
		];
	} else {

		$sql_contact = "INSERT INTO contacts (Name, SecondName, LastName) VALUES ('" . $_REQUEST['user_name'] . "', '" . $_REQUEST['user_second_name'] . "', '" . $_REQUEST['user_last_name'] . "')";
		$result = mysqli_query($link, $sql_contact);
		$contact_id = mysqli_insert_id($link);

		$sql_order = "INSERT INTO orders (ContactId, City, Street, House, Flat) VALUES ('" . $contact_id . "', '" . $_REQUEST['user_address_city'] . "', '" . $_REQUEST['user_address_street'] . "', '" . $_REQUEST['user_address_house'] . "', '" . $_REQUEST['user_address_flat'] . "')";
		$result2 = mysqli_query($link, $sql_order);
		$order_id = mysqli_insert_id($link);

		if ($result == false || $result2 == false) {
			$result = [
				"error" => 2,
				"error_message" => "Произошла ошибка при выполнении запроса",
			];
		} else {
			$result = [
				"error" => 0,
				"error_message" => "ok",
				"name" => $_REQUEST['user_name'] . ' ' . $_REQUEST['user_second_name'] . ' ' . $_REQUEST['user_last_name'],
				"adress" => $_REQUEST['user_address_city'] . ' ' . $_REQUEST['user_address_street'] . ' ' . $_REQUEST['user_address_house'] . ' ' . $_REQUEST['user_address_flat'],
				"order" => $order_id
			];
		}
	}
	echo json_encode($result);
}
?>
