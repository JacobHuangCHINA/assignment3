<?php
$whichCus = $_POST["pickaCustomer"]; //get selected museum value from the form
$query = "select description from Products where ProductID in (select ProductID from Purchase where CustomerID = (select CustomerID from Customers where LastName = ".$whichCus."));"; //fill in with correct query
echo $query;
$result = mysqli_query($connection, $query);
 if (!$result) {
 die("databases query on art pieces failed. ");
 }
 echo "hell"
 echo "<ul>"; //put the artwork in an unordered bulleted list
 while ($row = mysqli_fetch_assoc($result)) {
   echo "Bought";
   echo "<li>" .$row["description"] "</li>";
 }
 echo "</ul>"; //end the bulleted list
 mysqli_free_result($result);
 ?>
