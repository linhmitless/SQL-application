<?php session_start();//include PersonalInformation_Hispanic.php?>

<?php

$id = $_SESSION['app_id'];
$conn= mysqli_connect("cssql.seattleu.edu","os_mohame15","nEGCbV5w","os_team05");

$gender= $_POST['formGender'];
$military = $_POST['formMilitary'];
$veteran = $_POST['formVetStatus'];
$race = '01';
$hispanic = $_POST['formHispanic'];
$language = $_POST['formUSNative'];
$citizen = $_POST['formUSCitizen'];
$first = $_POST['firstName'];
$last = $_POST['lastName'];
$middle = $_POST['middleInitial'];
$state = $_POST['formState'];
$dob = $_POST['formDOB'];
$phone_area = $_POST['phoneArea'];
$phone_number =  $_POST['phoneNumber'];
$mail_addr = $_POST['mailingAddress'];
$city = $_POST['city'];
$zip = $_POST['zip'];
$id = $_SESSION['app_id'];


if(!$conn)
{
die("Connection failed: " . mysqli_connect_error());
}
else {
	echo "welcome!" .$id . "<br/>";
}

//$submit = "INSERT INTO APPLICATIONS (TYPE_CODE, TERM_CODE, MAJOR_CODE, DEGREE_CODE, COLL_CODE) VALUES ('$appType','$term', '$major','$degree','$college')";

$submit = "INSERT INTO PERSONAL_INFO (APP_ID,FIRST_NAME, MID_INITIAL, LAST_NAME,DOB, 
	PHONE_AREA, PHONE_NUM, GENDER, MAIL_ADDRESS, ADDRESS_CITY, ZIPCODE, STATE_CODE,
	HISPANIC, US_NATIVE, CITIZEN, RACE_CODE, VET_CODE, BRANCH_CODE)
 VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

$stmt = mysqli_prepare($conn,$submit);
mysqli_stmt_bind_param($stmt, "isssssssssssssssss", $id,$first, $last,
	$middle, $dob,$phone_area,$phone_number, $gender, $mail_addr, $city,
	$zip,$state, $hispanic, $language, $citizen, $race, $veteran, $military);

mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);

?>