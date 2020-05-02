<?php 

 /**
 * cette calsse pour la connexion 
 */
class MiseAjJour
{
    public function MiseClient()
    {
        try {
               //ouvertur de la connexion vers la base de données projetbdd
                $conn = new PDO('mysql:host=localhost;dbname=projetbdd','root','');
         } 
       catch (Exception $e) 
       { 
                die('Erreur:'.$e->getMessage());
       }
       $query="SELECT * FROM client WHERE mail= '".$_SESSION['mail']."'";
        $connexionReq=$conn->prepare($query);
        $connexionReq->execute(array($_SESSION['mail']));
        $resultat=$connexionReq->fetch();
         
       $query2 = " UPDATE client SET nom = '".$_POST['nom']."' , prenom = '".$_POST['prenom']."' ,mail='".$_POST['email']."',pwd ='".$_POST['mdp']."'  , wilaya='".$_POST['wilaya']."', numTel='".$_POST['num_tel']."',adresse='".$_POST['address']."', commune='".$_POST['commune']."', faxe='".$_POST['faxe']."',photo= '".$resultat['photo']."',isbloc =0 WHERE mail='".$_SESSION['mail']."'" ;
         
         $connexionReq2=$conn->prepare($query2);
         $connexionReq2->execute();
         header ('location:..\profilc-view.php');   

    }
     public function decClient()
    {
         $_SESSION = array();
         session_destroy(); 
         header("location: ../acceuil-view.php");  

    }
      
      
          
        
}

    



