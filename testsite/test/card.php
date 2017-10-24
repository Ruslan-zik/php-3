<?
function is_cc_num($cc_num) {

$card_type = "";

// массив регулярных выражений, который используется для 
// определения типа карты
$cards = array(
'/^4\d{12}(\d\d\d){0,1}$/' => 'visa',
'/^5[12345]\d{14}$/' => 'mastercard'
);

// определение типа карты (visa или mastercard)
foreach ($cards as $reg_ex => $type) {
if (preg_match($reg_ex, $cc_num)) {
$card_type = $type;
break;
}
}

// мы не можем определить тип карты, возвращаем false
if (!$card_type) {
return false;
}

// проверка контрольной суммы карты
$code = strrev($cc_num);
$crc = 0;

for ($i = 0; $i < strlen($code); $i++) {
$current_num = intval($code[$i]);
if ($i & 1) { 
$current_num *= 2;
}

$crc += $current_num % 10;
if ($current_num > 9) {
$crc += 1;
}
}

if ($crc % 10 == 0) {
return $card_type;	
} else {
return false;
}
}

?>