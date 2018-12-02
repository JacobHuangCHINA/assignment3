<<?php
$query = "SELECT LastName FROM Customers ORDER BY LastName ASC;";
$result = mysqli_query($connection,$query);
if (!$result) {
   die("databases query failed.");
}
echo "<ol>";
while ($row = mysqli_fetch_assoc($result)) {
  echo "<option value='";
  echo $row["CustomerID"]."'>";
  echo $row["LastName"];
  echo "</option>";
}
mysqli_free_result($result);


?>
