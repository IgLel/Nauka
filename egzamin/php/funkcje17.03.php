<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

 $tab=array(1,2,3,4,5,6,7,8,9,10);
 $tab1=[1,24,45,68];

function WypiszTablice($tab)
{
    
    for($i=0;$i<count($tab);$i++)
    {
        echo $tab[$i]."<br>";
    }
}
function Wypisz()
{
    echo"dsdsadafgaf";
    echo"gfagasgasga";
    echo"hgssawww";
    echo "<br>";
}

WypiszTablice($tab);
WypiszTablice($tab1);
Wypisz();
Wypisz();

echo "<br>";

function Suma($a,$b)
{
    $wynik=0;
    $wynik=$a+$b;
    return $wynik;
}

echo "<br>";
echo "<h2>Dodawania</h2>";
$c=Suma(4,5);
echo "Wynik dodawania to: " .$c ."<br>";

function Roznica($a,$b)
{
    $wynik=0;
    $wynik=$a-$b;
    return $wynik;
}

echo "<br>";
echo "<h2>Odejmowanie</h2>";
$c=Roznica(1,8);
echo "Wynik odejmowania to: " .$c ."<br>";

function Iloczyn($a,$b)
{
    $wynik=0;
    $wynik=$a*$b;
    return $wynik;
}

echo "<br>";
echo "<h2>Mnożenie</h2>";
$c=Iloczyn(260,22);
echo "Wynik iloczynu to: " .$c ."<br>";

function Iloraz($a,$b)
{
    $wynik=0;
    $wynik=$a/$b;
    return $wynik;
}

echo "<br>";
echo "<h2>Dzielenie</h2>";
$c=Iloraz(1,8);
echo "Wynik Ilorazu to: " .$c ."<br>";


echo "<br>";
echo "<h2>Silnia</h2>";

function silnia($n) 
{
    if ($n < 2) 
    return 1; 
    return $n * silnia($n - 1); 
}
echo silnia(5); 














?>

    
</body>
</html>