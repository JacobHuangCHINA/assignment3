<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Here are the products:</h1>
<ol>
<?php
   $orderByPrice= $_POST["price"];
   $orderByDescription= $_POST["description"];
   $query1 = 'SELECT * FROM Products ORDER BY Cost '.$orederByPrice.'';
   $query2 = 'SELECT * FROM Products ORDER BY Description '.$orederByDescription.'';
   //$query = 'SELECT * FROM owner, pet WHERE pet.ownerid=owner.ownerid AND pet.ownerid="' . $whichOwner . '"';
   $result1=mysqli_query($connection,$query1);
    if (!$result1) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo $row["ProductID"]. " " .$row["Description"]. " " .$row["Cost"]. " " .$row["Quantity"]. " ";
        echo "<br>";
     }
     mysqli_free_result($result1);

?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
