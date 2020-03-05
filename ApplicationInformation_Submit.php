<?php session_start();//include PersonalInformation_Hispanic.php?>

<?php

$id = $_SESSION['app_id'];
$conn= mysqli_connect("cssql.seattleu.edu","os_mohame15","nEGCbV5w","os_team05");

$finaid = $_POST['finaid'];
$tuitionassist = $_POST['tuitionassist'];
$addprog = $_POST['addprog'];
$felony = $_POST['felony'];
$probation = $_POST['probation'];


if(!$conn)
{
die("Connection failed: " . mysqli_connect_error());
}
else {
	echo "welcome!";
}

//$submit = "INSERT INTO APPLICATIONS (TYPE_CODE, TERM_CODE, MAJOR_CODE, DEGREE_CODE, COLL_CODE) VALUES ('$appType','$term', '$major','$degree','$college')";

$submit = "INSERT INTO APPLICATION_INFO (FIN_AID, TUIT_ASSIST, ADD_PROG,
	PROBATION_HIST, APP_ID, FELONY) VALUES (?,?,?,?,?,?)";
$stmt = mysqli_prepare($conn,$submit);
mysqli_stmt_bind_param($stmt, "ssssis", $finaid, $tuitionassist,
	$addprog, $probation, $id, $felony);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);



?>