<html>
<p>What kind of Student are you?</p>
</html>
<?php 
$sql="SELECT TYPE_CODE,GRAD_TYPE_NAME FROM APPLICANT_TYPES";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  echo "<select name = 'formAppType'>";
  while($row = mysqli_fetch_row($result)) {
    echo "<option value='" . $row[0] . "'>" . $row[1] . "</option>\n";
  }
  echo "</select>\n";
} else {
  echo "0 results";
}


mysqli_free_result($result);
?>