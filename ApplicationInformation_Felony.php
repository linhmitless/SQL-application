 <?php

if (isset($_POST['submit'])) {
	$yesorno=$_POST['felony'];
	 $sql = "UPDATE APPLICATION_INFO INSERT INTO FELONY VALUES ('$yesorno')";
	 mysqli_query($con,$sql); // Execute query
}
?>