<!DOCTYPE HTML>
<?php include 'mysql_start.php'; ?>
<?php	session_start();
	if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
			header("Location: success.php");
			}
	if(isset($_POST['username']) && isset($_POST['password'])){
		if(_POST['username']== $username && $_POST['password'] == $password)
			
			$_SESSION['logged_in']= true;
			header("Location: login.php");
	}
			
		
?>
<html>
  <body>
	<form method="post" action="login.php">
		Username:<br/>
		<input type="text" name="username"> <br/>
		Password<br/>
		<input type="password" name="password"><br/>
		<input type="submit" value="Login!">
		<a href = "new-account.php">Create New Account</a>
		</form>
	</body>
 </html>
 