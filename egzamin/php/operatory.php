<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operatory</title>
</head>
<body>
   <?php
   echo "<h1>Operatory</h1>";
   $a=5;
   $b="napis";
   $c=7;
   $d="7";
   echo "a= ".$a. "b= ".$b. "c= ".$c. "d= ".$d. "<br>";
   echo "a= ".$a."<br>";
   echo "b= ".$b."<br>";
   echo "c= ".$c."<br>";
   echo "d= ".$d."<br>";
   $wynik;
   
   $wynik=($a<$c);
   echo "porownanie a < c to: ".$wynik."<br>";
   $wynik=($a<=$c);
   echo "porownanie a <= c to: ".$wynik."<br>";
   $wynik=($a>$c);
    echo "porownanie a > c to: ".$wynik."<br>";
    $wynik=($a>=$c);
    echo "porownanie a >= c to: ".$wynik."<br>";
    $wynik=($a==$c);
    echo "porownanie a == c to: ".$wynik."<br>";
    $wynik=($a!=$c);
    echo "porownanie a != c to: ".$wynik."<br>";
    $wynik=($a===$c);
    echo "porownanie a === c to: ".$wynik."<br>";

   ?>






</body>
</html>