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
      $quantity= $_POST["quantity"];
      $query = "SELECT FirstName,LastName,Description FROM Purchase,Products,Customers WHERE Purchase.Quantity > '$quantity' AND Purchase.ProductID = Products.ProductID AND Customers.CustomerID = Purchase.CustomerID;";
      $result=mysqli_query($connection,$query);
       if (!$result) {
            die("database query2 failed.");
        }
       while ($row=mysqli_fetch_assoc($result)) {
           echo '<li>';
           echo $row["FirstName"]. " " .$row["LastName"]. " " .$row["Description"];
        }
        mysqli_free_result($result);
       ?>
    </ol>
    <?php
       mysqli_close($connection);
    ?>
  </body>
</html>
