<?php 
 include_once('../modell/miseclient-model.php');
 
session_start();
if ( isset($_POST['mise']))
{
       if(isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['email']) and isset($_POST['mdp']) and isset($_POST['address']) and isset($_POST['commune']) and isset($_POST['wilaya']) and isset($_POST['faxe']) and isset($_POST['num_tel']) )
        {
             $req = new MiseAjJour();
             $req->MiseClient();
        }
        else 
         {
	           echo "Something went wrong";
          }
} 
if (isset($_POST['deconnecter']) || isset($_POST['deconnectertr']) )
{
	$req = new MiseAjJour();
    $req->decClient();

}