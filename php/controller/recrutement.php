<?php 
 include_once('../modell/recrut-mod.php');

if(isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['email']) and isset($_POST['mdp1']) and isset($_POST['mdp2']) and isset($_POST['adresse']) and isset($_POST['commune']) and isset($_POST['wilaya']) and isset($_POST['faxe']) and isset($_POST['num']) )
{

  $req = new Recrutement();
  $req->recru();
}
else
 {
	 
    echo "something went wrong" ;
}
