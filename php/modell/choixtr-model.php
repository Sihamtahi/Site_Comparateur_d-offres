<?php 

 /**
 * cette calsse pour la connexion 
 */
class TraducteursCorr
{
     public function listeTr()
    {
        try {
               //ouvertur de la connexion vers la base de données projetbdd
                $conn = new PDO('mysql:host=localhost;dbname=projetbdd','root','');
                
       } 
       catch (Exception $e) 
       { 
                die('Erreur:'.$e->getMessage());
       }

        $query="SELECT * FROM demande where idDemande= '".$_SESSION["iddoc"]."'";
        echo $query;
        $connexionReq=$conn->prepare($query); 
        $connexionReq->execute();
        $resultat=$connexionReq->fetch();
        //var_dump($resultat);
         $query2 = "SELECT traducteur.id_tr,traducteur.nom,traducteur.prenom,traducteur.note,traducteur.email   FROM maitrise, traduction,traducteur where maitrise.idLangue = '".$resultat["idLangues"]."'   and traduction.idType = '".$resultat["idType"]."'  and maitrise.id_tr=traducteur.id_tr and traduction.id_tr= traducteur.id_tr and traducteur.id_tr IN (
                SELECT traducteur.id_tr   FROM maitrise, traduction,traducteur where maitrise.idLangue = '".$resultat["idLangued"]."'  and traduction.idType = '".$resultat["idType"]."' and maitrise.id_tr=traducteur.id_tr and traduction.id_tr= traducteur.id_tr) ";
                
           $recupReq=$conn->prepare($query2); 
           $recupReq->execute();
           $resultat2=$recupReq->fetchALL();
           return($resultat2);
    }      
 

}
    



