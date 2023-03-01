<?php

require 'models/User.php';


class AuthController
{

  private $user;

  public function __construct()
  {
    $this->user = new User;
  }

  public function connect()
  {
    if ($this->user->getBdd() != null) {
      require 'views/test.php';
    }else {
      require 'views/error.php';
    }
  }
}
