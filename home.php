
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
<h4>Q1:</h4>
Select a Customers:
<form action="getdescription.php" method="post">
<?php
include 'getCustomers.php';
?>
<input type="submit" value="submit">
</form>
<hr>
<h4>Q2:</h4>
List Products
<form action="getproductbyprice.php">
  Oreder by Price:<br>
  <input type="radio" name="price" value="ASC"> Ascending<br>
  <input type="radio" name="price" value="DESC"> Descending<br>
  <input type="submit" value="Submit">
</form>
<form action="getproductbydescription.php">
  Oreder by description:<br>
  <input type="radio" name="description" value="ASC"> Ascending<br>
  <input type="radio" name="description" value="DESC"> Descending<br>
  <input type="submit" value="Submit">
</form>
<hr>


<hr>
</body>
</html>
