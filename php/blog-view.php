
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
       <li class="nav-item active">
        <a class="nav-link" href="blog-view.php">Blog <span class="sr-only">(current)</span></a>
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
     
  <br><br><br>
    <div class="simple-clic tr">
  
        
       <div  class="cotaier-berlin" >
            <img classe = "img-blog-berlin" style="width: 1200px;"   src="../images/berlin.PNG" >
       </div>
       <div >
              <br><br>
              <h3 class="text-center">Traduction du site Berliner Busse </h3>
              <br><br>
              <p class="texte-blog text-center">Berliner Busse est un autocariste qui propose des bus pour des circuits touristiques dans la ville de Berlin, comme pour des excursions vers Postdam, Leipzig, Dresde, Wittemberg ou d'autres destinations tout aussi intéressantes dans les environs de Berlin. Par ailleurs, vous pouvez également louer des bus pour des transferts à l'intérieur de la ville de Berlin ou des transferts en provenance et à destination des aéroports internationaux de Berlin-Schönefeld et Berlin-Tegel. L'équipe d'International Translators a pris en charge la traduction du site internet de Berliner Busse de l'allemand vers l'anglais, le français, l'italian et le polonais.</p>   <br><br>
       </div>
      </div>
   
   <br><br><br>
    <div class="simple-clic tr">
  
        
       <div class="cotaier-berlin" >
            <img classe = "img-blog-berlin" style="width: 1200px;"  src="../images/vienna.PNG">
       </div>
       <div >
              <br><br>
              <h3 class="text-center">Un site internet traduit: Vienna Guides </h3>
              <br><br>
              <p class="texte-blog text-center"> Vienna Guides est une agence de guides conférenciers proposant des visites guidées de la ville de Vienne pour les groupes comme pour les individuels. Sur leur site internet, les guides viennois vous offrent différentes possibilités de visites guidées à pied ou de circuits touristiques en bus à Vienne, entre autres des tours de ville intitulés "Vienne à première vue" ou des circuits touritiques à thème s'attardant dans différents endroits chargés d'histoire à Vienne. L'agence de guides Vienna Guides est en outre tout-à-fait prête à prendre en charge tous les préparatifs et l'organisation de votre voyage à Vienne, y compris la réservation de vos places de concert, de votre hôtel ou de vos dîners au restaurant. Les traducteurs d'International Translators se sont occupés de la traduction du site internet de Vienna Guides de l'allemand vers l'anglais, le français, l'italien, l'espagnol et le slovène.</p>   <br><br>
       </div>
      </div>
   
      <br><br><br>
     <div class="simple-clic tr">
  
        
       <div >
            <img id= "img-blog-etoile" style="padding-left: 550px; padding-top: 35px " src="../images/hugo.jpg">
       </div>
       <div >
              <br><br>
              <h3 class="text-center">Un livre traduit: Les misérables </h3>
              <br><br>
              <p class="texte-blog text-center">  Les Misérables est un roman de Victor Hugo paru en 1862. Il a donné lieu à de nombreuses adaptations, au cinéma et sur de nombreux autres supports.Notre équipe de traducteurs on pu traduire cette oeuvre en arabe pour ceux qui aiment la lecture en arabe</p>   <br><br>
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