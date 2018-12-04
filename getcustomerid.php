
  <?php
    $query = "SELECT CustomerID FROM Customers;";
    $result = mysqli_query($connection,$query);
    if (!$result) {
       die("databases query failed.");
    }

    while ($row = mysqli_fetch_assoc($result)) {
      echo "<input type='radio' name='Customers' value='";
      echo $row["CustomerID"]."'>";
      echo $row["CustomerID"].;
      echo "<br>";
    }
    mysqli_free_result($result);
    ?>
