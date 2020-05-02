<?php

     include './controller/recupdoc.php';
     $req = new  RecupDocAcceuil();
     $docuemnts = $req->docacceuil();
      
  ?>
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
       <a class="res-soc-link"  href="www.youtube.com" style="padding-left:900px;" ><img src="../images/q5.png" ></a>  
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
      <li class="nav-item active">
        <a class="nav-link" href="acceuil-view.php"> Acceuil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="traduction-view.php">Traduction </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="traducteur-view.php">Traducteurs</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="Recrutement-view.php">Recrutement</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="blog-view.php">Blog</a>
      </li>
       <li class="nav-item ">
        <a class="nav-link" href="propos-view.php">à Propos </a>
      </li>
     
        <!-- Nav Item - User Information -->
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
    <div class="row sous-row-d">
      <article class="col-lg-6 a1">
       <div class=" articles-site ">
        <h2> Articles!</h2>
      <?php foreach ($docuemnts as $document): ?>
       <div class="article-site">
        <p class="texte-article"><?= $document['texte'] ?></p> 
        <p class="collapse texte-article1"><?= $document['textehide'] ?></p>  
        <button class="btn btn-link " data-toggle ="collapse" data-target=".texte-article1">lire la suite</button>      
        </div>
    <?php endforeach; ?>
       </div> 
          </article>
      <div class="col-lg-6  ">
        <div class="container-fluid a2">
          <h2> Devis de traduction</h2>
          <div>
            <form class="btn-cnx">
              <button  type ="button" class=" btn btn-primary btn-block" data-toggle="modal" data-target="#cnx">Se connecter</button>
              <button  type ="button" class="btn btn-link btn-block" data-toggle="modal" data-target ="#inscrire">S'inscrire</button> 
            </form>
               
            <form class="form-container" action="./controller/demande.php" method="POST"> 
                
              <div class="form-group">
                <label for="name">Nom et Prénom</label>
                <input type="text"   id="name" class="form-control" name= "nompr">
              </div> 
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email"   id="email" class="form-control" name="email">
              </div>   
              
              <div class="form-group">
                 
                <div class="input-group mb-3">
                 <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Langue d'origine</label>
                 </div>
                <select class="custom-select" id="inputGroupSelect01" name="langued">
                  <option selected>Choose...</option>
                   <option value="1">Tamazight</option>
                   <option value="2">Arab</option>
                   <option value="3">Fraçnais</option>
                   <option value="4">Anglais</option>
                   <option value="5">Turque</option>
                   <option value="6">Espagnol</option>
                   <option value="7">Chinois</option>
                   <option value="8">Allmend</option>
                </select>
               </div>
              </div>
               <div class="form-group">
                 
                <div class="input-group mb-3">
                 <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Langue souhaitée</label>
                 </div>
                <select class="custom-select" id="inputGroupSelect01" name="langues">
                   <option selected>Choose...</option>
                   <option value="1">Tamazight</option>
                   <option value="2">Arab</option>
                   <option value="3">Fraçnais</option>
                   <option value="4">Anglais</option>
                   <option value="5">Turque</option>
                   <option value="6">Espagnol</option>
                   <option value="7">Chinois</option>
                   <option value="8">Allmend</option>
                </select>
               </div>
              </div>
                <div class="form-group">
                 
                <div class="input-group mb-3">
                 <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Type de la traduction</label>
                 </div>
                <select class="custom-select" id="inputGroupSelect01" name="type">
                   <option selected>Choose...</option>
                   <option value="1">Scientifique</option>
                   <option value="2">Site Web</option>
                   <option value="3">Générale</option>
                </select>
               </div>
               </div>
                  <div class="form-group">
                 
                <div class="input-group mb-3">
                 <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Type de Demande</label>
                 </div>
                <select class="custom-select" id="inputGroupSelect01" name="typedev">
                   <option selected>Choose...</option>
                   <option value="1">Devis</option>
                   <option value="2">traduction</option>
                </select>
               </div>
               </div>
              
               
                <div class="form-check col">

                  <input type="checkbox" id="myCheck"  name ="assur" >
                  <label  class="font-weight-bold" class="form-check-label assermente" for="assermenté">traducteur assermenté</label>
                   
               </div>
              <div class="form-group">
                <label for="comment">Commentaires</label>
                <textarea class="form-control" id="comment" name="comment"></textarea> 
              </div> 
              <div class="form-group">
                   <label for="exampleFormControlFile1">Document à traduire</label>
                   <input type="file" class="form-control-file" id="exampleFormControlFile1">
              </div> 

             <!-- <div class="form-group">
              <div class="g-recaptcha" data-sitekey="6LfKURIUAAAAAO50vlwWZkyK_G2ywqE52NU7YO0S" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
            <input class="form-control d-none" data-recaptcha="true" required data-error="Please complete the Captcha">
                <div class="help-block with-errors"></div>
              </div>-->
              <input type="submit" name="submit" value="Valider" class="btn btn-primary btn-block">  
                
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
<div class="modal fade" id="cnx"  tabindex="-1" role="dialog"  aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-white text-center" id="exampleModalLabel">Connexion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <form action="./controller/connexion.php" method="POST">  
           
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email"   id="email" class="form-control" name="email" >
              </div>   
              <div class="form-group">
                <label for="password">Mot de passe </label>
                <input type="password"   id="password" class="form-control" name="password">
              </div>    
                  <div class="form-group form-inline">
                  <label class="form-check-label" for="tr">je suis un traducteur</label>
                   <input class="form-check-input" type="checkbox" value="6" id="tr" name="traducteur">
                </div>
               <button type="button" class="btn btn-link"  >mot de passe oublié</button>
               <button type="button" class="btn btn-link" data-toggle="modal" data-target ="#inscrire" >j'ai pas de compte</button>
              <input type="submit" name="submit" value="Se connecter" class="btn btn-primary">  
            </form>

      </div>
      
    </div>
    
  </div>
