<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Here is the info about added Purchase</h1>
<?php
   $customerId= $_POST["Customers"];
   $productDescription= $_POST["description"];
   $quantity= $_POST["quantity"];
   echo "Customer ID:<br>";
   echo $customerId;
   echo "<br>";
   echo "Product description:<br>";
   echo $productDescription;
   echo "<br>";
   echo "Number of item: <br>";
   echo $quantity;
   echo "<br>";
   $query = 'SELECT Quantity FROM Purchase WHERE CustomerID = "' . $customerId . '" AND ProductID = 66;';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
     $row=mysqli_fetch_assoc($result);

     echo $row["Quantity"];
     mysqli_free_result($result);
?>

<?php
   mysqli_close($connection);
?>
</body>
</html>
