<html>
<p>What College are you applying to? </p>
</html>
<?php 
$sql= "SELECT * FROM COLLEGES";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  echo "<select name = 'formCollege'>";
  while($row = mysqli_fetch_row($result)) {
    echo "<option value='" . $row[0] . "'>" . $row[1] . "</option>\n";
  }
  echo "</select>\n";
} else {
  echo "0 results";
}

mysqli_free_result($result); 

$var = $_POST['degreeChoice'];

extract($_REQUEST, EXTR_SKIP);
$sql = "INSERT INTO APPLICATIONS (APP_COLL_CODE) VALUES (".$var.") WHERE 
  APP_ID =" . $_SESSION["app_id"] ;

?>