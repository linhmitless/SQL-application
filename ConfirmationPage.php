</head>
<body>
<?php include 'mysql_start.php';?>
<?php include 'ApplicationInformation_Submit.php';?>
<h1>Confirmation Page</h1>
<html>
</body>

<p>Your application for the Graduate Program at Seattle University has been submitted.
Thank you for applying to the Graduate Program at Seattle University.</p>

 
 <?php include 'ConfirmationPage_Submit.php';?>
</html>

<?php mysqli_close($conn); ?>