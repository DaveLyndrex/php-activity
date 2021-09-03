<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Number 2</title>
</head>
<body>

<center>
<h2>
Write a PHP program to compute the sum of the two given integer values. If the two values are the same, then returns triple their sum.
</h2>
<h1>
<?php


function test($x, $y){
    return $x == $y ? ($x + $y)*3 : $x + $y;
}
?> <h3>The sum of the 2 diffirent value    (31 + 34) </h3>
 <?php
 echo test(31, 34)."\n";?><br><br>
 <h3>The same value (40 + 40)</h3>
 <?php echo test(40, 40)."\n"; ?>   
 

</h1>
</center>
    
</body>
</html>

