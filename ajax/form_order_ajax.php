<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="script_ajax.js"></script>

	<title>Оформление заказа</title>
</head>

<body>
	<div class="container">
		<h2>Оформление заказа</h2>
		<form action="" method="POST">
			<fieldset>
				<legend>Контактная информация</legend>
				<div class="mb-3">
					<label class="form-label">Ваше имя<span class="mf-req">*</span></label>
					<input type="text" name="user_name" id="user_name" class="form-control" value=""><br>
				</div>
				<div class="mb-3">
					<label class="form-label">Ваше отчество<span class="mf-req">*</span></label>
					<input type="text" name="user_second_name" id="user_second_name" class="form-control" value=""><br>

					<div class="mb-3">
						<label class="form-label">Ваша фамилия<span class="mf-req">*</span></label>
						<input type="text" name="user_last_name" id="user_last_name" class="form-control" value=""><br>
			</fieldset>
			<fieldset>
				<legend>Адрес доставки</legend>
				<div class="mb-3">
					<label class="form-label">Город<span class="mf-req">*</span></label>
					<input type="text" name="user_address_city" id="user_address_city" class="form-control" value=""><br>

					<div class="mb-3">
						<label class="form-label">Улица<span class="mf-req">*</span></label>
						<input type="text" name="user_address_street" id="user_address_street" class="form-control" value=""><br>

						<div class="mb-3">
							<label class="form-label">Дом и корпус<span class="mf-req">*</span></label>
							<input type="text" name="user_address_house" id="user_address_house" class="form-control" value=""><br>

							<div class="mb-3">
								<label class="form-label">Квартира<span class="mf-req">*</span></label>
								<input type="text" name="user_address_flat" id="user_address_flat" class="form-control" value=""><br>
			</fieldset>
			<button type="submit" name="submit" class="btn btn-primary" value="submit">Заказать</button>
		</form>
		<div id="result"></div>
	</div>
</body>

</html>