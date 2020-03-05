<html>
<p> Term </p>
</html>
<?php 
$sql= "SELECT * FROM TERMS";
$result = mysqli_query($conn, $sql);

 
if (mysqli_num_rows($result) > 0) {
  echo "<select  name='formTerm'>";
  while($row = mysqli_fetch_row($result)) {
    echo "<option value='" . $row[0] . "'>" . $row[1]. " " .  $row[2] . "</option>\n";
  }
  echo "</select>\n";
} else {
  echo "0 results";
}
?>