<?php
    $filepath = realpath(dirname(__FILE__));
	 include_once ($filepath.'/inc/header.php');
   include_once ($filepath.'/../classes/User.php');
   $usr = new User();
?>

<?php
  if (isset($_GET['dis'])){
    $dblid = (int)$_GET['dis'];
    $dblUser = $usr->DisableUser($dblid);
  }
  if (isset($_GET['ena'])){
    $eblid = (int)$_GET['ena'];
    $eblUser = $usr->enableUser($eblid);
  }

  if (isset($_GET['del'])){
    $delid = (int)$_GET['del'];
    $delUser = $usr->deleteUser($delid);
  }

?>

<div class="main">
  <h4>Admin Panel - Manage Users</h4>

<?php
  if (isset($dblUser)) {
    echo $dblUser;
  }
  if (isset($eblUser)) {
    echo $eblUser;
  }
  if (isset($delUser)) {
    echo $delUser;
  }

?>

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

  $userData = $usr->getAllUser();
      if ($userData) {
        $i = 0;
        while($result = $userData->fetch_assoc()){
          $i++;
?>
      <tr>

        <td align=center><?php
            if($result['status']=='1'){
              echo "<span class='error'>".$i."</span>";
            }else{
              echo $i;
           }?></td>

        <td align=center><?php echo $result['name'];?></td>
        <td align=center><?php echo $result['username'];?></td>
        <td align=center><?php echo $result['email'];?></td>
        <td align=center>
          <?php if ($result['status']== '0' ) {?>
              <a onclick="return confirm('Are you Sure to Disable!!')" href="?dis=<?php echo $result['userId'];?>"> Disable </a>
            <?php } else {?>
            <a onclick = "return confirm('Are you Sure to Enable!!')" href="?ena=<?php echo $result['userId'];?>"> Enable </a>
          <?php } ?>

        ||<a onclick = "return confirm('Are you Sure to delete!!')" href="?del=<?php echo $result['userId'];?>"> Remove </a>
        </td>
      </tr>
      <?php }}?>
   </table>
 </div>

</div>
<?php include 'inc/footer.php'; ?>
