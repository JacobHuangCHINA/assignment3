<?php
$customerId = $_POST["Customers"];
$productDescription= $_POST["description"];
$maxQuantity = 'SELECT MAX(Quantity) FROM Purchase WHERE CustomerID = '.$customerId.' AND ProductID = '.$productDescription.'';
echo $customerId;
echo $productDescription;
echo $maxQuantity;
$result = mysqli_query($connection,$query);
if (!$result) {
   die("databases query failed.");
}
echo ".$maxQuantity.";
echo "<input name='quantity' type='number' value='";
echo $row["Quantity"]."'>";
// while ($row = mysqli_fetch_assoc($result)) {
//    echo "<input name='quantity' type='number' value='";
//    echo $row["Quantity"]."'>";
// }
mysqli_free_result($result);

 ?>
