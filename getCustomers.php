<<?php
$query = "SELECT * FROM Customers ORDER BY LastName ASC;";
$result = mysqli_query($connection,$query);
if (!$result) {
   die("databases query failed.");
}
echo "<ol>";
while ($row = mysqli_fetch_assoc($result)) {
  echo "<tr><td>CustomerID</td><td>LastName FirstName</td><td>City</td><td>PhoneNum</td><td>AgentID</td></tr>";
  echo "<input type='radio' value='";
  echo $row["CustomerID"]."'>";
  echo "<tr><td>" .$row["CustomerID"]. "</td><td>" .$row["LastName"]. .$row["FirstName"]. "</td><td>" .$row["City"]. "</td><td>".$row["PhoneNum"]. "</td><td>" .$row["AgentID"]. "</td></tr>";
  echo "<br>";
}
mysqli_free_result($result);


?>
