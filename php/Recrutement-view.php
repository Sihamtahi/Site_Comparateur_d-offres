
<!DOCTYPE html>
<html>
<head>
  <title>#EasyTraduc</title>
  <!-- css-->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
   
  <!--Its better to live half a lifetime being who you truly are than to live  100 lifetimes pretending to be the person you aren't.-->


<div class="container-fluid top-container">
  <div class="row-a">
     <img src="../images/easy3.png" class="logo" style="height: 50px;width: 120px;">
       <a class="res-soc-link"   href="www.youtube.com" style="padding-left:900px;"><img src="../images/q5.png" ></a>  
       <a class="res-soc-link1"  href="www.youtube.com"><img src="../images/q7.png"></a>
       <a class="res-soc-link1"  href="www.youtube.com"><img src="../images/q4.png"></a>
       <a class="res-soc-link1"  href="www.youtube.com"><img src="../images/q6.png"></a>
       <a class="res-soc-link1"  href="www.youtube.com"><img src="../images/q1.png"></a>  
  </div>
  <div class="">
    <br><br>
  </div>
  <div class="row-b">
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <a class="navbar-brand" href="#">#EasyTraduc</a>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="acceuil-view.php"> Acceuil</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="traduction-view.php">Traduction </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="traducteur-view.php">Traducteurs</a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="Recrutement-view.php">Recrutement <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="blog-view.php">Blog</a>
      </li>
       <li class="nav-item ">
        <a class="nav-link" href="propos-view.php">à Propos</a>
      </li>
     
            <li class="nav-item dropdown no-arrow" style="height: 50px">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="profilc-view.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  ProfileClient
                </a>
               <!-- <div class="dropdown-divider"></div>-->
                  <form action="./controller/miseclient.php" method="POST" data-toggle="modal" data-target="#logoutModal" class="dropdown-item">
                           <input class="btn btn-link" type="submit" name="deconnecter" value="DéconnecterClient">  
                  </form>
                   <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="profilt-view.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  ProfileTraducteur
                </a>
                
                  <form action="./controller/miseclient.php" method="POST" data-toggle="modal" data-target="#logoutModal" class="dropdown-item">
                           <input class="btn btn-link" type="submit" name="deconnectertr" value="DéconnecterTraducteur">  
                  </form>
              </div>
            </li>      
    </ul>
   
  </div>
</nav>
  </div>

  <div class=" container-fluid row-d">
     <h1 class="text-center text-primary" ></br> Bienvenu à #EasyTraduc</h1>
     <h3 class="text-center">Vous êtes un traduteur compétant? Vous Chercher un job?</h3>
     <h4 class="text-center" > Vite! remplissez ce formulaire pour obtenir votre place dans notre famille de traducteurs  </h4>
   <div class="form-recrutement-container" id="recruter">
      <div class=" ">
        <div class="" >
          <div class="row" style="padding-left: 430px;">
            <form class=" form-recrutement col-7 center tr"  action="./controller/recrutement.php" method="POST"> 
              <div class="form-group " >
                <label  class="font-weight-bold" for="name">Nom </label>
                <input type="text"   id="name" class="form-control" name="nom">
              </div> 
              <div class="form-group  ">
                <label  class="font-weight-bold" for="name">Prénom </label>
                <input type="text"   id="name" class="form-control" name ="prenom">
              </div> 
              <div class="form-group  ">
                <label  class="font-weight-bold" for="email">Email</label>
                <input type="email"   id="email" class="form-control" name="email">
              </div>   
              <div class="form-group ">
                <label  class="font-weight-bold" for="password">Mot de passe </label>
                <input type="password"   id="password" class="form-control" name="mdp1">
              </div>
              <div class="form-group  ">
                <label  class="font-weight-bold" for="password">confirmation du mot de passe </label>
                <input type="password"   id="password" class="form-control" name="mdp2">
              </div> 
              <div class="form-group ">
                <label  class="font-weight-bold" for="address">Adresse </label>
                <input type="address"   id="address" class="form-control" name="adresse" >
              </div>  
              <div class="form-group ">
                <label  class="font-weight-bold" for="address">Commune </label>
                <input type="address"   id="address" class="form-control" name="commune" >
              </div>  
              <div class="form-group ">
                 <label  class="font-weight-bold" for="address">Wilaya</label>
                 <input type="address"   id="address" class="form-control" name="wilaya" >
              </div>  
              <div class="form-group">

                <label  class="font-weight-bold" for="address">numéro de télephone</label>
                <input type="phonr "   id="phone" class="form-control" name="num" >
              </div> 
              <div class="form-group">
                <label for="address" class="font-weight-bold">Faxe</label>
                <input type="phonr "   id="phone" class="form-control" name="faxe" >
              </div>   
                 <div class="form-check">
                  <label  class="font-weight-bold">Langues maitrisée</label> <br>
                   <div class="form-group">
                  <input class="form-check-input" type="checkbox" value="1" id="tama" name="tama">
                  <label class="form-check-label" for="tama">Tamazighth</label>
                   </div>
                    <div class="form-group">
                  <input class="form-check-input" type="checkbox" value="2" id="ar" name="ar">
                  <label class="form-check-label" for="ar">Arabe</label>
                </div>
                  <div class="form-group ">
                  <input class="form-check-input" type="checkbox" value="3" id="fr" name ="fr">
                  <label class="form-check-label" for="fr">Français</label>
                </div>
                <div class="form-group">
                  <input class="form-check-input" type="checkbox" value="4" id="en" name ="ang">
                  <label class="form-check-label" for="en">Anglais</label>
                </div>
                <div class="form-group">
                  <input class="form-check-input" type="checkbox" value="5" id="tu" name="tr">
                  <label class="form-check-label" for="tu">Turque</label>
                </div>
                <div class="form-group">
                  <input class="form-check-input" type="checkbox" value="6" id="es" name="es">
                  <label class="form-check-label" for="es">Espagnol</label>
                </div>
                <div class="form-group">
                  <input class="form-check-input" type="checkbox" value="6" id="es" name="ch">
                  <label class="form-check-label" for="es">Chinois</label>
                </div>
                <div class="form-group">
                  <input class="form-check-input" type="checkbox" value="6" id="es" name="al">
                  <label class="form-check-label" for="es">Almmend</label>
                </div>
              </div>
                  <div class="form-check">
                  <label class="font-weight-bold">Types de traductions </label><br>
                   <div  class="form-group">
                  <input class="form-check-input" type="checkbox" value="1" id="tama" name="scient">
                  <label class="form-check-label" for="tama">Scientifique</label>
                   </div>
                    <div class="form-group">
                  <input class="form-check-input" type="checkbox" value="2" id="ar" name="site">
                  <label class="form-check-label" for="ar">Site Web</label>
                </div>
                  <div class="form-group ">
                  <input class="form-check-input" type="checkbox" value="3" id="fr" name ="generale">
                  <label class="form-check-label" for="fr">Genérale</label>
                </div>
              </div>
                 
               <div class="form-group">
                  <label  class="font-weight-bold" for="exampleFormControlFile2"> Inserez votre CV (en format pdf)</label>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1" accept="application/pdf" name="cv">
               </div>
               <div class="form-group">
                  <label  class="font-weight-bold" for="exampleFormControlFile2"> Inserez vos fichiers (maximum 3 fichiers)</label>
                    <input type="file" name="name" multiple id ="fileuploder-recrutement" name="fichiers">
               </div>
               <div>
                <div class="form-check col">

                 <input type="checkbox" id="myCheck"  onclick="myFunction()">
                  <label  class="font-weight-bold" class="form-check-label assermente" for="assermenté">traducteur assermenté</label>
                   
               </div>
                <div class="recrutement-assurmente">
                 <input type="file" name="name"   id ="fileuploder-recrutement" name="assur_fich">
                  <label for="exampleFormControlFile2"> Inserez un fichier prouvant votre assermentation.</label>
               </div>
   
     </div>
       <input type="submit" name="submit" value="S'inscrire" class="btn btn-primary btn-block">
                          
 </form>
