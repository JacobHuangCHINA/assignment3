
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
  <input type="radio" name="pickaCustomer" id="pickaCustomer">
  
<?php
include 'getCustomers.php';
?>
<input type="submit" value="get a customer's purchase">
</select>
</form>
<hr>

<?php
if (isset($_POST['pickaCustomer'])) {
  include 'connectdb.php';
  include 'getdescription.php';
}
?>
<hr>
</body>
</html>
