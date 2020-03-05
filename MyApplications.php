<?php session_start(); ?>
<?php include 'mysqli_open.php'; ?>
<html>
	Welcome <?php echo $_SESSION['username'] ?> <br />
	<head>
		<h1>My Applications</h1>
		<style>
			table, th, td {
			border: 1px solid black;
			}
		</style>
	</head>
	<body>
	<table id="application_table">
	  <tr>
        <th>APP ID</th>
        <th>Student Type</th>
		<th>College</th> 
		<th>Degree</th> 
		<th>Major</th>
		<th>Term</th> 
      </tr>
	
	<?php

	//DOESN'T WORK!

	$sql = "SELECT APP_ID, TYPE_CODE, TERM_CODE, MAJOR_CODE, DEGREE_CODE, COLL_CODE FROM APPLICATIONS WHERE APP_ID = " .$id. ";";
	$result = mysqli_query($conn, $sql);
	$bigrow = mysqli_fetch_row($result);

	$sql = "SELECT GRAD_TYPE_NAME FROM APPLICANT_TYPES WHERE TYPE_CODE = ".$bigrow[1].";";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_row($result);
	echo "What type of Student are you? ";
	echo $row[0];
	echo "<br />";

	$sql2 = "SELECT COLL_NAME FROM COLLEGES WHERE COLL_CODE = ".$bigrow[5].";";
	$result2 = mysqli_query($conn, $sql2);
	$row2 = mysqli_fetch_row($result2);
	echo "Which College are you applying to? ";
	echo $row2[0];
	echo "<br />";

	$sql3 = "SELECT DEGREE_TYPE FROM DEGREES WHERE DEGREE_CODE= ".$bigrow[4].";";
	$result3 = mysqli_query($conn, $sql3);
	$row3 = mysqli_fetch_row($result3);
	echo "What type of degree are you applying for? ";
	echo $row3[0];
	echo "<br />";

	$sql = "SELECT MAJOR_NAME FROM MAJORS WHERE MAJOR_CODE = ".$bigrow[3].";";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_row($result);
	echo "Please select the Major you are applying to: ";
	echo $row[0];
	echo "<br />";

	$sql = "SELECT TERM_QUAR, TERM_YEAR FROM TERMS WHERE TERM_CODE = ".$bigrow[2].";";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_row($result);
	echo "Term: ";
	echo $row[0];
	echo " year:";
	echo $row[1];
	echo " ";
	
	echo "<br />";


	?>
	</table>
	<br>
	
	<a href="NewApplication.php" ><input type=submit value="Create New Application"></a>
	</body>
</html>