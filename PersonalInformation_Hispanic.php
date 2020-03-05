 <?php

if (isset($_POST['submit'])) {
	$Hispanic=$_POST['yesno'];
	$sql = "UPDATE PERSONAL_INFO INSERT INTO HISPANIC VALUES ('$hispanic')";
	echo "here: ". $sql;
	 mysqli_query($conn,$sql); // Execute query
}
?>