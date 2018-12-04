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
   $result0=mysqli_query($connection,$query);
    if (!$result0) {
         die("database query0 failed.");
     }
     $row=mysqli_fetch_assoc($result0);
     $productID = $row["ProductID"];
     echo $productID;
     mysqli_free_result($result0);

  // get min purchase
   $query1 = 'SELECT Quantity FROM Purchase WHERE CustomerID = ' . $customerId . ' AND ProductID = '.$productID.';';
   $result1=mysqli_query($connection,$query);
    if (!$result1) {
         die("database query1 failed.");
     }
     $row=mysqli_fetch_assoc($result1);
     $Max = $row["Quantity"];
     echo $row["Quantity"];
     mysqli_free_result($result1);

     if ($quantity<$Max) {
       echo "Please add more, the lowen bound is " .$Max. "<br>";
     }else{
       echo "Add item successed!";
       // $query2 = 'SELECT Quantity FROM Purchase WHERE CustomerID = "' . $customerId . '" AND ProductID = 66;';
       // $result2=mysqli_query($connection,$query);
       //  if (!$result2) {
       //       die("database query2 failed.");
       //   }
       //   $row=mysqli_fetch_assoc($result);
       //   $Max = $row["Quantity"];
       //   echo $row["Quantity"];
       //   mysqli_free_result($result);
     }
?>

<?php
   mysqli_close($connection);
?>
</body>
</html>
