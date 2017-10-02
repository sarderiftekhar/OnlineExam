<?php
    $filepath = realpath(dirname(__FILE__));
	 include_once ($filepath.'/inc/header.php');
   include_once ($filepath.'/../lib/Database.php');
?>

<style>
  .adminpanel {width:500px;color:#999;margin:30px auto 0; padding:50px; border:1px solid #ddd;}
</style>


<div class="main">
<h1>Admin Panel</h1>

<div class="adminpanel">
    <h2>Welcome to admin panel</h2>
    <p>Use your user and online exams from here...</p>
</div>

</div>
<?php include 'inc/footer.php'; ?>
