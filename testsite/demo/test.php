<?php
mb_internal_encoding("UTF-8");
$link = mysqli_connect('127.0.0.1', 'root', '', 'web');
if(!$link) {
  echo mysqli_connect_errno();
  echo "<br>";
  echo mysqli_connect_error();
}

/* изменение набора символов на utf8 */
if (!mysqli_set_charset($link, "utf8"))
    echo "Ошибка при загрузке набора символов utf8: \n", mysqli_error($link);

//mysqli_select_db($link, 'test');

// $res = mysqli_query($link, "SET NAMES 'utf-8'");
// if(!res)
//   echo mysqli_error($link);

// $name = mysqli_real_escape_string($link, "O'Brain");
// $sql = "SELECT * FROM test
//           WHERE name = '$name'";
// echo $sql;

// $sql = "SELECT * FROM test";
// $result = mysqli_query($link, $sql);
// echo mysqli_error($link);
// while ($row = mysqli_fetch_assoc($result))
// print_r($row);
//$req = '"%Иван%"';

// $rename = 'UPDATE test SET name = "Иванов Иванчик Ивановичиков" WHERE name LIKE "%ванов Иванчик Иванович%"';
// echo $rename;
// echo "<br>";
// mysqli_query($link, $rename);
// echo mysqli_error($link);
// $count = mysqli_affected_rows($link);
// echo $count;
// mysqli_close($link);
?>
