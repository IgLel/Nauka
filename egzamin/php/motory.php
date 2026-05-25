<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

 $polaczenie=mysqli_connect("localhost", "root","", "motory");

 $zapytanie="SELECT wycieczki.nazwa, wycieczki.opis, wycieczki.poczatek, zdjecia.zrodlo FROM wycieczki JOIN zdjecia ON wycieczki.zdjecia_id";
 $wynik=mysqli_query($polaczenie,$zapytanie);
 $ile=mysqli_num_rows($wynik);
 $i=0;
 while($i<$ile)
 {

  $tab=mysqli_fetch_assoc($wynik);   
  echo "<dl>";
  echo "<dt>".$tab['nazwa']."rozpoczyna sie w". $tab["poczatek"]."<a href=".$tab['zrodlo']."> zobacz zdjecia </a>";
  echo "<dd>".$tab['opis']."</dd>";
  echo "</d1>";

 
 }



 $i++;


 mysqli_close($polaczenie);













 ?>
    
</body>
</html>