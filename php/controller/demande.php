<?php 
 include_once('../modell/demande-model.php');
session_start();

//verifier que le client est connecté pour effectué la demande 
if(($_SESSION['mail']) and isset($_SESSION['mdp']))
{
       
     
     if (isset($_POST['nompr']) and isset($_POST['email']) and isset($_POST['langued']) and isset($_POST['langues']) and isset($_POST['type']) and isset($_POST['typedev'])  )
      {      
                $req = new demande();
                $req->demander();
      }      
      else
       {          	   
        
               echo "<script type='text/javascript'>alert('Veuillez  completez les champs de votre demande pour pouvoir continuer');
                 window.location='../acceuil-view.php';
                </script>";    
       }
    
}
else
{
    echo "<script type='text/javascript'>alert('Vous devez etre connecté pour effectuer cette demande ');
                 window.location='../acceuil-view.php';
          </script>"; 
            
}
