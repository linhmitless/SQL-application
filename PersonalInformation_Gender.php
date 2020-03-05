<html> 
<p> Please select your gender </p>
</html>
<?php 
$sql= "SELECT * FROM GENDERS";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  echo "<select name = 'formGender'>";
  while($row = mysqli_fetch_row($result)) {
    echo "<option value='" . $row[0] . "'>" . $row[1]. "</option>\n";
  }
  echo "</select>\n";
} else {
  echo "0 results";
}

mysqli_free_result($result);
?>