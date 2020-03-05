</head>
<body>


</body>
<?php
$servername="cssql.seattleu.edu";
$username="os_nguye468";
$password="n53cyxam";
$dbname = "os_team05";


//Create Connection
$conn = mysqli_connect($servername,$username,$password,$dbname);

//Check Connection
if(!$conn){
	die("Connection failed".mysqli_connect_error());
	}
echo"Welcome to the Seattle University 2018-2019 Graduate Application";



?>