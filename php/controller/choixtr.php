<?php 
 include_once('./modell/choixtr-model.php');
 session_start();
 /**
 * 
 */
 class ChoixTraducteurs
 {
 	
 	public function choix()
 	{
 		 $req = new TraducteursCorr();
         $resultat = $req->listeTr();
         return $resultat;
          
 	}
 	 
 }
 