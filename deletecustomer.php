<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
include 'connectdb.php';
?>
<?php
   $customerId= $_POST["CusID"];

  // get min purchase
   $query1 = "DELETE FROM Customers WHERE CustomerID='$customerId'";
//$query2 = 'INSERT INTO Purchase VALUES ("'.$customerId.' "," '. $productID.' "," '.$quantity.'")';
   if (!mysqli_query($connection,$query1)) {
     die("Error: insert failed" . mysqli_error($connection));
   }
   echo "Customer was deleted!";
   mysqli_close($connection);


?>
</body>
</html>
