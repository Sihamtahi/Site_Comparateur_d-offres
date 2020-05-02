<?php 

 /**
 * cette calsse pour la recrutement du client ,  
 */
class Recrutement
{
    public function recru()
    {
        try {
               //ouvertur de la connexion vers la base de données projetbdd
                $conn = new PDO('mysql:host=localhost;dbname=projetbdd','root','');
                
    
       } 
       catch (Exception $e) 
       { 
                die('Erreur:'.$e->getMessage());
       }
       
        $query="SELECT * FROM traducteur WHERE email= '".$_POST['email']."'";
        $connexionReq=$conn->prepare($query);
         
        $connexionReq->execute(array($_POST['email']));
        
        $resultat=$connexionReq->fetch();
        
           
        if ($resultat['email'] == $_POST['email'] ) 
        {
           
          echo "<script type='text/javascript'>alert(' cet utilisateur existe deja , veuillez utiliser un autre compte  ');
                 window.location='../acceuil-view.php';
          </script>";
       
        }
        else
        { 
                  $insertion_req="INSERT INTO `traducteur` (`id_tr`, `nom`, `prenom`, `addresse`, `commune`, `wilaya`, `num_tel`, `num_faxe`, `note`, `email`, `mdp`, `assurmente`, `cv`, `f1`, `f2`, `f3`, `assurfile`,  `photo`, `isbloc`) VALUES (NULL, '".$_POST['nom']."', '".$_POST['prenom']."', '".$_POST['adresse']."', '".$_POST['commune']."', '".$_POST['wilaya']."', '".$_POST['num']."', '".$_POST['faxe']."', '0', '".$_POST['email']."', '".$_POST['mdp1']."', '0', NULL, NULL, NULL, NULL, NULL, NULL,0)";
                   $connexionReq=$conn->prepare($query);
                   $pdostat=$conn->prepare($insertion_req);   
                   $resultat_insert=$pdostat->execute();
                   //header ('location:..\profilt-view.php');
                   $recup_req= "SELECT * FROM traducteur where email ='".$_POST['email']."' ";
                   $pdostat2=$conn->prepare($recup_req);
                   $pdostat2->execute(array($_POST['email'])); 
                   $resultat=$pdostat2->fetch();
                   echo $resultat['id_tr']; 
                   //var_dump($resultat);

                   if (isset($_POST['tama']))
                   {
                      $q1 = "INSERT INTO maitrise (`id_tr`, `idLangue`) VALUES ('".$resultat['id_tr']."',1)" ;
                      $insertReq=$conn->prepare($q1);   
                      $resultat_insert=$insertReq->execute();
                   }
                   if (isset($_POST['ar']))
                   {
                      $q1 = "INSERT INTO maitrise (`id_tr`, `idLangue`) VALUES ('".$resultat['id_tr']."',2)" ;
                      $insertReq=$conn->prepare($q1);   
                      $resultat_insert=$insertReq->execute();
                   }
                   
                   if (isset($_POST['fr']))
                   {
                      $q1 = "INSERT INTO maitrise (`id_tr`, `idLangue`) VALUES ('".$resultat['id_tr']."',3)" ;
                      $insertReq=$conn->prepare($q1);   
                      $resultat_insert=$insertReq->execute();
                   }
                   if (isset($_POST['ang']))
                   {
                      $q1 = "INSERT INTO maitrise (`id_tr`, `idLangue`) VALUES ('".$resultat['id_tr']."',4)" ;
                      $insertReq=$conn->prepare($q1);   
                      $resultat_insert=$insertReq->execute();
                   }
                   if (isset($_POST['tr']))
                   {
                      $q1 = "INSERT INTO maitrise (`id_tr`, `idLangue`) VALUES ('".$resultat['id_tr']."',5)" ;
                      $insertReq=$conn->prepare($q1);   
                      $resultat_insert=$insertReq->execute();
                   }
                   if (isset($_POST['es']))
                   {
                      $q1 = "INSERT INTO maitrise (`id_tr`, `idLangue`) VALUES ('".$resultat['id_tr']."',6)" ;
                      $insertReq=$conn->prepare($q1);   
                      $resultat_insert=$insertReq->execute();
                   }
                   if (isset($_POST['ch']))
                   {
                      $q1 = "INSERT INTO maitrise (`id_tr`, `idLangue`) VALUES ('".$resultat['id_tr']."',7)" ;
                      $insertReq=$conn->prepare($q1);   
                      $resultat_insert=$insertReq->execute();
                   }
                   if (isset($_POST['al']))
                   {
                      $q1 = "INSERT INTO maitrise (`id_tr`, `idLangue`) VALUES ('".$resultat['id_tr']."',8)" ;
                      $insertReq=$conn->prepare($q1);   
                      $resultat_insert=$insertReq->execute();
                   }
                   if (isset($_POST['scient']))
                   {
                      $q1 = "INSERT INTO traduction(`idType`, `id_tr`) VALUES (1,'".$resultat['id_tr']."')" ;
                      $insertReq=$conn->prepare($q1);   
                      $resultat_insert=$insertReq->execute();
                   }
                   if (isset($_POST['site']))
                   {
                      $q1 = "INSERT INTO traduction(`idType`, `id_tr`) VALUES (2,'".$resultat['id_tr']."')" ;
                      $insertReq=$conn->prepare($q1);   
                      $resultat_insert=$insertReq->execute();
                   }
                   //INSERT INTO traduction(`idType`, `id_tr`) VALUES ([value-1],[value-2])
                   if (isset($_POST['generale']))
                   {
                      $q1 = "INSERT INTO traduction(`idType`, `id_tr`) VALUES (3,'".$resultat['id_tr']."')" ;
                      $insertReq=$conn->prepare($q1);   
                      $resultat_insert=$insertReq->execute();
                   }
                    //verifier les langues qu'il a cocher dans le firmulaire yes 
                    echo "<script type='text/javascript'>alert(' Bienvenu a notre site , votre inscription à été bien enregistré ');
                 window.location='../acceuil-view.php';
                  </script>";
             }
   

    }
}
    