</div>
</div>
</div>
</div>
</div>
<div class="row-e page-footer bg-dark">
  <section id="footer">
   <div class="container">
      <div class="row ">
        <div class="col-xs-12 col-sm-4 col-md-4 text-center text-xs-center text-sm-left text-md-left">
          <h5>EasyTraduc</h5>
          <ul class="list-unstyled quick-links">
            <li><a href="acceuil-view.php"><i class="fa fa-angle-double-right"></i>Acceuil</a></li>
            <li><a href="traduction-view.php"><i class="fa fa-angle-double-right"></i>Traduction</a></li>
            <li><a href="traducteur-view.php"><i class="fa fa-angle-double-right"></i>Traducteur</a></li>
            <li><a href="Recrutement-view.php"><i class="fa fa-angle-double-right"></i>Recrutement</a></li>
            <li><a href="blog-view.php"><i class="fa fa-angle-double-right"></i>Blog</a></li>
            <li><a href="propos-view.php"><i class="fa fa-angle-double-right"></i>à Propos </a></li>
          </ul>
        </div> 
        <div class="col  footer-text">
          <h1 class=" text-white text-center footer-big-text">#EasyTraduc</h1>
          <h6 class=" text-white footer-small-text">Traduire ? <br> Vous etes sur la bonne direction... </h6>
       </div>
   </div>
 </section>
</div>     
</div>
</body>
<script type="text/javascript">
     
    $('#fileuploder-recrutement').change(function(){
        if(this.files.length>3)
        {  
        alert('Too many files here, veuillez inserer moins de 3 fichiers') 
        }

});
       
// Prevent submission if limit is exceeded.
$('.valider-recrutement').submit(function(){
    if(this.files.length>3)
         alert("vous ne pouvez pas inserer plus de 3 fichiers , Veuillez refaire l'action")
       this.preventDefault();
});
// hide the recrutement assurmenté si le label n''est pas checked 
$(function(){
    $('.recrutement-assurmente').css("display", "none");
});
//verifier si le label est checked ou pas 
function myFunction() {
  var checkBox = document.getElementById("myCheck");
  if (checkBox.checked)
  {
    $('.recrutement-assurmente').css("display", "block");
 
  } else 
  {
    $('.recrutement-assurmente').css("display", "none");
  }
}
 function valider()
 {
    var rec = $('.valider-recrutement')
    if (rec.files.length>3)
    {
      alert('vous ne pouvez pas soumettre acr le nombre de fichier selectionnés >3')
    }
    // $('#fileuploder-recrutement').preventDefault();  
 }
 
  </script>

</html>
