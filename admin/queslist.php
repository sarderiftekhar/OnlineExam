<?php
    $filepath = realpath(dirname(__FILE__));
	 include_once ($filepath.'/inc/header.php');
   include_once ($filepath.'/../classes/Exam.php');
   $exm = new Exam();

  if (isset($_GET['delque'])) {
    $questionNo = (int)$_GET['delque'];
    $delQue = $exm->delQuestion($questionNo);
  }
?>

<div class="main">
  <h4>Admin Panel - Manage Questions</h4>
<?php

  if(isset($delQue)){
    echo $delque;
  }
?>
  <div class="quelist">
    <table class="tblone">
      <tr>
        <th width="10%">No</th>
        <th width="70%">Questions</th>
        <th width="20%">Action</th>
      </tr>

<?php
   $getData = $exm->getQueByOrder();
      if ($getData) {
        $i = 0;
        while($result = $getData->fetch_assoc()){
          $i++;
?>
      <tr>
        <td align=center><?php echo $i;?></td>
        <td align=center><?php echo $result['ques'];?></td>
        <td align=center>
        <a onclick = "return confirm('Are you Sure to delete!!')" href="?delque=<?php echo $result['questionNo'];?>"> Remove </a>
        </td>
      </tr>
      <?php }}?>
   </table>
 </div>
</div>
<?php include 'inc/footer.php'; ?>
