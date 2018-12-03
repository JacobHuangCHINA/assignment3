
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
<?php
include 'getCustomers.php';
?>
<input type="submit" value="submit">

</form>
<hr>

<hr>


<hr>
</body>
</html>
