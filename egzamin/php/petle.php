<?php

   for($i=0;$i<10;$i++)
    {
        echo "i= " .$i."<br>";
    }
   
    echo"<p>petla WHILE </p>";
    $j=11;
    while($j<10)
    {
        echo "j= ".$j. "<br>";
        $j++;
    }
    echo"<p>petla DO WHILE </p>";
    $k=11;
    do
    {
        echo "k= " .$k. "<br>";
        $k++;
    }
    while($k<10);

    $m=1;
    $suma=0;
    while($m<=100)
    {
       $suma+=$m;
       $m++;
    }    
    echo "suma= ".$suma;
   $k=1;




?>