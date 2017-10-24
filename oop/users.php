<?php
function __autoload($class) {
  require "$class.class.php";
}

$user1 = new User ('Петя', 'Vasya66', '1324');
$user1->showInfo();
$user2 = new User ('Petya', 'nagibator228', 'pas213');
$user2->showInfo();
$user3 = new User ('Popa', 'uert1231', 'kek1234');
$user3->showInfo();
$user = new SuperUser ('Руслан', 'Leeroy73', '1234', 'tank');
$user->showInfo();
print_r($user->getInfo());
echo "<br>\n";
// $user1->name = 'Vasya';
// $user1->login = 'Vasya66';
// $user1->password = '1324';
//
// $user2->name = 'Petya';
// $user2->login = 'nagibator228';
// $user2->password = 'pas213';
//
// $user3->name = 'Popa';
// $user3->login = 'uert1231';
// $user3->password = 'kek1234';




?>
