

<?php include 'mysql_start.php'; ?>
<html>
<head>
	<title> New Application </title>
</head>
<body>
  <h1>New Application</h1>                                                                                                                                     
  <form method="POST" action="PersonalInformation.php">
  	<br/>
		<label for='application'> Page 1 </label> 
		<?php include 'NewApplication_GradType.php'; ?>
		<?php include 'NewApplication_College.php'; ?>
		<?php include 'NewApplication_Degree.php'; ?>
		<?php include 'NewApplication_Major.php'; ?>
		<?php include 'NewApplication_Term.php'; ?>
  
  <br />
  <br />
  <input type='submit' value='Next'/>
  </form>
</body>
</html>

</body>
</html>