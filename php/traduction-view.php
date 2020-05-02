
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
      <li class="nav-item active ">
        <a class="nav-link" href="traduction-view.php">Traduction <span class="sr-only">(current)</span> </a>
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
        <a class="nav-link" href="propos-view.php">à Propos  </a>
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
    <br><br>
    <h1 class="text-center text-xs-center text-primary">#EasyTraduc Offre 3 types de traductions :</h1>
    <br>
   <div class="traduction-sci tr">
    
      <div class="row ">
       <div class="col-md-4">
        
             <img  classe = "img-traduction" src="../images/scientifique.jpg" style="width: 430px;">
       </div>
       <div class="col-md-8">
          
         <h3>Traduction scientifique:</h3>
            <p class="article-traduction">Le milieu scientifique compte de nombreux domaines de spécialisation : chimie, physique, écologie, environnement, mathématiques, ingénierie, biologie, nucléaire, astrophysique… Travail de recherches et de mises en application, l’accès au plus grand nombre de documents, fréquemment dans une autre langue que le français, l’anglais ou l’espagnol, demeure indispensable dans la tâche des scientifiques. <br>
            La traduction scientifique s’applique à différents documents, tels que les publications, les revues, les magazines, les comptes rendus, les rapports d’études, les projets de recherche, les brevets et les normes. Dans certains cas, elle nécessite alors un réel travail en termes de contenus, de format et parfois même de législation. Semi-traduction scientifique, semi-traduction juridique, la transcription d’actes exigeant une validation par des institutions officielles requièrent, par conséquent, une qualification complémentaire.
            </p>
       </div>
      </div>

   </div>
   <div class="traduction-web tr">
    
  
       <div class="row ">
       <div class="col-md-4">
            <img  classe = "img-traduction" src="../images/web3.jpg" style="width: 430px;">
       </div>
       <div class="col-md-8 article-traduction">
          
         <h3>Traduction des sites web:</h3>
             <p class="article-traduction">La traduction de votre site Internet vous donne accès à des milliers de nouveaux visiteurs et clients potentiels en ligne. Proposer vos produits ou services à un public international garantit une visibilité et un potentiel de croissance importants pour votre entreprise. De nombreuses études ont montré que les consommateurs sont plus enclins à faire des achats en ligne s'ils trouvent des informations dans leur langue maternelle. Pour un prix abordable, vous pouvez ainsi offrir une expérience de navigation optimale à vos visiteurs étrangers et remporter des parts de marché dans votre secteur d'activité. Nos traducteurs de langue maternelle adapteront le contenu de votre site Internet à la culture et au public cible, tout en conservant l'identité de votre marque dans son processus de développement sur de nouveaux marchés.<br>
              Notre service de traduction de sites Internet vous offre diverses possibilités pour lancer le processus de traduction, selon ce qui est le plus pratique pour vos équipes. Nous pouvons traduire directement dans le code source de votre site Internet (HTML, PHP, XML ou tout autre format), en respectant l'intégrité des balises grâce à l'utilisation de notre logiciel propriétaire de traduction assistée par ordinateur. 
             </p>
       </div>
      </div>
   
   </div>
   <div class=" traduction-gen tr ">
   
        <div class="row">
       <div class="col-md-4">
             <img classe = "img-traduction"  src="../images/generale.jpg" style="width: 430px;">
       </div>
       <div class="col-md-8">
      
         <h3>Traduction génerale:</h3>
            <p class="article-traduction">La notion de « traduction générale » recouvre autant de réalités qu’elle soulève de questions.À tel point que, pour mieux la cerner, les copilotes de ce dossier, Philippe Caignon et Éric Poirier, ont mené une enquête auprès des écoles et départements de traduction canadiens pour déterminer la place qu’occupe la traduction générale dans les cursus actuels. Il s’avère que, malgré les pressions du marché dans le sens de la spécialisation, la traduction générale conserve sa « légitimité théorique » en tant que discipline de base incontournable, en particulier dans le contexte de la mondialisation du savoir. Ce qui n’exclut pas, comme le montrent nos auteurs, qu’on en fasse une spécialité à part entière. Les lecteurs de Circuit seront nombreux à se reconnaître dans les portraits que brossent les collaborateurs à ce dossier. Fort heureusement,le facteur humain règne encore dans nos professions, et la traduction générale peut se concevoir à la fois comme une compétence transversale et comme une spécialité.Fidèles au rendez-vous trimestriel.nos chroniqueurs nous ouvrent des fenêtres sur le vaste univers de notre pratique. 
            </p>
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
 </div>
 </section>
 </div>   
</div> 

   
</body>
</html>