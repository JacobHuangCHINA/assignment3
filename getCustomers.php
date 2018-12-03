
    <?php
    $query = "SELECT * FROM Customers ORDER BY LastName ASC;";
    $result = mysqli_query($connection,$query);
    if (!$result) {
       die("databases query failed.");
    }

    while ($row = mysqli_fetch_assoc($result)) {
      echo "<input type='radio' name='Customers' value='";
      echo $row["CustomerID"]."'>";
      echo $row["CustomerID"]. " " .$row["LastName"]. " " .$row["FirstName"]. " " .$row["City"]. " ".$row["PhoneNum"]. " " .$row["AgentID"]. " ";
      echo "<br>";
    }
    mysqli_free_result($result);
    ?>
