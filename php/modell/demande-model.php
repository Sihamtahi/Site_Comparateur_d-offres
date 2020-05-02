<?php 

 
class demande
{
    public function demander()
    {
        try {
               //ouvertur de la connexion vers la base de données projetbdd
                $conn = new PDO('mysql:host=localhost;dbname=projetbdd','root','');
    
       } 
       catch (Exception $e) 
       { 
                die('Erreur:'.$e->getMessage());
       }
        $query="SELECT * FROM client WHERE mail= '".$_POST['email']."'";
        $connexionReq=$conn->prepare($query);
        $connexionReq->execute(array($_POST['email']));
        $resultat=$connexionReq->fetch();
        

        if (isset($_SESSION['mail']) ) 
        {
         
          // echo '<body onLoad="alert(\'Utilisateur  existant, veuillez vous inscrire avec un autre compte \')">';
                
          if ( isset($_POST["assur"]))
          {
              $insertion_req ="INSERT INTO `demande` (`idDemande`, `id_tr`, `idclient`, `idType`, `idLangued`, `idLangues`, `assur`, `demand`, `date`,`comment`) VALUES (NULL, NULL, '".$resultat["idClient"]."', '".$_POST['type']."', '".$_POST['langued']."', '".$_POST['langues']."', 1, '".$_POST['typedev']."', NULL,'".$_POST["comment"]."')";
          }
          else
          {
              $insertion_req ="INSERT INTO `demande` (`idDemande`, `id_tr`, `idclient`, `idType`, `idLangued`, `idLangues`, `assur`, `demand`, `date`,`comment`) VALUES (NULL, NULL, '".$resultat["idClient"]."', '".$_POST['type']."', '".$_POST['langued']."', '".$_POST['langues']."', 0, '".$_POST['typedev']."', NULL,'".$_POST["comment"]."')";
          }
      
               
         
                 echo $insertion_req;          
                 $pdostat=$conn->prepare($insertion_req);   
                 $resultat_insert=$pdostat->execute(array($_POST['email']));
                 $res2=$conn->query("SELECT LAST_INSERT_ID()");
                 $id = $res2->fetchColumn();
                 echo $id;
                 //session_start();
                 $_SESSION['iddoc'] = $id ;
                 echo "<br>";
                 echo $_SESSION['iddoc'];
                  
                 header ('location:..\traducteurs-corr.php');
                 /* echo "<script type='text/javascript'>alert('Votre demande à été bien effctué , veuillez choisir le traducteur qui va traiter votre cas s'il y en a !! ');
                 window.location='../traducteurs-corr.php';
                  </script>"; */ 
       
        }
        else
        {
                
                  echo "<script type='text/javascript'>alert('Vous devez etre connecté pour pouvoir effectuer cette opération ');
                 window.location='../acceuil-view.php';
                  </script>";    
         }
   

    }
}
    



