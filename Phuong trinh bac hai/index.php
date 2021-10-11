<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="number" name="input1" placeholder="Enter a">
    <input type="number" name="input2" placeholder="Enter b">
    <input type="number" name="input3" placeholder="Enter c">
    <input type="submit" value="Cal">
</form>
</body>
</html>
<?php
include_once "QuadraticEquation.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["input1"];
    $b = $_POST["input2"];
    $c = $_POST["input3"];
 $result = new QuadraticEquation($a,$b,$c);
 echo $result->disPlay();
}
?>
