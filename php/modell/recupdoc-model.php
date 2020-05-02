<?php 

 /**
 * cette calsse pour la connexion 
 */
class RecupDoc{
	public function recupdoc(){
		try {
 	$conn = new PDO('mysql:host=localhost;dbname=projetbdd','root','');
 	
       } catch (Exception $e) 
     { 
 	   die('Erreur:'.$e->getMessage());
     }
     $query="SELECT * FROM article";
	  $connexionReq=$conn->prepare($query); 
	  $connexionReq->execute();
      $resultat=$connexionReq->fetchAll(); 
      return ($resultat);
     //header ('location:..\acceuil-view.php');   
       
     
   

	}
}
    



