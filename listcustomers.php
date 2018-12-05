<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ol>
      <?php
      $quantity= $_POST["quantity"];
      $query = 'SELECT LastName FROM Customers' ;
      $result=mysqli_query($connection,$query);
       if (!$result) {
            die("database query2 failed.");
        }
       while ($row=mysqli_fetch_assoc($result)) {
           echo '<li>';
           echo $row["LastName"];
        }
        mysqli_free_result($result);
       ?>
    </ol>
  </body>
</html>