</div>
   
</body>
<div class="modal fade  col-sm" id="inscrire" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-white text-center" id="exampleModalLabel">Inscription</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  <form action="./controller/inscription.php" method="POST"> 
              <div class="form-group  ">
                <label for="name">Nom </label>
                <input type="text"   id="name" class="form-control" name="nom">
              </div> 
              <div class="form-group">
                <label for="name">Prénom </label>
                <input type="text"   id="name" class="form-control" name="prenom">
              </div> 
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email"   id="email" class="form-control" name="email">
              </div>   
              <div class="form-group">
                <label for="password">Mot de passe </label>
                <input type="password"   id="password" class="form-control" name="mdp1">
              </div>
              <div class="form-group">
                <label for="password">confirmation du mot de passe </label>
                <input type="password"   id="password2" class="form-control" name="mdp2">
              </div> 
              <div class="form-group">
                <label for="address">Adresse </label>
                <input type="address"   id="address" class="form-control" name="adresse">
              </div>  
              <div class="form-group">
                <label for="address">Commune </label>
                <input type="address"   id="commune" class="form-control" name="commune">
              </div>  
              <div class="form-group">
                <label for="address">Wilaya </label>
                <input type="address"   id="wilaya" class="form-control" name="wilaya" >
              </div>  
              <div class="form-group">
                <label for="address">numéro de télephone </label>
                <input type="address"   id="address" class="form-control" name="num">
              </div>   
              <div class="form-group">
                <label for="address">Faxe</label>
                <input type="address"   id="faxe" class="form-control" name="faxe">
              </div>   
               <button type="button" class="btn btn-secondary" data-dismiss="modal">fermer</button>
               <input type="submit" name="submit" value="S'inscrire" class="btn btn-primary">
            </form>
          </div>
            </div>
</div>
</div>
<script src='https://www.google.com/recaptcha/api.js'></script>
</html>