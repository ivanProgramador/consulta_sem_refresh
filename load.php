<?php

   require 'connection.php';

   $sql = $pdo->query('SELECT * FROM users');

  
   if($sql->rowCount() > 0){

     foreach( $sql->fetchAll() as $value){

        echo "<h3> ID: ".$value['id']."</h3>";
        echo "<h3> NOME: ".$value['nome']."</h3>";
        echo "<h3> E-MAIL: ".$value['email']."</h3>";

      }

        


     }
    
   

    





?>