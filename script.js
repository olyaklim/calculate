
$("#form").submit(function(e) {
  $.ajax({
   type: "POST",
   url: "calculator.php",
   data: $("#form").serialize(),
   success: function(responce)
   {

    $('#result').html('Результат: ' + responce); 
    $('#result2').html(responce); 
    $('#value-left').val(parseFloat(responce));
    $('#value-right').val(parseInt(0)); 

  }
});

  e.preventDefault();
});