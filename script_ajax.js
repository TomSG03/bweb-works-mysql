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
      console.log(result);
      // for (let value of result) {
      //   console.log(value);
      //   $("#result").html(
      //     '<p>Имя: ' + value.name + '<p>Отчество: ' + value.patronymic + '<p>Фамилия: ' + value.surname + '<p>Полное имя: ' + value.result + '</p><p>В лице: ' + value.result_genitive + '</p><p>Кому: ' + value.result_dative + '</p><p>Согласовано: ' + value.result_ablative + '</p>'
      //   );
      // }
      for (var key in result) {
        if (result.hasOwnProperty(key)) {
            console.log(key + " -> " + result[key]);
        }
    }

      $("#result").fadeIn(1000);
    });
    event.preventDefault();
  });
});