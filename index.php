<?php include 'inc/header.php'; ?>
<div class="main">
<h1>Online Exam System - User Login</h1>
	<div class="segment" style="margin-right:30px;">
		<img src="img/test.png"/>
	</div>
	<div class="segment">
	<form action="" method="post">
		<table class="tbl">
			 <tr>
				 <br><br>
			   <td>Email</td>
			   <td><input name="email" type="text" idea="email"></td>
			 </tr>
			 <tr>
			   <td>Password </td>
			   <td><input name="password" type="password" id="password"></td>
			 </tr>

			  <tr>
			  <td></td>
			   <td><input type="submit" id="loginsubmit" value="Login">
			   </td>
			 </tr>
       </table>
	   </form>
		 <br><br>
	   <p>New User ? <a href="register.php">Signup</a> Free</p>
	</div>



</div>
<?php include 'inc/footer.php'; ?>
