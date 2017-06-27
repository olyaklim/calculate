
<!DOCTYPE HTML>
<html lang="ru">
<html>
<head>
	<meta charset="utf-8">
	<title>calculator</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Bootstrap -->
	<link href="stylesheet/bootstrap.min.css" rel="stylesheet">
	<link href="stylesheet/my.css" rel="stylesheet">
	
</head>
<html>
<body>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-7">
				<div class="calculator">
					<!-- <p>глобал: <?php //$global_value_left = 5; ?></p> -->
					<h1>Калькулятор:</h1>

					<form id="form" method="post" class="form-inline">

						<div class="form-group">
							<input id="value-left" class="form-control" type="number" name="value-left" required  placeholder="число" value="1.00" min="-999999" max="999999" step="any">
						</div>

						<select id="operation" class="form-control" required size = "1" name = "operation">
							<option selected value = "plus">+</option>
							<option value = "minus">-</option>
							<option value = "multiply">*</option>
							<option value = "divide">÷</option>
							<option value = "log">log</option>
							<option value = "remainder">%</option>
						</select>

						<div class="form-group">
							<input id="value-right" class="form-control" type="number" name="value-right" required  placeholder="число" value="1.00" min="-999999" max="999999" step="any">
						</div>				

						<button type="submit" value="send" class="btn btn-success">=</button>

						<button type="reset" value="send" class="btn btn-danger">C</button>

						<br><br>
						<div class="option-group">
							<div class="checkbox">
								<label><input id="rounding" type="checkbox" name="rounding"> Округление</label>
							</div>	

							<div class="decimal-group">
								<label class="control-label" for="count-decimal">Количество десятичных знаков:</label>
								<input id="count-decimal" class="form-control" type="number" name="count-decimal" required  placeholder="десятичных знаков" value="2" min="-9" step="1">
							</div>			
						</div>

					</form>

					<br>
					<p id="result-text"> </p>
					<h2 id="result"></h2>
					<h6 id="testresult"> </h6>
				</div>
			</div>	
		</div>
	</div>	

	<script>

		$(function() {
			$('#rounding').on('change', function() {
				$('.decimal-group').toggle();
			})
		});

		$(".btn-danger").click(function(){
			$('#result').html('');
			$('#result-text').html('');
		});

		$(".btn-success").click(function(){

			var left_text = $("#value-left").val();
			var right_text = $("#value-right").val();
			var operation = "7";
			var operation = $("#operation").val();

     		$('#result-text').html("<span>operation:</span>" + left_text  + "  " + operation + " " + right_text + " = <b id=\"result2\"></b>");

     		//$('#testresult').html('глобал= ' + <?php //echo $global_value_left; ?>);
     		
		});

	</script>

	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>

<script src="script.js"></script>



