<?php
  $filepath = realpath(dirname(__FILE__));
  include_once ($filepath.'/../lib/Session.php');
  include_once ($filepath.'/../lib/Database.php');
  include_once ($filepath.'/../helpers/format.php');

  // Admin class

class admin {
  private $db;
  private $fm;
  public function _construct(){
    $this->$db = new Database();
    $this->$fm =  new format();
  }

  public function getAdminData($data){
      $adminUser = $this->fm->validation($data['adminUser']);
      $adminPass = $this->fm->validation($data['adminPass']);
      $adminUser = mysqli_real_escape_string($this->link,$adminUser);
      $adminPass = mysqli_real_escape_string($this->link,md5($adminPass));

      $query = "SELECT * From dbl_admin Where adminUser = '$adminUser' AND adminPass ='$adminPass'";
      $result = $this->db->select($query);
      if ($result!=false) {
        $value = $result->fetch_assoc();
        Session::init();
        Session::set("adminLogin",true);
        Session::set("adminUser",$value['adminUser']);
        Session::set("adminIs",$value['adminId']);
        header("Location:index.php");
      }else{
        $msg= "<span class='error'>Username or Password dosn't match</span>";
        return $msg;
      }
  }
}

?>
