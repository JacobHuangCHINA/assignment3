<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
include 'upload_file.php';
   include 'connectdb.php';
?>
<ol>
<?php
   $whichCustomer = $_POST["Customers"];
   $row=mysqli_fetch_assoc($result);

   $query = 'INSERT INTO Customers (cusimage) values("'.$pic.') WHERE CustomerID = '.$whichCustomer.';' ;
   echo $query;
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "Your image was added!";
   mysqli_close($connection);
?>
</ol>
</body>
</html>
