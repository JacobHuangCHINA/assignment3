
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>CS3319 Assignment3</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Q1:</h1>
Select a Customers:
<form action = "" method="post">
  <select name="pickaCutomer" id="pickaCutomer">
    <option value="1"> Select here</option>
<?php
include 'getCustomers.php';
?>
</select>
</form>
<?php
  if (isset($_POST['pickaCustomer'])) {
    include "connectdb.php";
    include "getdescription.php";
  }
 ?>

</body>
</html>
