<?php
 if(!isset($_GET['send'])) {
   echo file_get_contents('', file('index.php'));
   die();
 }
 echo $_GET['username'];
?>
