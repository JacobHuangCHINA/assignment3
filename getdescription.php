<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
include 'connectdb.php';
?>
<ol>
    <?php
    $whichCus = $_POST["value"]; //get selected museum value from the form
    echo $whichCus;
    //$query = "SELECT description FROM Products WHERE ProductID IN (SELECT ProductID FROM Purchase WHERE CustomerID = (SELECT CustomerID FROM Customers WHERE LastName = ".$whichCus."));"; //fill in with correct query
    $query = "SELECT * FROM Products, Purchase, Customers WHERE Products.ProductID=Purchase.ProductID AND Customers.customerID = Purchase.CustomerID AND Customers.CustomerID = $whichCus";
    echo $query;
    $result = mysqli_query($connection, $query);
     if (!$result) {
     die("databases query on art pieces failed. ");
   }
     while ($row = mysqli_fetch_assoc($result)) {
       echo "<li>" .$row["description"]. "</li>";
     }
     mysqli_free_result($result);
     ?>
   </ol>
   <?php
   mysqli_close($connection);
   ?>
  </body>
</html>
