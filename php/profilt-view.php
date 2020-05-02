
 <?php
   
    include './controller/recuptr.php';
     session_start();
     $req = new  RecuptrCon();
     $traducteur = $req->recuptrcon();    
     $liste= $req->recuplanguecon();  
     $liste2=$req->recuptypecon();      
     $demandes = $req->recupdemande(); 
     
     
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
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $traducteur['nom'] ?> <?= $traducteur['prenom'] ?></span>
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

  <div class=" container-fluid  ">
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
              <div class="row my-2">
        <div class="">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="" data-target="#edit" data-toggle="tab" class="nav-link active">Profil</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#messages" data-toggle="tab" class="nav-link">Messages</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#profile" data-toggle="tab" class="nav-link">Historiques des traductions</a>
                </li>
            </ul>
            <div class="tab-content py-4">
                <div class="tab-pane " id="profile">
                    <h5 class="mb-3">User Profile</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>About</h6>
                            <p>
                                Web Designer, UI/UX Engineer
                            </p>
                            <h6>Hobbies</h6>
                            <p>
                                Indie music, skiing and hiking. I love the great outdoors.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <h6>Recent badges</h6>
                            <a href="#" class="badge badge-dark badge-pill">html5</a>
                            <a href="#" class="badge badge-dark badge-pill">react</a>
                            <a href="#" class="badge badge-dark badge-pill">codeply</a>
                            <a href="#" class="badge badge-dark badge-pill">angularjs</a>
                            <a href="#" class="badge badge-dark badge-pill">css3</a>
                            <a href="#" class="badge badge-dark badge-pill">jquery</a>
                            <a href="#" class="badge badge-dark badge-pill">bootstrap</a>
                            <a href="#" class="badge badge-dark badge-pill">responsive-design</a>
                            <hr>
                            <span class="badge badge-primary"><i class="fa fa-user"></i> 900 Followers</span>
                            <span class="badge badge-success"><i class="fa fa-cog"></i> 43 Forks</span>
                            <span class="badge badge-danger"><i class="fa fa-eye"></i> 245 Views</span>
                        </div>
                       
                    </div>
                    <!--/row-->
                </div>
                <div class="tab-pane " id="messages">
                     
          <table class="table table-sm" id ="mydataTable">
  <thead class="thead-dark">
    <tr>
         <th>NomClient</th> 
        <th>PrenomClient</th> 
        <th>Email</th> 
        <th>Message</th> 
        <th>Langue d'origine</th> 
        <th>Langue souhaité</th> 
        <th>Type</th> 
        <th>Prix proposé</th>
        <th>Refus</th>
        <th>Annuler</th>   
    </tr>
  </thead>
  <tbody>
     <?php foreach ($demandes as $demande): ?>
      <tr >
      <form action="./controller/phase3.php" method="POST">
        <td><input class="form-control btn" type="text"  name="id"     value="<?= $demande['nom'] ?>" ></td> 
        <td><input class="form-control btn" type="text"  name="nom"    value="<?= $demande['prenom'] ?>" ></td> 
        <td><input class="form-control btn"  type="text" name="prenom" value="<?= $demande['mail'] ?>"></td>
        <td><input class="form-control btn"  type="text" name="note"   value="<?= $demande['comment'] ?>"></td>
        <td><input class="form-control btn"  type="text" name="email"  value="<?= $demande['d'] ?>"> </td>
        <td><input class="form-control btn"  type="text" name="email"  value="<?= $demande['s'] ?>"> </td>
        <td><input class="form-control btn"  type="text" name="email"  value="<?= $demande['nomTYpe'] ?>"> </td>
        <td><input class="form-control btn"  type="text" name="prix" placeholder=" prix"> </td>
        <td><input type="submit" name="accepter" value="accepter" class="btn btn-link"></td>
        <td><input type="submit" name="refuser" value="refuser" class="btn btn-link"></td>
      </form>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
                </div>
                <div class="tab-pane active" id="edit">
                    <form role="form">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Nom</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" name= "nom" value="<?= $traducteur['nom'] ?>" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Prenom</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="<?= $traducteur['prenom'] ?>"  >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Email</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="email" value="<?= $traducteur['email'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">mot de passe</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="<?= $traducteur['mdp'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">confirmation du mot de passe </label>
                            <div class="col-lg-9">
                                <input class="form-control" type="url" value="<?= $traducteur['mdp'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Adresse</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="<?= $traducteur['addresse'] ?>" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-6">
                                <input class="form-control" type="text"  placeholder="" name="commune" value="<?= $traducteur['commune'] ?>">
                            </div>
                            <div class="col-lg-3">
                                <input class="form-control" type="text"  placeholder="Wilaya" name ="wilaya" value="<?= $traducteur['wilaya'] ?>">
                            </div>
                        </div>
                          <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Note</label>
                            <div class="col-lg-9">
                              <?= $traducteur['note'] ?> /20
                            </div>
                        </div>
                         <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">La liste des langues maitrisés </label>
                            <ul class="col-lg-9">
                                 <?php foreach ($liste as $li): ?>
      
                                     <li> <?=$li['nomLangue']?> </li>
      
                                  <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Le type de traduction </label>
                            <ul class="col-lg-9">
                               <?php foreach ($liste2 as $li2): ?>
      
                                     <li> <?=$li2['nomTYpe'] ?> </li>
      
                                  <?php endforeach; ?>
                            </ul>
                        </div>
                       
                         

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="reset" class="btn btn-secondary" value="Cancel">
                                <input type="button" class="btn btn-primary" value="Save Changes">
                            </div>
                        </div>
 
                   
                    </form>
                </div>

                 
            </div>
        </div>
    </div>
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