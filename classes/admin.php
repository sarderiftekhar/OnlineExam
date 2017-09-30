<?php
  $filepath = realpath(dirname(__FILE__));
  include_once ($filepath.'/../lib/Session.php');
  include_once ($filepath.'/../lib/Database.php');
  include_once ($filepath.'/../helpers/format.php');

  // Admin class

class admin {
  private $db;
  private $fm;

  pulblic function _construct(){

    $this-> = new Database();
    $this-> = new format();

  }
}

?>
