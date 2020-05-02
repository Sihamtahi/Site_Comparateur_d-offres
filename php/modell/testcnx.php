<?php 

 /**
 * cette calsse pour la connexion 
 */
class connexion{
	public function connect(){
		try {
 	$conn = new PDO('mysql:host=localhost;dbname=projetbdd','root','');
 	
       } catch (Exception $e) 
     { 
 	   die('Erreur:'.$e->getMessage());
     }
     $query="SELECT * FROM client WHERE mail= '".$_POST['email']."' AND pwd='".$_POST['password']."' ";
	  $connexionReq=$conn->prepare($query);
	   $connexionReq->execute(array($_POST['email'],$_POST['password']));

        $resultat=$connexionReq->fetch();
        
        if ($resultat['mail'] == $_POST['email'] && $resultat['pwd'] == $_POST['password']) 
        {
            if( ( $resultat['isbloc'] ==1) || ($resultat['isbloc'] ==2))
            {  
               echo "<script type='text/javascript'>alert('nous sommes désolés , Vous n etes pas autorisé à se connecter sur ce site  ');
                 window.location='../acceuil-view.php';
                  </script>";        
            }
            else
            {
              session_start();
              
              $_SESSION['mail'] = $_POST['email'];
              $_SESSION['mdp'] = $_POST['password'];
                header ('location:..\profilc-view.php');  
            }
         }
         else 
         {
              echo '<body onLoad="alert(\'Utilisateur ou mot de passe incorrect\')">';

  
         }
   

	}
  public function connectr(){
      try {
        
          $conn = new PDO('mysql:host=localhost;dbname=projetbdd','root','');
         } 

      catch (Exception $e) 
        { 
            die('Erreur:'.$e->getMessage());
         }
       $query="SELECT * FROM traducteur WHERE email= '".$_POST['email']."' AND mdp='".$_POST['password']."' ";
       echo $query;
       $connexionReq=$conn->prepare($query);
       $connexionReq->execute(array($_POST['email'],$_POST['password']));
       $resultat=$connexionReq->fetch();
      // var_dump($resultat);
        
        if ($resultat['email'] == $_POST['email'] && $resultat['mdp'] == $_POST['password']) 
        {
            if( ( $resultat['isbloc'] ==1) || ($resultat['isbloc'] ==2))
            {  
               echo "<script type='text/javascript'>alert('nous sommes désolés , Vous n etes pas autorisé à se connecter sur ce site  ');
                 window.location='../acceuil-view.php';
                  </script>";        
            }
            else
            {
              session_start();
              $_SESSION['mailtr'] = $_POST['email'];
              $_SESSION['mdptr'] = $_POST['password'];
             header ('location:..\profilt-view.php');  

            }
         }
         else 
         {
              echo '<body onLoad="alert(\'Utilisateur ou mot de passe incorrect\')">';

  
         }
   

  }
}
    



