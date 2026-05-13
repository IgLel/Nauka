<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$polaczenie=mysqli_connect("localhost", "root","", "ksiegarnia");
if($polaczenie)
    {
        echo "polaczono z baza danych o nazwie ksiegarnia";
    }
 else
    {
        echo "NIE polaczono z baza danych o nazwie ksiegarnia";
    }
    mysqli_close($polaczenie);

 ?>
    
</body>
</html>