<?php

if(isset($_POST['btnOK'])){
    // while(0 <= $_POST['numero']){
    
    //     echo $_POST['numero']."<br/>";
    //     $_POST['numero']--;

    // }


    //    do{
    //     echo $_POST['numero']."<br/>";
    //     $_POST['numero']--;
    // }while(0 <= $_POST['numero']);


    for ($i=0; $i <= $_POST['numero']; $i++) { 
        echo $i;
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="number" name="numero" id="numero">
        <input type="submit" name="btnOK" id="btnOK" value="Verificar">
    </form>
</body>

</html>