 <?php

if (isset($_POST['submit'])) {
	$yesorno=$_POST['yesno'];
	 $sql = "UPDATE APPLICATION_INFO INSERT INTO TUIT_ASSIST VALUES ('$yesorno')";
	 mysqli_query($con,$sql); // Execute query
}
?>