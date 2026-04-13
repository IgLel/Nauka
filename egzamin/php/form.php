<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <form action="form.php" method="POST">
 <label for="">Login</label><br>
 <input type="text" name="login" id=""><br>
 <label for="">Haslo</label><br>
 <input type="password" name="haslo" id=""><br>
 <input type="submit" value="zaloguj" name="" id="">
 <input type="reset" value="wyczysc" name="" id=""><br>
 </form>
 
 <?php

 if(isset($_POST['login'])&& isset($_POST['haslo']))
    {
        $login=$_POST['login'];
        $haslo=$_POST['haslo'];

        if($login!=""&&$haslo!="")
        {
         echo "login to: ".$login."<br>";
         echo "haslo to: ".$haslo;
        }
        else
        {
            echo "login lub haslo jest puste";
        }    
                
        
    }
    else //nie wyslano
    {
        echo "Nic nie zostało wpisane";
    }















 ?>
    
</body>
</html>