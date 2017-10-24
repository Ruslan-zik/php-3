<?php
function drawtable($th_color="none", $cols=10, $rows=10) {
  if (!is_string($th_color) or !is_int($cols) or !is_int($rows))
    return false;
  $style = "width:40px;height:20px;background:$th_color; ";
  echo "\n<table border=1px>";
  for ($t=1; $t<=$rows; $t++) {
    echo "\n<tr>";
    for ($j=1; $j<=$cols; $j++) {
        if ($j == 1 || $t == 1)
            echo "\n<th style=$style'><em>".$j*$t.'</em></th>';
        else
            echo "\n<td>".$j*$t.'</td>';
    }
    echo "</tr>";
   }
  echo "</table><br>";
  return true;
}
function drawMenu ($menu, $vertical=true) {
  if (!is_array($menu))
    return false;
  $style = 'display: inline; margin-right: 20px';
  echo "\n<ul>";
  foreach ($menu as $item) {
    echo ($vertical) ? "\n<li>" : "\n<li style='$style'>";
    echo "<a href='$item[href]'>$item[link]</a>";
    echo "</li>";
  }
  echo "\n</ul>\n";
  return true;
}
function myError($errno, $errmsg, $errfile, $errline) {
  // echo "$errno : $errmsg";
  $dt = date("d-m-y h:i:s");
  $errstr = "[$dt]-$errmsg in $errfile:$errline\n";
  switch ($errno) {
    case E_USER_ERROR:
    case E_USER_WARNING:
    case E_USER_NOTICE:
      echo $errmsg;
  }
  error_log("$errstr\n", 3, "error.log");
}
set_error_handler("myError");
?>
