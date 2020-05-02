<?php 
 include_once('./modell/recupclient-model.php');
 /**
 * 
 */
 class RecupClientCon
 {
 	
 	public function recupclientcon()
 	{
 		 $req = new RecupClientMod();
         $resultat = $req->recupclientmod();
         return $resultat;
          
 	}
 	public function recuptrcon()
 	{
 		 $req = new RecupClienMod();
         $resultat = $req->recuptrmod();
         return $resultat;
          
 	}
 	public function recuplanguecon()
 	{
 		 $req = new RecupClientMod();
         $resultat = $req->recuplanguemod();
         return $resultat;
          
 	}
 	public function recuptypecon()
 	{
 		 $req = new RecupClientMod();
         $resultat = $req->recuptypemod();
         return $resultat;
          
 	}
 }
 