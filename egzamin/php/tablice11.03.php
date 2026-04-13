<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
  
   $tab=array(1,2,3,4,5,6,7,8,9,10);
   $tab2=[1,24,45,68];
   $tab3=array("Ania","Marek","Piotr");
   $tab4=array("red" => "czerwony", "green" => "zelony", "pink" => "rozowy");

   echo $tab[3]."<br>";
   echo $tab2[2]."<br>";
   echo $tab3[1]."<br>";
   echo $tab4["pink"]."<br>";

   for($i=0;$i<count($tab);$i++)
    {
        echo "tab[".$i."]= ".$tab[$i]." ";
    }
    
 echo "<br>";

 foreach($tab4 as $element)
    {
        echo $element." ";
    }

    echo "<br>";
    echo "<br>";

    $i=0;
    while($i<count($tab3))
    {
        echo "tab3[".$i."]=".$tab3[$i]." ";
        $i++;
    }

    echo "<br>";
    echo "<br>";
    echo "<h2>Zadanie 1</h2>";
    echo "<br>";
    echo "<br>";

    $tablica= array(7, 3, 1, 6, 9, 5, 4, 10, 3, 2, 4, 3, 6, 12, 15, 4);
    for($i=0; $i<count($tablica); $i++)
    {
        echo "tab[".$i."]=".$tablica[$i]."<br>";
    }    
 
    echo "<br>";
    echo "<br>";

   $tablica= array(7, 3, 1, 6, 9, 5, 4, 10, 3, 2, 4, 3, 6, 12, 15, 4);

    foreach($tablica as $element)
    {
        echo $element."<br>";
    }

    echo "<br>";
    echo "<br>";
    echo "<h2>Zadanie 2</h2>";
    echo "<br>";
    echo "<br>";

    $tablica6 = array(6,8,2,3,4,12,20);
    $min = $tablica6[0];
    $max = $tablica6[0];

    for($i=0 ; $i<count($tablica6) ; $i++);
     {
    
      if($tablica[$i] < $min)
        {
            $min = $tablica[$i];
        }
        if($tablica[$i] > $max)
        {
           $max = $tablica[$i];
        }
     }

    echo "Minimalny element: " . $min . "<br>"; 
    echo "Maksymalny element: " . $max;
   
    echo "<br>";
    echo "<br>";
    echo "<h2>Zadanie 3</h2>";
    echo "<br>";
    echo "<br>";
  
 $suma=0;
 $srednia;

 for($i=0 ; $i<count($tablica) ; $i++)
 {
    $suma+=$tablica[$i];
 }

 $srednia=$suma/count($tablica);
 echo "Średnia wynosi= ".$srednia;

    















 ?>
</body>
</html>