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
      <?php
       $produtID = $_POST["productnumber"];
       echo $produtID;
        $query = 'SELECT * FROM Products WHERE ProductID = 7;';
        echo $query;
        $result = mysqli_query($connection,$query);
        if (!$result) {
           die("databases query failed.");
        }

        $row = mysqli_fetch_assoc($result);
          $total = $row["Cost"] * $row["Quantity"];
          echo $total;
          echo $row["Quantity"];
          echo $row["Quantity"]. " " .$row["Description"]. " " ;
          echo $total;
          echo "<br>";

        mysqli_free_result($result);
        ?>
        <?php
           mysqli_close($connection);
        ?>

  </body>
</html>
