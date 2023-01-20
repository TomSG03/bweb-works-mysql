$(document).ready(function () {
  $("form").submit(function (event) {
    var formData = {
      user_name: $("#user_name").val(),
      user_second_name: $("#user_second_name").val(),
      user_last_name: $("#user_last_name").val(),
      user_address_city: $("#user_address_city").val(),
      user_address_street: $("#user_address_street").val(),
      user_address_house: $("#user_address_house").val(),
      user_address_flat: $("#user_address_flat").val(),
      submit: "submit"
    };

    $.ajax({
      type: "POST",
      url: "data_order_ajax.php",
      data: formData,
      dataType: "json",
      encode: true,
    }).done(function (result) {
      console.log(result)
      if (result['error'] === 0) {
        $("#result").html(
          `
            <div class="card mt-3">
              <div class="card-header">
                Заказ оформлен
                </div>
              <div class="card-body">
                <h5 class="card-title">Номер заказа -  ${result['order']}</h5>
                <p class="card-text">Имя: ${result['name']}</p>
                <p class="card-text">Адрес: ${result['adress']}</p>
                <a href="form_order_ajax.php" class="btn btn-primary">Повторить</a>
              </div>
            </div>
          `
        );      
      } else {
        $("#result").html(
        `
          <div class="card mt-3">
            <div class="card-header">
              Ошибка
            </div>
            <div class="card-body">
              <h5 class="card-title">${result['error_message']}</h5>
              <a href="form_order_ajax.php" class="btn btn-primary">Повторить</a>
            </div>
          </div>
        `       
      )}
      $("#result").fadeIn(1000);
    });
    event.preventDefault();
  });


});