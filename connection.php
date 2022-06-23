
<?php

try{
 
    $pdo = new PDO('mysql:host=localhost;dbname=dados','root','');


    }catch(PDOEXception $e){

    echo "Erro :".$e->getMessege();


}

?>
