<html>
<p> What type of degree are you applying for? </p>
</html>
<?php 
$sql= "SELECT * FROM DEGREES";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  echo "<select  name='formDegree'>";
  while($row = mysqli_fetch_row($result)) {
    echo "<option value='" . $row[0] . "'>" . $row[1] . "</option>\n";
  }
  echo "</select>\n";
} else {
  echo "0 results";
}

mysqli_free_result($result);
?>