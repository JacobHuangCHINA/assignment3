
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

<?php
include 'getCustomers.php';
?>
<input type="submit" value="get a customer's purchase">
<?php
include 'getdescription.php';
?>
<!-- <?php
if (isset($_POST['Customer'])) {
  include 'connectdb.php';
  include 'getdescription.php';
}
?> -->
</form>
<hr>


<hr>
</body>
</html>
