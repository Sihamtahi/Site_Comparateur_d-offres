<?php 

 try {
 	
 	        $bdd = new PDO('mysql:host=localhost;dbname=projetbdd','root','');
    } 
 catch (Exception $e) 
 {
 	        die('Erreur:'.$e->getMessage());
 }
 
 $pdostat = $bdd->prepare('SELECT * FROM client');
 $ok = $pdostat->execute();
 $list = $pdostat->fetchAll();
 var_dump($list);