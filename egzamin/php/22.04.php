<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
 $serwer="localhost";
 $uzytkownik="root";
 $haslo="";
 $nazwa_bazy_danych="baza"; 
 $polaczenie="";


 $polaczenie=mysqli_connect("localhost", "root","","baza");
    if($polaczenie)
    {
        echo "polaczono z baza danych o nazwie baza";
    }
    else
    {
      echo "NIE polaczono  z baza danych o nazwia baza";
    }
    mysqli_close($polaczenie);

?>





    
</body>
</html>