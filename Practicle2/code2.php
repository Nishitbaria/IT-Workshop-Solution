<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php tutorial </title>
</head>
<body>

<?php  
$a=1;  
$b=2;  
echo "Before swapping number <br> " ; 
 echo "a =  $a <br>" ; 
 echo "b =  $b  <br> " ; 
 
//using arithmetic operation  
$a=$a+$b;  
$b=$a-$b;  
$a=$a-$b; 
echo "Before swapping number <br> " ; 
echo "Value of a: $a</br>";  
echo "Value of b: $b</br>";  
?>  
</body>
</html>
