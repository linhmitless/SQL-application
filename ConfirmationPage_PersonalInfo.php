<?php

echo "<br /><b>Personal Info:</b><br />";
	$sql = "select PERSON_ID from APPLICATION where APP_ID =". $id.";";
	$result = mysqli_query($conn, $sql);
	$personal = mysqli_fetch_row($result);
	$sql = "SELECT APP_ID,FIRST_NAME, MID_INITIAL, LAST_NAME,DOB, 
	PHONE_AREA, PHONE_NUM, GENDER, MAIL_ADDRESS, ADDRESS_CITY, ZIPCODE, STATE_CODE,
	HISPANIC, US_NATIVE, CITIZEN, RACE_CODE, VET_CODE, BRANCH_CODE FROM PERSONAL_INFO WHERE PERS_ID = ".$personal[0].";";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_row($result);
	echo "First name: ";
	echo $row[0];
	echo "<br />";
	echo "Last name: ";
	echo $row[1];
	echo "<br />";
	echo "Date of Birth: ";
	echo $row[4];
	echo "<br />";
	echo "Street Address: ";
	echo $row[8];
	echo "<br />";
	echo "City: ";
	echo $row[9];
	echo "<br />";
	$sql = "SELECT STATE_NAME FROM STATES WHERE STATE_CODE = ".$row[8].";";
	$result = mysqli_query($conn, $sql);
	$staterow = mysqli_fetch_row($result);
	echo "State: ";
	echo $staterow[0];
	echo "<br />";
	echo "ZIP: ";
	echo $row[10];
	echo "<br />";
	echo "Preferred Phone Number: ";
	echo $row[5];
	echo "-";
	echo $row[6];
	echo "<br />";
	echo "Are you a U.S. citizen? ";
	if ($row[14] == 1)
		echo "Yes";
	else
		echo "No";
	echo "<br />";
	echo "Is English your native Language? ";
	if ($row[13] == 1)
		echo "Yes";
	else
		echo "No";
	echo "<br />";
	
	$sql = "SELECT GENDER_TYPE FROM GENDERS WHERE GENDER_CODE = ".$row[7].";";
	$result = mysqli_query($conn, $sql);
	$genderrow = mysqli_fetch_row($result);
	echo "Gender: ";
	echo $genderrow[0];
	echo "<br />";
	
	$sql = "SELECT VET_TYPE FROM VETERAN_STATUS WHERE VET_CODE = ".$row[16].";";
	$result = mysqli_query($conn, $sql);
	$vetrow = mysqli_fetch_row($result);
	echo "Please tell us your veteran status: ";
	echo $vetrow[0];
	echo "<br />";
	

	$sql = "SELECT BRANCH_CODE FROM MILITARY_BRANCH WHERE PERS_ID = ".$personal[0].";";
	$result = mysqli_query($conn, $sql);
	$branch = mysqli_fetch_row($result);
	$sql = "SELECT BRANCH_TYPE FROM MILITARY_BRANCH WHERE MILITARY_CODE = ".$branch[0].";";
	$result = mysqli_query($conn, $sql);
	$militaryrow = mysqli_fetch_row($result);
	echo "Military Branch: ";
	echo $militaryrow[0];
	echo "<br />";
	
	echo "Are you Hispanic/Latino origin? ";
	if ($row[12] == 1)
		echo "Yes";
	else
		echo "No";
	echo "<br />";

	?>