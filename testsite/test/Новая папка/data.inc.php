<?php
const ERR_ON_DRAW_MENU = "Ошибка в меню";
const ERR_ON_DRAW_TABLE = "Ошибка в таблице";
setlocale(LC_ALL, "russian");
$day = date('d');
$mon = date('m');
$mon = iconv('windows-1251', 'UTF-8', $mon);
$year = date('y');
$hour = date('h');
$minuts = date('i');
$seconds = date('s');
$title = "Test";
$welcome = '';
if ($hour < 6) {
$welcome = 'Доброй ночи';
}
else if ($hour < 12 && $hour >= 6) {
$welcome = 'Доброе утро';
}
else if ($hour < 18 && $hour >= 12) {
$welcome = 'Добрый день';
}
else if ($hour < 23 && $hour >= 18) {
$welcome = 'Добрый вечер';
}
$header = "$welcome, Руслан<br>";
$id = strtolower(strip_tags(trim($_GET['id'])));
switch($id) {
  case 'about':
    $title = 'О сайте';
    $header = 'О нашем сайте';
    break;
  case 'contact':
    $title = 'Контакты';
    $header = 'Обратная связь';
    break;
  case 'table':
    $title = 'Таблица умножения';
    $header = 'Таблица умножения';
    break;
  case 'calc':
    $title = 'Онлайн калькулятор';
    $header = 'калькулятор';
    break;
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?= $title?></title>
  </head>
  <body>
<?php
echo "<h1>$header</h1>";
echo "Сегодня $day-$mon-$year Серверное время: $hour:$minuts:$seconds<br> ";

?>
<hr>
<h1>BEFORE</h1>
<?php
include "test.inc.php"; // WarningError
require "test.inc.php"; // FatalError
?>
<h1>AFTER</h1>
<hr>
<?php
echo 2 + print 1 ."<br>";
function summ($n1, $n2){
  return $n1 + $n2;
}
$result = summ(2, 3);
echo $result ."<br>";
echo summ(4, 3);
echo "<hr>";
function nums(){
  return [1, 'kek'=>2, 3];
}
function numbs($x, $y, &$a, &$b, &$c){
  $a = $x * $y;
  $b = $x / $y;
  $c = $x - $y;
  return $x + $y;
}
$s = numbs(2, 3, $mult, $div, $sub);
echo $s, " ", $mult, " ", $div, " ", $sub;
echo "<br>";
// list($one, $two, $three) = nums();
// echo $one, $two, $three;
$two = nums()['kek'];
echo $two;
echo "<hr>";
function say($name="username", $h=3) {
    echo "<h$h>Hello, $name!</h$h>";
}
say("John", 1);
$n = "Mike";
say($n, 2);
say();
$str = "say";
$str();
echo"<hr>";
$leftmenu  = [
  ['link'=>'Домой', 'href'=>'index.php'],
  ['link'=>'О нас', 'href'=>'about.php'],
  ['link'=>'Контакты', 'href'=>'contact.php'],
  ['link'=>'Таблица умножения', 'href'=>'table.php'],
  ['link'=>'Калькулятор', 'href'=>'calc.php'],
];
if (!drawMenu($leftmenu, false))
  trigger_error(ERR_ON_DRAW_MENU, E_USER_ERROR);
echo"<hr>";
$x=10;
const USER_NAME = "Вася";
?>
<?php
echo USER_NAME."<br>";
$juice = "апельсин";
echo "Я люблю {$juice}овый сок<br>";
$str = "John Сноу";
$len = iconv_strlen($str);
echo $len;
?>
<br>
<?php
$shop=false;
echo ($shop) ? "Иду в магазин" : "Иду в киоск";
?>
<hr>
<?php
$x = $x + 10;
echo $x;
?>
<br>
<?php
$size = ini_get("post_max_size");
$type_size = $size{strlen($size)-1};
$size = (int)$size;
switch ($type_size) {
    case "G": $size *= 1024;
    case "M": $size *= 1024;
    case "K": $size *= 1024;
}
echo "Размер = $size байт <br>";
$arr = [
        "name"=>"John",
        "login"=>"root",
        "pass"=>"1234"
];
$arr["age"] = 25;
$arr[] = true;
echo "<br>Длинна массива " .count($arr) ."<br>";
echo "Нулевой элемент массива $arr[0]";
// var_dump($arr);
?>
<br>
<?php
var_dump ($leftmenu);
for ($i = 1; $i < 10; $i += 2){
    echo "$i<br>";
}
?>
<hr>
<?php
$var = "HELLO";
$p=0;
$len = strlen($var);
while ($p < $len) {
    echo $var{$p} ."<br>";
    $p++;
};
?><hr>
<?php
if (!drawtable("yellow", kek, 5))
  trigger_error(ERR_ON_DRAW_TABLE, E_USER_ERROR);
if (!drawtable())
  trigger_error(ERR_ON_DRAW_TABLE, E_USER_ERROR);
if (!drawtable("yellow", 5, 5))
  trigger_error(ERR_ON_DRAW_TABLE, E_USER_ERROR);


// echo "<table border=1px>";
// for ($rows = 10, $t=1; $t<=$rows; $t++) {
//   echo '<tr width="20px" height="20px">';
//   for ($cols = 10, $j=1; $j<=$cols; $j++) {
//       if ($j == 1 || $t == 1)
//           echo "<th style='background: $th_color'><em>".$j*$t.'</em></th>';
//       else
//           echo '<td>'.$j*$t.'</td>';
//   }
//   echo "</tr>";
//  }
// echo "</table><br>";
$arr = [
  "name"=>"John",
  "login"=>"root",
  "age"=>25
];
foreach($arr as $key => $val){
  echo "$key : $val<br>";
}
?>































  </body>
</html>
