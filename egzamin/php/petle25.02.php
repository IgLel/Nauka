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
  

















  ?>
</body>
</html>