<?php 
session_start();
?>


<?php
$id = $_SESSION['app_id'];



$conn= mysqli_connect("cssql.seattleu.edu","os_mohame15","nEGCbV5w","os_team05");
if(!$conn)
{
	die("Connection failed: " . mysqli_connect_error());
}
else {
	echo "Welcome ID#" . $id. "<br/>";
}

  	include 'ConfirmationPage_NewApp.php';
  	include 'ConfirmationPage_PersonalInfo.php';



?>
