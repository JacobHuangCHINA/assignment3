
  <?php
    $query = "SELECT description FROM Products;";
    $result = mysqli_query($connection,$query);
    if (!$result) {
       die("databases query failed.");
    }

    while ($row = mysqli_fetch_assoc($result)) {
      echo "<input type='radio' name='description' value='";
      echo $row["description"]."'>";
      echo $row["description"];
      echo "<br>";
    }
    mysqli_free_result($result);
    ?>
