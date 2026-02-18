<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
 $liczba=4;
 $a=5;
 $b=6;
 $wiek=20;

 echo "Zadanie 1:";
 echo "<br>";

 if($liczba % 2 == 0)
 {
    echo "$liczba jest liczba parzysta" ;
 }
  
 else
 {
  echo "$liczba jest liczba nieparzysta";
 }

  echo "<br>";
  echo "<br>";
  echo "Zadanie 2:";
  echo "<br>";
 
  if($a % $b == 0)
 {
  echo " liczba $a jest podzielna przez liczba $b i wynosi: " +wynik;
 }
 
 else
 {
   echo "liczba $a nie jest podzielna przez $b";
 }

 echo "<br>";
 echo "<br>";
 echo "Zadanie 3:";
 echo "<br>";

 if($liczba >= 1 && $liczba <=10)
 {
    echo "Liczba $liczba jest w przedziale <1,10>";
 }
 
 else if($liczba >= 17 && $liczba <=21)
 {
    echo "Liczba $liczba jest w przedziale <17,21>";
 }

 echo "<br>";
 echo "<br>";
 echo "Zadanie 4:";
 echo "<br>";
 
  if($liczba > 0)
 {
   echo "Liczba jest wieksza od 0";
 }
 
 else if($liczba < 0)
 {
   echo "liczba jest mniejsza od 0";
 }

 else if($liczba == 0)
 {
   echo "liczba jest rowna 0";
 }

 echo "<br>";
 echo "<br>";
 echo "Zadanie 5:";
 echo "<br>";
 
 if($wiek < 11)
 {
   echo "Dziecko";
 }
 
 else if($wiek >= 11 && $wiek <=17)
 {
    echo "Nastolatek";
 }

 else if($wiek >= 18)
 {
   echo "Dorosly";
 }

 echo "<br>";
 echo "<br>";
 echo "Zadanie 6:";
 echo "<br>";
 
 $haslo="haslo";
 if (strlen($haslo) < 5)
  {
    echo "bardzo slabe"
  }
   
   if else (strlen($haslo) >= 5 && strlen($haslo) < 8)
  {
    echo "slabe"
  }

  if else(strlen($haslo) >= 9 && strlen($haslo) < 11)
  {
    echo "silne"
  }

  
  if else(strlen($haslo) > 11)
  {
    echo " bardzo silne"
  }
 












 ?>
 






</body>
</html>