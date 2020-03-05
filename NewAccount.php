<?php
session_start();
$_SESSION['username'] = $_POST['username'];
$_SESSION['password'] = $_POST['password'];

if(isset($_POST['password'])) {   
    $password2=$_POST['password2'];
    if($_SESSION['password']!=$password2) {
        header("Location: failed_login.html");
        exit;
    }
    else {
        $servername = "cssql.seattleu.edu";
        $username = "os_mohame15";
        $pass = "nEGCbV5w";
        $dbname = "os_team05";

        // Create connection
        $conn = mysqli_connect($servername, $username, $pass, $dbname);

        // Check connection
        if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
        }
		// Check if username already exists
        
		if(isset($_POST['username'])){
			if($_POST['password']==$_POST['password2']{
        $result ="select Username from User where Username = ? limit 1";
        $sql=mysqli_prepare($conn, $result);
        mysqli_stmt_bind_param($sql, "s", $_POST['username']);
        mysqli_stmt_execute($sql);
        mysqli_stmt_bind_result($sql, $col1);
        if (mysqli_stmt_num_rows($sql)!=0)
        {
            header("Location: failed_login.html");
            exit;
        }
       
		
			


	   else {
            $sql="insert into User(Username, Password) values('".$_SESSION['username']."','".MD5($_SESSION['password'])."')";
            mysqli_query($conn, $sql);
            header("Location: my_applications.php");
            echo $sql;
            exit;
        }
        mysqli_close($conn);
    }
}
?>

