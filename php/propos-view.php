
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
  <link rel="stylesheet" type="text/css" href="../css/style2.css">
</head>
<body>
   
  <!--Its better to live half a lifetime being who you truly are than to live  100 lifetimes pretending to be the person you aren't.-->


<div class="container-fluid top-container">
  <div class="row-a">
    <img src="../images/easy3.png" class="logo" style="height: 50px;width: 120px;">
       <a class="res-soc-link"  href="www.youtube.com" style="padding-left:900px;"><img src="../images/q5.png" ></a>  
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
       <li class="nav-item">
        <a class="nav-link" href="Recrutement-view.php">Recrutement</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="blog-view.php">Blog</a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="propos-view.php">à Propos  <span class="sr-only">(current)</span></a>
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

  <div class=" container-fluid row-d ">
    <div class="simple-clic text-center">
 
      
       <img class="img-fluid " alt="Responsive image" src="../images/chrono.PNG">
       
   </div>
  <br><br><br>
    <div class="simple-clic tr">
  
       <div class="row ">
       <div class="col-md-5">
            <img classe = "img-blog"  src="../images/hauteq.jpg">
       </div>
       <div class="col-md-7">
              <br><br>
              <h3>Traduction de Haute Qualité et Professionnelle </h3>
              <br><br>
              <p class="  texte-blog">Nous avons des traducteurs specialisés dans trois domaines de traduction: scientifique,générale et sites webs . Dès la réception, votre document sera soumis a un processus de reévaluation pour garantir qu'il soit remis au traducteur approprié, que vous allez vous-même choisir dans la liste des traducteurs les plus adéquats à votre devis.Les documents traduits sont corrigés attentivement pour éliminer toute faute de grammaire, d'orthogrphe ou de Syntax par l'équipe qualifiée de Protranslate.</p>   
       </div>
      </div>
   </div>
   <br><br><br>
    <div class="simple-clic tr">
  
       <div class="row ">
       <div class="col-md-5">
            <img classe = "img-blog"  src="../images/clic.jpg">
       </div>
       <div class="col-md-7 ">
         
               <br><br>
              <h3>Agence de Traduction par un Simple Clic</h3>
              <br><br>
              <p class="  texte-blog">Faites traduire vos documents sans mettre le pied dans une agence de traduction.

              Tout ce que vous devez faire est de télécharger votre document. De plus, si vous n'avez pas une copie digitale de votre document, envoyez nous uniquement une photo du texte. Votre traduction commence immédiatemet après réception.

               Si vous preferez que votre document soit envoyé à votre adresse physique, il vous sera expedié par un courrier express.​.</p>   
       </div>
      </div>
   </div>
      <br><br><br>
    <div class="simple-clic tr">
  
       <div class="row ">
       <div class="col-md-6">
            <img classe = "img-blog"  src="../images/livraison.jpg">
       </div>
       <div class="col-md-6 ">
         
               <br><br>
              <h3>Livraison rapide et ponctuelle.</h3>
              <br><br>
              <p class="texte-blog"> Votre temps est précieux et par conséquant la livraison de votre traduction dans le jour el l'heure précise est notre priorité.</p>   
       </div>
      </div>
   </div>

        <br><br>
  
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
 </div>
 </section>
 </div>   
</div> 

   
</body>
</html>