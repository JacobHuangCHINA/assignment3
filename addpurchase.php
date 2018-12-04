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
   // get product ID
   $query0 = 'SELECT ProductID FROM Products WHERE description = "'.$productDescription.'";';
   $result0=mysqli_query($connection,$query0);
    if (!$result0) {
         die("database query0 failed.");
     }
     $row=mysqli_fetch_assoc($result0);
     $productID = $row["ProductID"];
     mysqli_free_result($result0);

  // get min purchase
   $query1 = 'SELECT Quantity FROM Purchase WHERE CustomerID = ' . $customerId . ' AND ProductID = '.$productID.';';
   $result1=mysqli_query($connection,$query1);
    if (!$result1) {
         die("database query1 failed.");
     }
     $row=mysqli_fetch_assoc($result1);
     $Max = $row["Quantity"];
     mysqli_free_result($result1);

     if ($Max>0) {
       echo "<br>";
       echo "Update Purchase quantity column<br>";
       $quantity = $Max + $quantity;
       $query2 = 'UPDATE Purchase SET Quantity = '.$quantity.' WHERE CustomerID = '.$customerId.' AND '. $productID.' ';
        // 'INSERT INTO Purchase VALUES ("'.$customerId.' "," '. $productID.' "," '.$quantity.'")';
       if (!mysqli_query($connection,$query2)) {
         die("Error: insert failed" . mysqli_error($connection));
       }
       echo "Your Purchase item was added!";
     }else{
       $query2 = 'INSERT INTO Purchase VALUES ("'.$customerId.' "," '. $productID.' "," '.$quantity.'")';
       if (!mysqli_query($connection,$query2)) {
         die("Error: insert failed" . mysqli_error($connection));
       }
       echo "Your Purchase was added!";
     }
     mysqli_close($connection);
?>
</body>
</html>
