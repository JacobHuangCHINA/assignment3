<<?php
$query = "SELECT * FROM Customers ORDER BY LastName ASC;";
$result = mysqli_query($connection,$query);
if (!$result) {
   die("databases query failed.");
}
echo "<ol>";
while ($row = mysqli_fetch_assoc($result)) {
  echo "<tr><td> CustomerID </td><td> LastName FirstName City PhoneNum AgentID </td>";
  echo "<input value='";
  echo $row["CustomerID"]."'>";
  echo "<tr><td>" .$row["CustomerID"]. "</td><td>" .$row["LastName"]. " " .$row["FirstName"]. " " .$row["City"]. " ".$row["PhoneNum"]. " " .$row["AgentID"]. "</td>";
  echo "<br>";
}
mysqli_free_result($result);


?>
