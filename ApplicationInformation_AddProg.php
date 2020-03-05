 <?php

if (isset($_POST['submit'])) {
	$yesorno=$_POST['yesno'];
	 $sql = "UPDATE APPLICATION_INFO INSERT INTO ADD_PROG VALUES ('$yesorno')";
	 mysqli_query($con,$sql); // Execute query
}
?>