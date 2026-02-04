<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instrukcje</title>
</head>
<body>

 <?php

 $a=5;
 $b=6;
 $c="napis"; 

    if($a==5)
    {
        echo "a jest rowne 5";
    }
    echo "<br>";

    if($a<5)
    {
        echo "a jest mniejsze od 5";
    }
    else 
    {
        echo "a jest wieksze od 5";
    }
    echo "<br>";

    if($b>4)
    {
        echo "b jest wieksze od 4 ";
    }
    echo "<br>";

    if($c=="napis")
    {
        echo $c;
    }
    else 
    {
        echo "zmienna c to nie napis";
    }
    echo "<br>";
    
    $a=1;
    $b=-6;
    $c=-8;
    $delta=$b*$b-4*$a*$c;

    if($delta>0)
    {
        echo "delta ma dwa rozwiazania";
    }

    else if($delta==0)
    {
        echo "delta ma jedno rozwiązanie";
    }    
  
 ?>








    
</body>
</html>