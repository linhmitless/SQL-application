<?php include 'mysql_start.php'; ?>
<?php include 'PersonalInformation_Submit.php'; ?>
<html>
<head>
	<title> Application Information </title>
</head>
<body>  
	 <form method="POST" action="ConfirmationPage.php">
	<h1> Application Information</h1>       
  	<br/>
    <label for='appinfo'> Page 3 </label> 
	<?php include('ApplicationInformationQuestion.html') ?>
    <br />
    <input type='submit' value='Submit' />
  </form>
</body>
<html>

<?php mysqli_close($conn); ?>

</body>
</html>