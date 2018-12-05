
  <?php
    $query = "SELECT description FROM Products;";
    $result = mysqli_query($connection,$query);
    if (!$result) {
       die("databases query failed.");
    }

    while ($row = mysqli_fetch_assoc($result)) {
      echo "<input type='radio' name='productnumber' value='";
      echo $row["ProductID"]."'>";
      echo $row["ProductID"]. " " $row["Description"]. " " .$row["Cost"]. " " $row["Quantity"] ;
      echo "<br>";
    }
    mysqli_free_result($result);
    ?>
