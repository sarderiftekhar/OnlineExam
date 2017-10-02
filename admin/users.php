<?php
    $filepath = realpath(dirname(__FILE__));
	 include_once ($filepath.'/inc/header.php');
   include_once ($filepath.'/../classes/User.php');
   $usr = new User();
?>

<div class="main">

  <div class="manageuser">

    <table class="tblone">
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Username</th>
        <th>Email</th>
        <th>Action</th>
      </tr>

<?php

  $userData = $usr->getallUser();
      if ($userData) {
        $i = 0;
        while($result = $userData->fetch_assoc()){
          $i++;
?>
      <tr>
        <td align=center><?php echo $i; ?></td>
        <td align=center><?php echo $result['name'];?></td>
        <td align=center><?php echo $result['username'];?></td>
        <td align=center><?php echo $result['email'];?></td>
        <td align=center><a onclick = "return confirm('Are you Sure to Disable!!')" href="?dis=<?php echo $result['userId'] ?>">Disable</a>||
        <a onclick = "return confirm('Are you Sure to Enable!!')" href="?ena=<?php echo $result['userId'] ?>">Enable</a>||
        <a onclick = "return confirm('Are you Sure to delete!!')" href="?del=<?php echo $result['userId'] ?>">Remove</a></td>
      </tr>
      <?php }}?>
   </table>
 </div>

</div>
<?php include 'inc/footer.php'; ?>
