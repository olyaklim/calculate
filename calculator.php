<?php 

//Проверка перерменых
if (isset($_POST['value-left'])) {
	$value_left = (float) $_POST['value-left'];
}
else {
	exit("Не выбрано левое значение!"); 
}

if (isset($_POST['value-right'])) {
	$value_right = (float) $_POST['value-right'];
}
else {
	exit("Не выбрано правое значение!"); 
}

if (isset($_POST['operation'])) {
	$operation = (string) $_POST['operation'];
}
else {
	exit("Не выбрана операция!"); 
}

if (isset($_POST['rounding'])) {
	$rounding = (bool) $_POST['rounding'];
}
else {
	$rounding = false;
}

if (isset($_POST['count-decimal'])) {
	$count_decimal = (int) $_POST['count-decimal'];
}
else {
	$count_decimal = 2;
}

//Вычисления
$result = 0;

if ($operation=='plus') {
	$result = $value_left + $value_right; 
}
elseif ($operation=='minus') {
	$result = $value_left - $value_right; 
}
elseif ($operation=='multiply') {

	$result = $value_left * $value_right; 
}
elseif ($operation=='divide') {

	if ($value_right == 0) {
		exit('Деление на ноль!');
	}

	$result = $value_left / $value_right; 
}
elseif ($operation=='log') {
	if ($value_right  == 0) {
		exit('Деление на ноль!');
	}
	$result = log($value_left, $value_right); 
}
elseif ($operation=='remainder') {

	if ($value_right == 0) {
		exit('Деление на ноль!');
	}
	$result = $value_left % $value_right; 
}

else {
	echo "Неизвесная операция";
}

if ($rounding) {
	$result = round($result, $count_decimal);
}

echo $result;


