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

public function delQuestion($quesNo){
    $tables = array("dbl_ques","dbl_ans");
    foreach ($tables as $table) {
        $delquery = "DELETE FROM $table WHERE questionNo='$quesNo'";
        $deldata = $this->db->delete($delquery);
    }
    if($deldata){
    $msg = "<span class='sucess'>Data Deleted Successfully....</span>";
  }else {
    $msg = "<span class='error'>Data cannot be deleted</span>";
  }
}


public function addQuestions($data){
  $questionNo = mysqli_real_escape_string($this->db->link,$data['questionNo']);
  $ques = mysqli_real_escape_string($this->db->link,$data['ques']);

  $ans = array();
  $ans[0] = $data['ans1']; // Need to sanitise
  $ans[1] = $data['ans2'];// Need to sanitise
  $ans[2] = $data['ans3'];// Need to sanitise
  $ans[3] = $data['ans4'];// Need to sanitise

  $rightAns = $data['rightAns'];

  $query = "INSERT INTO dbl_ques(questionNo,ques) VALUES ('$questionNo','$ques')";

  $insert_row = $this->db->insert($query);

  if ($insert_row) {
    foreach ($ans as $key => $ansName) {
      if ($ansName !='') {
        if ($rightAns == $key) {
          $rquery = "INSERT INTO dbl_ans(questionNo,rightAns,ans) VALUES ('$questionNo','1','$ansName')";
        }else{
          $rquery = "INSERT INTO dbl_ans(questionNo,rightAns,ans) VALUES ('$questionNo','0','$ansName')";
        }
        $insert_row = $this->db->insert($query);
        if ($insert_row) {
        continue;
      }else{
        die('Error...');
      }
    }
  }
  $msg = "<span class = 'success'> Question added succesfully</span>";
  }
}

public function getQueByOrder(){

  $query = "SELECT * FROM dbl_ques ORDER BY questionNo ASC";
  $result = $this->db->select($query);
  return $result;
} // End of get Question by order


public function GetTotalRows(){

  $query = "SELECT * FROM dbl_ques";
  $getResult = $this->db->select($query);
  $total = $getResult->num_rows;
  return $total;
}







}// End of the class
?>
