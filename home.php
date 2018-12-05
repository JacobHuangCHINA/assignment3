
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
<h4>Q4: Insert a Customer</h4>
<form action="insertcustomer.php" method="post">
  First Name:
  <input type="text" name="firstname" ><br>
  Last Name:
  <input type="text" name="lastname" ><br>
  City:
  <input type="text" name="city" ><br>
  Phone Number(Format: ###-####):
  <input type="text" name="phonenumber" ><br>
  Select an Agent:<br>
  <?php include "getagent.php" ?>
  <input type="submit">
</form>
<hr>
<h4>Q5: Update phoneNumber: </h4>
<form action="updatephone.php" method="post">
  <?php include "getCustomers.php" ?>
  update new phone number:
  <input type="text" name="newphone">
  <input type="submit">
</form>
<hr>
<h4>Q6: Delete a Customer </h4>
<form action="deletecustomer.php" method="post">
  Choose a Customer ID number:
  <?php include "getCustomers.php" ?>
  <input type="submit">
</form>
<hr>
<h4>Q7: List Customers: </h4>
<form action="listcustomers.php" method="post">
  Quantity of product:
  <input name='quantity' type='number' min="0">
  <input type="submit">
</form>
<hr>
<h4>Q8: Never purchase item:</h4>
<form action="" method="post">

<?php include "listneverpurchase.php" ?>
</form>

<hr>
<h4>Q9: Show total Purchase: </h4>
<?php include "getproduct.php" ?>
</body>
</html>
