<html> 
<p>Please mark all that apply</p>
</html>
<?php 
$sql= "SELECT * FROM RACES";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

  while($row = mysqli_fetch_row($result)) {
    echo "<input type = checkbox name = race[] >" . $row[1]. "<br>";
  }
} else {
  echo "0 results";
}

// this is not required as of now 
// but needed later if want to take form's input
if(isset($_POST['submit'])){//to run PHP script on submit
	if(!empty($_POST['race'])){
	// Loop to store and display values of individual checked checkbox.
		foreach($_POST['race'] as $selected){
		echo $selected."</br>";
		}
	}
}
mysqli_free_result($result);
?>