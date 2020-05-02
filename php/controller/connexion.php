<?php 
 include_once('../modell/testcnx.php');


if(isset($_POST['email']) and isset($_POST['password']))
{
      
      // verifier que c'est un traducteur 
      if (isset($_POST['traducteur']))
      {      
              
               $req = new connexion();
                $req->connectr();
      }
      else
       {    
          echo "je ne suis pas  un traducteur";
      	   $req = new connexion();
           $req->connect();
           
      }
     
}

