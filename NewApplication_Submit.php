<?php 
session_start();
?>
<?php
$appType = $_POST['formAppType'];
$major = $_POST['formMajor'];
$college = $_POST['formCollege'];
$degree = $_POST['formDegree'];
$term = $_POST['formTerm'];

$conn= mysqli_connect("cssql.seattleu.edu","os_mohame15","nEGCbV5w","os_team05");
if(!$conn)
{
die("Connection failed: " . mysqli_connect_error());
}
else {
	echo "welcome!";
}

//$submit = "INSERT INTO APPLICATIONS (TYPE_CODE, TERM_CODE, MAJOR_CODE, DEGREE_CODE, COLL_CODE) VALUES ('$appType','$term', '$major','$degree','$college')";

$submit = "INSERT INTO APPLICATIONS (TYPE_CODE, TERM_CODE, MAJOR_CODE, DEGREE_CODE, COLL_CODE) VALUES (?,?,?,?,?)";
$stmt = mysqli_prepare($conn,$submit);
mysqli_stmt_bind_param($stmt, "iiiii", $appType,$term, $major, $degree, $college);
mysqli_stmt_execute($stmt);
$id = mysqli_insert_id($conn);
$_SESSION['app_id'] = $id;
mysqli_stmt_close($stmt);



?>