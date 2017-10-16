<?php
  $filepath = realpath(dirname(__FILE__));
  include_once ($filepath.'/../lib/Session.php');
  include_once ($filepath.'/../lib/Database.php');
  include_once ($filepath.'/../helpers/Format.php');


class User{
  private $db;
  private $fm;
  public function __construct(){
    $this->db = new Database();
    $this->fm =  new Format();
  }

public function userRegistration($name,$username,$password,$email){
      $name = $this->fm->validation($name);
      $username = $this->fm->validation($username);
      $password = $this->fm->validation($password);
      $email = $this->fm->validation($email);

      $name = mysqli_real_escape_string($this->db->link,$name);
      $username = mysqli_real_escape_string($this->db->link,$username);
      $password= mysqli_real_escape_string($this->db->link,md5($password));
      $email = mysqli_real_escape_string($this->db->link,$email);

      if ($name == "" || $username == "" || $password == "" || $email == "") {
        echo "<span class='error'> Cell must not be empty</span>";
        exit();
      }else if(filter_var($email,FILTER_VALIDATE_EMAIL)===false){
        echo "<span class='error'> Invalid email address </span>";
        exit();
      }else{
        $chkquery = "SELECT * FROM dbl_user WHERE email = '$email'";
        $chkresult = $this->db->select($chkquery);
        if ($chkresult!=false) {
          echo "<span class='error'>Email already exists</span>";
          exit();
        }else{
          $query = "INSERT INTO dbl_user(name.username,password,email) VALUES ('$name','$username','$password','$email')";
          $inserted_row = $this->db->insert($query);
          if($inserted_row){
          echo "<span class='success'>User registered succeefully</span>";
          exit();
        }else {
          echo "<span class='error'>User not registered</span>";
          exit();
        }
      }
    }
  }

public function userLogin($email,$password){
  $email = $this->fm->validation($email);
  $password = $this->fm->validation($password);
  $email = mysqli_real_escape_string($this->db->link,$email);
  $password= mysqli_real_escape_string($this->db->link,$password);

  if ($email == "" || $password == "") {
    echo "empty";
    exit();
  }else{
    $query = "SELECT * FROM dbl_user WHERE email = '$email' AND password='$password'";
    $result = $this->db->select($query);
    if ($result!=false) {
      $value = $result->fetch_assoc();
      if($value['status']=='1'){
        echo"disable";
        exit();
      }else{
        Session::init();
        Session::set("login",true);
        Session::set("userid",$value['userid']);
        Session::set("username",$value['username']);
        Session::set("name",$value['name']);
      }
      }else{
        echo "error";
        exit();
      }
   }
}

public function getUserData($userid){
  $query = "SELECT * FROM dbl_user WHERE userId='$userid'";
  $result = $this->db->select($query);
  return $result;
}

public function getUserDataByName($username){
  $query = "SELECT * FROM dbl_user WHERE username='$username'";
  $result = $this->db->select($query);
  return $result;
}



public function getAllUser(){
      $query = "SELECT * FROM dbl_user ORDER BY userId DESC";
      $result = $this->db->select($query);
      return $result;
  }

public function updateUserData($userId,$data){

  $name = $this->fm->validation($data['name']);
  $name = $this->fm->validation($data['username']);
  $name = $this->fm->validation($data['email']);

  $name = mysqli_real_escape_string($this->db->link,$name);
  $username = mysqli_real_escape_string($this->db->link,$username);
  $email = mysqli_real_escape_string($this->db->link,$email);

  $query = "UPDATE dbl_user
            SET
            name = '$name'
            username = '$username'
            email = '$email'
           WHERE userid = '$userid'";

  $updated_row = $this->db->update($query);

  if($updated_row){
    $msg = "<span class='success'>User data Updated !</span>";
    return $msg;
  }else{
    $msg = "<span class='success'>User data not updated !</span>";
    return $msg;
  }
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
