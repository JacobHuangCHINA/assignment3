
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
<form action="getdescription.php" method="post">
  <select name="pickaCustomer" id="pickaCustomer">
    <option value="1"> Select here</option>
<?php
include 'getCustomers.php';
?>
<input type="submit" value="get a customer's purchase">
</select>
</form>
<hr>

<hr>
</body>
</html>
