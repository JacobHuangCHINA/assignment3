
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dr. Western's Vet Clinic</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Welcome to the Western Vet Clinic</h1>
<h2>Pets we look after</h2>
<?php
include 'getdata.php';
?>
<ol>
<li>Dogs</li>
<li>Cats</li>
<li>Birds</li>
</ol>
</body>
</html>
