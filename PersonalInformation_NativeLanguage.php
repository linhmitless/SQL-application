 <?php

if (isset($_POST['submit'])) {
	$yesorno=$_POST['yesno'];
	 $sql = "UPDATE PERSONAL_INFO INSERT INTO US_NATIVE VALUES ('$yesorno')";
	 mysqli_query($con,$sql); // Execute query
}
?>