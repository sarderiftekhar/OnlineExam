<?php
$filepath = realpath(dirname(__FILE__));
include_once ($filepath.'/inc/header.php');
include_once ($filepath.'/../classes/Exam.php');
$exm = new Exam();
?>
<style>
  .adminpanel {width:600px;color:#999;margin:20px auto 0; padding:30px; border:1px solid #ddd;}
</style>

<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
  $addQue = $exm->addQuestions($_POST);
  }
  //Get total questions
  $total = $exm->GetTotalRows();
  $next =(int) $total+1;
?>

<div class="main">
<h1>Admin Panel-Add question</h1>

<?php if (isset($addQue)) {
  echo "Succesfull";
} ?>

<div class="adminpanel">
    <form class="" action="" method="post">
      <table>
        <tr>
          <td align="right">Question No</td>
          <td>: </td>
          <td><input type="number" value="<?php  if (isset($next)) {echo $next; }else {echo 0;} ?>" name="questionNo"/></td>
        </tr>

        <tr>
          <td align="right">Question</td>
          <td>: </td>
          <td><input type="text" name="ques" placeholder="Enter Question..." required></td>
        </tr>

        <tr>
          <td align="right">Choice one</td>
          <td>: </td>
          <td><input type="text" name="ans1" placeholder="Enter choice 1..." required></td>
        </tr>

        <tr>
        <td align="right">Choice two</td>
        <td>: </td>
        <td><input type="text" name="ans2" placeholder="Enter choice 2..." required></td>
        </tr>
        <tr>
          <td align="right">Choice three</td>
          <td>: </td>
          <td><input type="text" name="ans3" placeholder="Enter choice 3..." required></td>
        </tr>
      <tr>
        <td align="right">Choice four</td>
        <td>: </td>
        <td><input type="text" name="ans4" placeholder="Enter choice 4..." required></td>
      </tr>

      <td align="right">Correct Ans</td>
      <td>: </td>
      <td><input type="number" name="rightAns" required></td>
      <tr>
        <td colspan="3" align="center">
          <input type="submit" value=" Add a Question">
        </td>
      </tr>
    </tr>

      </table>
    </form>
</div>

</div>
<?php include 'inc/footer.php'; ?>
