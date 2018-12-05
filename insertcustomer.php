<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Here is the info about added Customer</h1>
<?php
   $firstName= $_POST["firstname"];
   $lastName= $_POST["lastname"];
   $phoneNumber = $_POST["phonenumber"];
   $angentId = $_POST["Agent"];
   $city= $_POST["city"];

   $customerId = 32;
   $customerId++;
   $newangentId = (string)$angentId;
  // get min purchase
   $query1 = 'INSERT INTO Customers (CustomerID, FirstName, LastName, City, PhoneNum, AgentID) VALUES ("'.$customerId.' "," '.$firstName.' "," '. $lastName.' "," '.$city.' ","  '.$phoneNumber.' "," '.$newangentId.'")';
//$query2 = 'INSERT INTO Purchase VALUES ("'.$customerId.' "," '. $productID.' "," '.$quantity.'")';
   if (!mysqli_query($connection,$query1)) {
     die("Error: insert failed" . mysqli_error($connection));
   }
   echo "Your Purchase was added!";
   mysqli_close($connection);

?>
</body>
</html>
