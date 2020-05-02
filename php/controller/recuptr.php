<?php 
 include_once('./modell/recuptr-model.php');
 /**
 * 
 */
 class RecuptrCon
 {
  
 	public function recuptrcon()
 	{
 		 $req = new recupTrmod();
         $resultat = $req->recuptrmod();
         return $resultat;
          
 	}
 	public function recuplanguecon()
 	{
 		 $req = new recupTrmod();
         $resultat = $req->recuplanguemod();
         return $resultat;
          
 	}
 	public function recuptypecon()
 	{
 		 $req = new recupTrmod();
         $resultat = $req->recuptypemod();
         return $resultat;
          
 	}
 	public function recupdemande()
 	{
 		 $req = new recupTrmod();
         $resultat = $req->recupdemande();
         return $resultat;
          
 	}
 }
 