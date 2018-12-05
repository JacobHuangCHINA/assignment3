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
   $customerId= intval($_POST["Customers"]);
   $newphoneNum = (string)$_POST["newphone"];
   if ($customerId == 12) {
     // code...
     echo "string";
   }

  // get min purchase
   $query1 = "UPDATE Customers SET PHONENUM='$newphoneNum' WHERE CustomerID='$customerId'";
   echo $query1;
//$query2 = 'INSERT INTO Purchase VALUES ("'.$customerId.' "," '. $productID.' "," '.$quantity.'")';
   if (!mysqli_query($connection,$query1)) {
     die("Error: insert failed" . mysqli_error($connection));
   }
   echo "Your phone number was changed!";
   mysqli_close($connection);


?>
</body>
</html>
