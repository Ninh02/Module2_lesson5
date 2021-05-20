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
    Color:<input type="text" name="color"><br>
    Side1:<input type="text" name="side1"><br>
    Side2:<input type="text" name="side2"><br>
    Side3:<input type="text" name="side3"><br>
    <button type="submit" value="button">Button</button>
</form>
<?php
include_once "Shape.php";
include_once "Triangle.php";
$shape=new Shape("blue");
echo $shape->show();
echo "<br>";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $color=$_POST["color"];
    $side1=$_POST["side1"];
    $side2=$_POST["side2"];
    $side3=$_POST["side3"];
    $triangle=new Triangle($color,$side1,$side2,$side3);
    $triangle->toString();
}
?>
</body>
</html>