<?php include 'inc/header.php'; ?>
<?php
	Session::checkSession();
  $question = $exm->getQuestion();
  $total = $exm->GetTotalRows();
 ?>
<div class="main">
<h1>Welcome to Online Exam</h1>

  <div class="starttest">
      <h2>Test your knowledge</h2>
      <p>This is mutiple choice project to test your knowledge.</p>
      <ul>
        <li><strong>Number of Questions:</strong><?php echo $total;?></li>
        <li><strong>Question type:</strong>Multiple choice</li>
      </ul>
      <a href="test.php?q=<?php echo $question['questionNo'];?>">Start the test</a>
  </div>

</div> <!-- end of class main  -->
<?php include 'inc/footer.php'; ?>
