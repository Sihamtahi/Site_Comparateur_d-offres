<?php 
class recupTrmod
{
    
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
         
       if (isset($_SESSION['mailtr']))
       {
        $query="SELECT * FROM traducteur where email='".$_SESSION['mailtr']."'";
        $connexionReq=$conn->prepare($query); 
        $connexionReq->execute();
        $resultat=$connexionReq->fetch();
       // var_dump($resultat);
        return $resultat;
       
       }
        else
        {
           //header("location: ../acceuil-view.php");
            
            
           echo "<script type='text/javascript'>alert('Ooops , vous devez etre connecté pour voir le profil ');
           window.location='./acceuil-view.php';
           </script>";

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
        $query="SELECT * FROM maitrise,langue,traducteur WHERE traducteur.email = '".$_SESSION['mailtr']."'   and maitrise.idLangue = langue.idLangue and traducteur.id_tr = maitrise.id_tr";
        
        $connexionReq=$conn->prepare($query); 
        $connexionReq->execute();
        $resultat=$connexionReq->fetchALL();
       return $resultat;
        
       }
        else
        {
           //header("location: ../acceuil-view.php");
            
            
             

        }
    }
     
      public function recuptypemod()
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
        $query="SELECT * FROM traduction,typetr,traducteur WHERE traducteur.email = '".$_SESSION['mailtr']."' and traduction.idType = typetr.idType and traducteur.id_tr = traduction.id_tr ";
        
        $connexionReq=$conn->prepare($query); 
        $connexionReq->execute();
        $resultat=$connexionReq->fetchALL();
        return $resultat;
       }
        else
        {
           //header("location: ../acceuil-view.php");
            
            
         

        }
    }
    public function recupdemande ()
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
        $query="SELECT * FROM traducteur where email='".$_SESSION['mailtr']."'";
        $connexionReq=$conn->prepare($query); 
        $connexionReq->execute();
        $resultat=$connexionReq->fetch();
       // var_dump($resultat  return $resultat;
        $query2="SELECT client.nom as nom, client.prenom as prenom,client.mail as mail,l1.nomLangue as d ,l2.nomLangue as s,demande.comment as comment,typetr.nomTYpe as nomTYpe FROM demande, client,typetr,langue as l1 , langue as l2 where id_tr='".$resultat['id_tr']."' and acceptr=0 and demande.idClient = client.idClient and typetr.idType = demande.idType and l1.idLangue = demande.idLangued and l2.idLangue = demande.idLangues" ;
        
        //c a d le traducteur n'as pas encore accepté ou refuse la demande
        $connexionReq2=$conn->prepare($query2); 
        $connexionReq2->execute();
        $resultatf=$connexionReq2->fetchALL();
     
        return $resultatf;
       

       }
       else{
         echo "<script type='text/javascript'>alert(' la sesison n est pas ouverte   ');
                 window.location='../acceuil-view.php';
          </script>";
         
      } 
       }
}
    



