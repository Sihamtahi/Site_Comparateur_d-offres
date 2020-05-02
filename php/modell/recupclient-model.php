<?php 
class RecupClientMod
{
    public function recupclientmod ()
    {
        try {
               //ouvertur de la connexion vers la base de données projetbdd
                $conn = new PDO('mysql:host=localhost;dbname=projetbdd','root','');
                
       } 
       catch (Exception $e) 
       { 
                die('Erreur:'.$e->getMessage());
       }
       
       if (isset($_SESSION['mail']))
       {
        $query="SELECT * FROM client where mail='".$_SESSION['mail']."'";
        $connexionReq=$conn->prepare($query); 
        $connexionReq->execute();
        $resultat=$connexionReq->fetch();
         
        return $resultat;
       }
        else
        {
           //header("location: ../acceuil-view.php");
            
            
            echo "<script type='text/javascript'>alert('Ooops   , vous devez etre connecté pour voir le profil ');
           window.location='./acceuil-view.php';
           </script>";

        }
    }
    public function recuptrmod ()
    {
        try {
               //ouvertur de la connexion vers la base de données projetbdd
                $conn = new PDO('mysql:host=localhost;dbname=projetbdd','root','');
                
       } 
       catch (Exception $e) 
       { 
                die('Erreur:'.$e->getMessage());
       }
        echo $_SESSION['mailtr'] ;
       if (isset($_SESSION['mailtr']))
       {
        $query="SELECT * FROM traducteur where email='".$_SESSION['mailtr']."'";
        $connexionReq=$conn->prepare($query); 
        $connexionReq->execute();
        $resultat=$connexionReq->fetch();
        var_dump($resultat);
        return $resultat;
       
       }
        else
        {
           //header("location: ../acceuil-view.php");
            
            
          /*  echo "<script type='text/javascript'>alert('Ooops , vous devez etre connecté pour voir le profil ');
           window.location='./acceuil-view.php';
           </script>";*/

        }
    }
    public function recuplanguemod ()
    {
        try {
               //ouvertur de la connexion vers la base de données projetbdd
                $conn = new PDO('mysql:host=localhost;dbname=projetbdd','root','');
                
       } 
       catch (Exception $e) 
       { 
                die('Erreur:'.$e->getMessage());
       }
        
       if (isset($_SESSION['mailtr']))
       {
        $query="SELECT nomLangue FROM maitrise,langue WHERE maitrise.id_tr = '".$_SESSION['mailtr']."' and maitrise.idLangue = langue.idLangue ";
        $connexionReq=$conn->prepare($query); 
        $connexionReq->execute();
        $resultat=$connexionReq->fetch();
         var_dump($resultat);
       return $resultat;
        
       }
        else
        {
           //header("location: ../acceuil-view.php");
            
            
             

        }
    }
     
      public function recuptypemod ()
    {
        try {
               //ouvertur de la connexion vers la base de données projetbdd
                $conn = new PDO('mysql:host=localhost;dbname=projetbdd','root','');
                
       } 
       catch (Exception $e) 
       { 
                die('Erreur:'.$e->getMessage());
       }
        
       if (isset($_SESSION['mailtr']))
       {
        $query="SELECT nomType FROM traduction,typetr WHERE traduction.id_tr = '".$_SESSION['mailtr']."' and traduction.idType = typetr.idType ";
        $connexionReq=$conn->prepare($query); 
        $connexionReq->execute();
        $resultat=$connexionReq->fetch();
        var_dump($resultat);
        return $resultat;
       }
        else
        {
           //header("location: ../acceuil-view.php");
            
            
         

        }
    }
     
}
    



