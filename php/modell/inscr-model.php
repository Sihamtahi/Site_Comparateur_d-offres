<?php 

 /**
 * cette calsse pour la connexion 
 */
class Inscription
{
    public function inscrire()
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
        

        if ($resultat['mail'] == $_POST['email'] ) 
        {
         
         
               echo "<script type='text/javascript'>alert('Utilisateur  existant, veuillez vous inscrire avec un autre compte  ');
                 window.location='../acceuil-view.php';
                  </script>"; 
       
        }
        else
        {
                 
                // la requette  Insert
                $insertion_req ="INSERT INTO `client` (`idClient`, `nom`, `prenom`, `mail`, `pwd`, `wilaya`, `numTel`, `adresse`, `commune`, `faxe`, `photo`) VALUES (NULL, '".$_POST['nom']."', '".$_POST['prenom']."', '".$_POST['email']."', '".$_POST['mdp1']."', '".$_POST['wilaya']."', '".$_POST['num']."', '".$_POST['adresse']."', '".$_POST['commune']."', '".$_POST['faxe']."', '')";
            
                 $pdostat=$conn->prepare($insertion_req);   
                 $resultat_insert=$pdostat->execute();
                 session_start();
                 $_SESSION['mail'] = $_POST['email'];
                 $_SESSION['mdp'] = $_POST['password'];
                 header ('location:..\profilc-view.php');
         }
   

    }
}
    



