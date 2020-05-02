<?php 
 include_once('./modell/recupdoc-model.php');
 /**
 * 
 */
 class RecupDocAcceuil
 {
 	
 	public function docacceuil()
 	{
 		 $req = new RecupDoc();
         $resultat = $req->recupdoc();
         return($resultat);
          
 	}
 }