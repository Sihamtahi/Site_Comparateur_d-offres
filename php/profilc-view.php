
 <?php
   
     include './controller/recupclient.php';
     session_start();
     $req = new  RecupClientCon();
     $client = $req->recupclientcon();     
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
  <link rel="stylesheet" type="text/css" href="../css/style2.css">
</head>
<body>
   
  <!--Its better to live half a lifetime being who you truly are than to live  100 lifetimes pretending to be the person you aren't.-->


<div class="container-fluid top-container">
  <div class="row-a">
      
  </div>
  <div class="row-c">

     
  </div>
  <div style="">
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <div>
                <a href="acceuil-view.php">Retour</a>
            </div>
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
          
            <div class="topbar-divider d-none d-sm-block"></div>
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $client['nom'] ?> <?= $client['prenom'] ?></span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
             <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="profilc-view.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                  <form action="./controller/miseclient.php" method="POST" data-toggle="modal" data-target="#logoutModal" class="dropdown-item">
                           <input class="btn btn-link" type="submit" name="deconnecter" value="Déeconnecter">  
                  </form>
              </div>
            </li>
          </ul>
        </nav>
  </div>

  <div class=" container-fluid row-d ">
    <div class="container py-2 ">
    <div class="row my-2">
        <!-- edit form column -->
        <div class="col-lg-4">
            <h2 class="text-center font-weight-light">Profile Utilisateur</h2>
        </div>
        <div class="col-lg-8 ">
            <div class="alert alert-info alert-dismissable"> <a class="panel-close close" data-dismiss="alert">×</a> c'est une <strong>.alerte</strong>. votre profil est à jour  </div>
        </div>
        <div class="col-lg-8 order-lg-1 personal-info">
            <form role="form" action="./controller/miseclient.php" method="POST">
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Nom</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" name="nom"  value="<?= $client['nom'] ?>" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Prénom</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" name ="prenom"  value="<?= $client['prenom'] ?>" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Email</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="email" name="email"   value="<?= $client['mail'] ?>" />
                    </div>
                </div>
                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Mot de passe</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="password" name="mdp"  value="<?= $client['pwd'] ?>" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Confirmation du Mot de passe</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="password" name="mdp2"   value="<?= $client['pwd'] ?>" />
                    </div>
                </div>
                 
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Adresse</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text"  name="address"  value="<?= $client['adresse'] ?>" placeholder="rue" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label"></label>
                    <div class="col-lg-6">
                        <input class="form-control" type="text" name="commune"  value="<?= $client['commune'] ?>"  />
                    </div>
                    <div class="col-lg-3">
                        <input class="form-control" type="text"  value="<?= $client['wilaya'] ?>" name="wilaya"   />
                    </div>
                </div>
                 
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Téléphone</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text" value="<?= $client['numTel'] ?>" name="num_tel" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Faxe</label>
                    <div class="col-lg-9">
                        <input class="form-control" type="text"  name="faxe" value="<?= $client['faxe'] ?>" />
                    </div>
                </div>
               
                 
                <div class="form-group row">
                    <div class="col-lg-9 ml-auto text-right">
                        <input type="reset" class="btn btn-outline-secondary" value="Annuler" />
                        <input type="submit" name ="mise" class="btn btn-primary" value="Sauvegarder" />
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-4 order-lg-0 text-center">
            <img src="../images/trad9.jpg" class="mx-auto img-fluid rounded-circle" alt="avatar" />
            <h6 class="my-4">Changer la photo de profil</h6>
            <div class="input-group px-lg-4">
                <div class=" ">
                    <input type="file" class="custom-file-input" id="inputGroupFile02">
                    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choisir un fichier</label>
                </div>
                
            </div>
        </div>
    </div>
</div>
  
 </div>
<div class="row-e page-footer bg-dark">
 </div>   
</div> 

   
</body>
</html>