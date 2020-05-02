<?php 

 /**
 * cette calsse pour la connexion 
 */
class Phase2
{
    public function phase2()
    {
        try {
               //ouvertur de la connexion vers la base de données projetbdd
                $conn = new PDO('mysql:host=localhost;dbname=projetbdd','root','');
         } 
       catch (Exception $e) 
       { 
                die('Erreur:'.$e->getMessage());
       }
       echo $_SESSION["iddoc"];
        $query="SELECT * FROM demande WHERE idDemande= '".$_SESSION['iddoc']."'";
        $connexionReq=$conn->prepare($query);
        $connexionReq->execute(array($_SESSION['iddoc']));
        $resultat=$connexionReq->fetch(); 
        $query2 =" UPDATE demande SET idDemande='".$_SESSION['iddoc']."',id_tr='".$_POST['id']."',idclient= '".$resultat['idclient']."' ,idType='".$resultat['idType']."',idLangued='".$resultat['idLangued']."',idLangues='".$resultat['idLangues']."',assur='".$resultat['assur']."',demand='".$resultat['demand']."',date=NULL,comment='".$resultat['comment']."',prix='".$resultat['prix']."',acceptr='".$resultat['acceptr']."',acceptc = '".$resultat['acceptc']."' where idDemande = '".$_SESSION["iddoc"]."'";
        echo $query2;
         $connexionReq2=$conn->prepare($query2);
         $connexionReq2->execute();
          
         echo "<script type='text/javascript'>alert(' votre demande a été bien effectué veuillez attendre la réponse du traducteur  ');
                 window.location='../acceuil-view.php';
          </script>";
              
    }
     
      
      
          
        
}

    



