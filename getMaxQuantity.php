<?php
$customerId = $_POST["Customers"];
$productDescription= $_POST["description"];
$query = 'SELECT MAX(Quantity) FROM Purchase WHERE CustomerID = '.$customerId.' AND ProductID = '.$productDescription.'';
echo "----";
echo $customerId;
echo "----";
echo $productDescription;
$result = mysqli_query($connection,$query);
if (!$result) {
   die("databases query failed.");
}

while ($row = mysqli_fetch_assoc($result)) {
   echo "<input name='quantity' type='number' value='";
   echo $row["Quantity"]."'>";
}
mysqli_free_result($result);

 ?>
