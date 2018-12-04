
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
<h4>Q1: Select a Customers</h4>
<form action="getdescription.php" method="post">
<?php
include 'getCustomers.php';
?>
<input type="submit" value="submit">
</form>
<hr>
<h4>Q2: List Products </h4>
<form action="getproductbyprice.php" method="post">
  Oreder by Price:<br>
  <input type="radio" name="price" value="ASC"> Ascending<br>
  <input type="radio" name="price" value="DESC"> Descending<br>
  <input type="submit" value="Submit">
</form>
<form action="getproductbydescription.php" method="post">
  Oreder by description:<br>
  <input type="radio" name="description" value="ASC"> Ascending<br>
  <input type="radio" name="description" value="DESC"> Descending<br>
  <input type="submit" value="Submit">
</form>
<hr>
<h4>Q3: Add new Purchase</h4>
<form action="addpurchase.php" method="post">
  <p>Choose a Customer:</p>
  <?php
    include "getcustomerid.php";
  ?>
  <p>Choose a product:</p>
  <?php
    include "getproduct.php"
  ?>
  Enter the number of item you want to add:<input name='quantity' type='number' min="0">
  <input type="submit" value="Submit">
</form>

<hr>
</body>
</html>
