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
   $customerId= $_POST["customers"];
   $newphoneNum = $_POST["newphone"];
  // get min purchase
   $query1 = "UPDATE Customers SET PhoneNum = '.$newphoneNum.' WHERE CustomerID = '.$customerId.'";
//$query2 = 'INSERT INTO Purchase VALUES ("'.$customerId.' "," '. $productID.' "," '.$quantity.'")';
   if (!mysqli_query($connection,$query1)) {
     die("Error: insert failed" . mysqli_error($connection));
   }
   echo "Your phone number was changed!";
   mysqli_close($connection);


?>
</body>
</html>
