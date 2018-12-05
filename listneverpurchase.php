<?php
$query = "SELECT * FROM Products WHERE ProductID NOT IN (SELECT ProductID FROM Purchase);";
$result = mysqli_query($connection,$query);
if (!$result) {
   die("databases query failed.");
}

while ($row = mysqli_fetch_assoc($result)) {
  echo $row["Description"];
  echo "<br>";
}
mysqli_free_result($result);

 ?>
