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
   $orderByDescription= $_POST["description"];
   echo $orderByDescription;
   if ($orderByDescription == "ASC") {
     // code...
        $query = 'SELECT * FROM Products ORDER BY Description ASC';
   }else{
        $query = 'SELECT * FROM Products ORDER BY Description DESC';
   }
   //$query = 'SELECT * FROM owner, pet WHERE pet.ownerid=owner.ownerid AND pet.ownerid="' . $whichOwner . '"';
   $result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo $row["ProductID"]. " " .$row["Description"]. " " .$row["Cost"]. " " .$row["Quantity"]. "<br>";
     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>
