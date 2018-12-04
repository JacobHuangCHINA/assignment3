<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
include 'connectdb.php';
?>
<ol>
<?php
   $customerId= $_POST["Customers"];
   $productDescription= $_POST["description"];
   $quantity= $_POST["quantity"];
   echo "asdf";
   echo $customerId;
   echo $productDescription;
   echo "----";
   echo $quantity;
   $query = 'SELECT description FROM Products, Purchase, Customers WHERE Products.ProductID=Purchase.ProductID AND Customers.customerID = Purchase.CustomerID AND Customers.CustomerID = "' . $whichOwner . '"';
   //$query = 'SELECT * FROM owner, pet WHERE pet.ownerid=owner.ownerid AND pet.ownerid="' . $whichOwner . '"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo $row["description"];
     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
