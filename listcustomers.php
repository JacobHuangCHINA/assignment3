<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ol>
      <?php
      $quantity = $_POST["quantity"];
      echo $quantity;
      echo "string";
      $query = "SELECT FirstName,LastName,Description FROM Purchase,Products,Customers WHERE Purchase.Quantity > '$quantity' AND Purchase.ProductID = Products.ProductID AND Customers.CustomerID = Purchase.CustomerID;";
      echo $query;
      $result = mysqli_query($connection,$query);
      if (!$result) {
         die("databases query failed.");
      }
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<li>";
        echo $row["FirstName"]. " " .$row["LastName"]. " " .$row["Description"]. " ";

      }
      mysqli_free_result($result);
       ?>
    </ol>
  </body>
</html>
