<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$polaczenie=mysqli_connect("localhost" , "root" , "" , "wedkowanie");

$zapytanie3="SELECT ryby.nazwa, lowisko.akwen, lowisko.wojewodztwo FROM ryby JOIN lowisko ON ryby.id=lowisko.Ryby_id WHERE lowisko.rodzaj=3";

$wynik=mysqli_query($polaczenie,$zapytanie3);
$ile=mysqli_num_rows($wynik);

echo "<ol>";
$i=0;
while($i<$ile)
    {
        $tab=mysqli_fetch_array($wynik);
        echo "<li>".$tab[0]." plywa  w rzece ".$tab[1].",".$tab[2]."<br>";


        $i++;
    }

 echo "</ol>";
 echo "<br>";


 $zapytanie1="SELECT id,nazwa, wystepowanie FROM ryby WHERE styl_zycia=1;"
 $wynik=mysqli_query($polaczenie,$zapytanie1);
 $ile=mysqli_num_rows($wynik);



 echo "<table>";
 $i=0;
 echo "<tr><th>numer</th> <th>rodzajr</th> <th>wystepowanie</th></tr>"
 while($i<$ile)
    {
        $tab=mysqli_fetch_array($wynik);
        echo "<li>".$tab[0]." plywa  w rzece ".$tab[1].",".$tab[2]."<br>";


        $i++;
    }

 echo "</table>";











mysqli_close($polaczenie);
?>

    
</body>
</html>