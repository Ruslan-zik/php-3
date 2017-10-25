<?php
class User extends UserAbstract {
  public $name;
  public $login;
  public $password;
  function __construct($name, $login, $password) {
    $this->name = $name;
    $this->login = $login;
    $this->password = $password;
  }
  function __destruct() {
    echo "Пользователь: {$this->login} удален<br>\n";
  }
  function showInfo() {
    echo "Имя: {$this->name}<br>
          Логин: {$this->login}<br>
          Пароль: {$this->password}<br><hr>";
  }
}
