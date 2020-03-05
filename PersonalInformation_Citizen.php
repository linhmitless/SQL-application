 <?php

if (isset($_SESSION['POST'])) {
	$yesorno=$_POST['citizen'];
	 $sql = "UPDATE PERSONAL_INFO INSERT INTO CITIZEN VALUES ('$yesorno')";
	 mysqli_query($con,$sql); // Execute query
}
?>