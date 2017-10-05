<?php
  $filepath = realpath(dirname(__FILE__));
  include_once ($filepath.'/../lib/Database.php');
  include_once ($filepath.'/../helpers/Format.php');


class Exam{
  private $db;
  private $fm;

  public function __construct(){
    $this->db = new Database();
    $this->fm =  new Format();
  }


public function getQueByOrder(){

  $query = "SELECT * FROM dbl_ques ORDER BY questionNo ASC";
  $result = $this->db->select($query);
  return $result;
    }

}
?>
