<?php
  $filepath = realpath(dirname(__FILE__));
  include_once ($filepath.'/../lib/Database.php');
  include_once ($filepath.'/../helpers/Format.php');


class User{
  private $db;
  private $fm;
  public function __construct(){
    $this->db = new Database();
    $this->fm =  new Format();
  }

  public function getallUser(){

    $query = "SELECT * FROM dbl_user ORDER BY userId DESC";
    $result = $this->db->select($query);
    return $result;

  }


  public function getAdminData($data){

      $adminUser = $this->fm->validation($data['adminUser']);
      $adminPass = $this->fm->validation($data['adminPass']);
      $adminUser = mysqli_real_escape_string($this->db->link,$adminUser);
      $adminPass = mysqli_real_escape_string($this->db->link,md5($adminPass));

  }
}
?>
