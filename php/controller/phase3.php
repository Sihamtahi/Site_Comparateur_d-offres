 <?php 
 include_once('../modell/phase3-model.php');
 session_start();
if ( isset($_POST["accepter"]))
{  
	if($_POST["prix"])
 {
 	 $req = new Phase3();
     $req->accepter();
 }
 else
 {
 	 echo "<script type='text/javascript'>alert(' veuillez inserer le prix de votre demande');
                 window.location='../profilt-view.php';
          </script>";
 }
     
}
if ( isset($_POST["refuser"]))
{ 
	$req = new Phase3();
    $req->refuser();
}

      
      
     