<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  echo "Zadanie 1";
  echo "<br>";
  echo "<table border='1'>";

  for($i= 1; $i <= 2; $i++)
    {
        
        echo "<tr>";
    

    for($j = 1; $j <= 10; $j++)
        {
            echo "<td>Wiersz $i, Kolumna $j</td>";
            
        }

        echo "</tr>";
    
    }
    echo "</table>";

  echo "<br>";
  echo "Zadanie 2";
  echo "<br>";


 for ($i = 1; $i <= 2; $i++) 

 {
    for ($j = 1; $j <= 10; $j++) 
     {
        echo "+";
     }

    echo "<br>";
 }
   
 echo "<br>";
 echo "Zadanie 3";
 echo "<br>";

 for ($i = 1; $i <= 100; $i += 2) {
    echo $i . " ";
 }

 echo "<br>";


 for ($i = 100; $i >= 1; $i -= 4) {
    echo $i . " ";
 } 
 

 echo "<br>";
 echo "Zadanie 4";
 echo "<br>";

 $n = 10;

 echo "Kwadraty liczb od 10 do 1: <br>";

 while ($n > 0) 
    {
    echo "n = $n, n^2 = " . ($n * $n) . "<br>";
    $n--;
    }

 echo "<br>Kwadraty liczb parzystych: <br>";

 $n = 10;

 while ($n > 0) 
 {
    if ($n % 2 == 0)
    {
        echo "n = $n, n^2 = " . ($n * $n) . "<br>";
    }
    $n--;
 }

 echo "<br>";
 echo "Zadanie 5";
 echo "<br>";










  ?>
</body>
</html>