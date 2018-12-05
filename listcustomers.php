<?php
$quantity = $_Post["numofitem"];
echo $quantity;
$query = 'SELECT Customers.FirstName,Customers.LastName,Purchase.CustomerID,Purchase.ProductID,Products.Description FROM Purchase,Products,Customers WHERE Purchase.Quantity > '.$quantity.' AND Purchase.ProductID = Products.ProductID AND Customers.CustomerID = Purchase.CustomerID;';

$result = mysqli_query($connection,$query);
if (!$result) {
   die("databases query failed.");
}
<ol>
while ($row = mysqli_fetch_assoc($result)) {
  echo "<li>";
  echo $row["FirstName"]. " " .$row["LastName"]. " " .$row["Description"]. " ";
  echo "</li>";
}
</ol>
mysqli_free_result($result);
 ?>
