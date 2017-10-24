<?php
class SuperUser extends User implements ISuperUser {
  public $role;
  function __construct($name, $login, $password, $role) {
    echo parent::__construct($name, $login, $password);
    $this->role = $role;
  }
  function showInfo(){
    echo "Имя: {$this->name}<br>
    Логин: {$this->login}<br>
    Пароль: {$this->password}<br>
    Роль: {$this->role}<hr>";
  }
  function getInfo(){
  $arr = [
          'name' => $this->name,
          'login' => $this->login,
          'password' => $this->password,
          'role' => $this->role,
        ];
    return $arr;
  }
}
