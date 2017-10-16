<?php  include 'inc/header.php'; ?>
<?php
  Session::checkSession();
  $userId = $_SESSION['userid'];
  $username = $_SESSION['username'];
  echo $userId;
?>

<?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
      $updateUser=$usr->updateUserData($userid,$_POST);
    }
?>
<style>
 .profile{width:530px; margin:0 auto; border:1px solid #ddd;padding:30px 50px 50px; }
</style>

<div class="main">
<h1>Update your profile</h1>
<div class="profile">
  <?php
    if(isset($updateUser)){
      echo $updateUser;
    }
  ?>

<?php
    $getData = $usr->getUserDataByName($username);
    if ($getData){
    $result= $getData->fetch_assoc();
 ?>
  	<form action="" method="post">
      <table class="tbl">
            <tr>
          <td> Name  </td>
          <td><input name="name" type="text" value="<?php echo $result['name'];?>"/></td>
        </tr>
        <tr>
          <td>UserName</td>
          <td><input name="username" type="text" value="<?php echo $result['username'];?>"/></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input name="email" type="text" value="<?php echo $result['email'];?>"/></td>
        </tr>
        <tr>
          <td><input type="submit" id="update" value="Update"/></td>
        </tr>
<?php }else echo "Error!!" ;?>
      </table>
	   </form>
   </div>
</div>
<?php include 'inc/footer.php'; ?>
