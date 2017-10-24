<?php
$visitCounter = 0;
if (isset($_COOKIE['visitCounter']))
  $visitCounter = $_COOKIE['visitCounter'];
$visitCounter++;
$lastVisit = "";
if (isset($_COOKIE['lastVisit']))
  $lastVisit = date("d-m-y h:i:s",  $_COOKIE['lastVisit']);
if(date("d-m-y ",  $_COOKIE['lastVisit']) != date("d-m-y")){
  setcookie ('visitCounter', $visitCounter, 0x7FFFFFFF);
  setcookie ('lastVisit', time(), 0x7FFFFFFF);
}
?>
