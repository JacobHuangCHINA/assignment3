<?php
$query = "SELECT * FROM Agents;";
$result = mysqli_query($connection,$query);
if (!$result) {
   die("databases query failed.");
}

while ($row = mysqli_fetch_assoc($result)) {
  echo "<input type='radio' name='Agent' value='";
  echo $row["AgentID"]."'>";
  echo $row["FirstName"] " " .$row["LastName"]. " " .$row["AgentID"]. " ";
  echo "<br>";
}
mysqli_free_result($result);
 ?>
