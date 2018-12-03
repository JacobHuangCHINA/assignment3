<?php
$whichCus = $_POST["pickaCustomer"]; //get selected museum value from the form
echo $whichCus;
//$query = "SELECT description FROM Products WHERE ProductID IN (SELECT ProductID FROM Purchase WHERE CustomerID = (SELECT CustomerID FROM Customers WHERE LastName = ".$whichCus."));"; //fill in with correct query
$query = "SELECT LastName FROM Customers ORDER BY LastName ASC;";
echo $query;
$result = mysqli_query($connection, $query);
 if (!$result) {
 die("databases query on art pieces failed. ");
 }
 echo "<ul>"; //put the artwork in an unordered bulleted list
 while ($row = mysqli_fetch_assoc($result)) {
   echo "Bought";
   echo "<li>" .$row["LastName"]. "</li>";
 }
 echo "</ul>"; //end the bulleted list
 mysqli_free_result($result);
 ?>
