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
public function getAdminData($data){

      $adminUser = $this->fm->validation($data['adminUser']);
      $adminPass = $this->fm->validation($data['adminPass']);
      $adminUser = mysqli_real_escape_string($this->db->link,$adminUser);
      $adminPass = mysqli_real_escape_string($this->db->link,md5($adminPass));

  }

public function getAllUser(){

      $query = "SELECT * FROM dbl_user ORDER BY userId DESC";
      $result = $this->db->select($query);
      return $result;
  }

public function DisableUser($userId){

    $query="UPDATE dbl_user
            SET
            status = '1'
            WHERE userId = '$userId'";

    $updated_row = $this->db->update($query);

    if($updated_row){
      $msg = "<span class='success'>User disabled</span>";
      return $msg;
                    }
    else{

      $msg = "<span class='error'>Caution User not Disabled!!!</span>";
      return $msg;
    }

  }


  public function enableUser($userId){

      $query="UPDATE dbl_user
              SET
              status = '0'
              WHERE userId = '$userId'";

      $updated_row = $this->db->update($query);

      if($updated_row){
        $msg = "<span class='success'>User Enabled</span>";
        return $msg;
                      }
      else{

        $msg = "<span class='error'>Caution User not Enabled!!!</span>";
        return $msg;
      }

    }


      public function deleteUser($userId){

          $query="DELETE FROM dbl_user WHERE userId = '$userId'";

          $deldata = $this->db->delete($query);

          if($deldata){
            $msg = "<span class='success'>User Removed</span>";
            return $msg;
                          }
          else{

            $msg = "<span class='error'User cannot be Remove</span>";
            return $msg;
          }

        }



}
?>
