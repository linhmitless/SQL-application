<?php include 'mysql_start.php';
session_start();
 ?>
<?php include 'NewApplication_Submit.php'; 
$id = $_SESSION['app_id'];
echo "id: " .$id ."<br/>"
?>
<html>
<head>
	<title> Personal Information </title>
</head>
<body>  
	<h1>Personal Information </h1>                                                                                                                                   
  	    <form method="POST" action="ApplicationInformation.php">
	  	<br/>
	    <label for='personalinfo'> Page 2 </label> 

		<?php include('PersonalInfoQuestion.html') ?>
		<?php include 'PersonalInformation_State.php'; ?>
		<?php include('PersonalInfoRadio.html') ?>
		<?php include 'PersonalInformation_Gender.php'; ?>
		<?php include 'PersonalInformation_VetStatus.php'; ?>
		<?php include 'PersonalInformation_MilitaryBranch.php'; ?>

		<p> Are you Hispanic/Latino origin? </p> 

				Yes<input type="radio" name="formHispanic" value="Yes"> <br>
				No<input type="radio" name="formHispanic" value="No"> <br>


	    <?php include 'PersonalInformation_Race.php'; ?>

<input type='submit' value='Next' />
</form>


</html>
