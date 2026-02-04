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
   $e=2;
   $f="4";
   echo "a= ".$a. "b= ".$b. "c= ".$c. "d= ".$d. "<br>";
   echo "a= ".$a."<br>";
   echo "b= ".$b."<br>";
   echo "c= ".$c."<br>";
   echo "d= ".$d."<br>";
   echo "e= ".$e."<br>";
   echo "f= ".$f."<br>";
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
    $wynik=($e>=$f);
    echo "<p> porownanie e >= f to: ".$wynik."</p>";

    $g=true;
    $h=false;
    $i=true;
    $j=false;
    echo" <br>spojnik LUB(||) wynik:". ($g||$h);
    echo" <br>spojnik LUB(g&&h) wynik:". ($g&&$h);
    echo" 


   ?>






</body>
</html>