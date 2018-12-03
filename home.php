
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
<form action="getCustomers.php" method="post">
<input type="submit">
<?php
if (isset($_POST['pickaCustomer'])) {
  include 'connectdb.php';
  include 'getCustomers.php';
  include 'getdescription.php';
}
?>
</form>
<hr>


<hr>
</body>
</html>
