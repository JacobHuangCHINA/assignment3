<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Here is the info about added Purchase</h1>
<?php
   $firstName= $_POST["firstname"];
   $lastName= $_POST["lastname"];
   $phoneNumber = $_POST["phonenumber"];
   $angentId = $_POST["agent"];
   $city= $_POST["city"];

   // increase customer ID
   // get min purchase
    $query0 = 'SELECT MAX(CustomerID) FROM Customers;';
    $result0=mysqli_query($connection,$query0);
     if (!$result0) {
          die("database query1 failed.");
      }
    $row = mysqli_fetch_assoc($result0);
    echo $row["CustomerID"];;

    mysqli_free_result($result0);

  // // get min purchase
  //  $query1 = 'INSERT INTO Customers VALUES ("'.$customerId.' "," "'.$firstName.' "," '. $lastName.' "," '.$city.'" "," '.$angentId.'")';
  //  if (!mysqli_query($connection,$query1)) {
  //    die("Error: insert failed" . mysqli_error($connection));
  //  }
  //  echo "Your Purchase was added!";
  //  mysqli_close($connection);


?>
</body>
</html>
