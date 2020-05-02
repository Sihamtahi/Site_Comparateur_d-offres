<?php

    include './controller/choixtr.php';
    $req = new  ChoixTraducteurs();
    $traducteurs = $req->choix();
    
      
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>#EasyTraduc</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
 <div> <?= $_SESSION['iddoc'] ?>
 	<table class="table table-sm" id ="mydataTable">
  <thead class="thead-dark">
    <tr>
         <th>Numéro</th> 
        <th>Nom</th> 
        <th>Prenom</th> 
        <th>Note</th> 
        <th>Email</th> 
        <th>Action</th> 
    </tr>
  </thead>
  <tbody>
     <?php foreach ($traducteurs as $traducteur): ?>
      <tr >
      <form  action="./controller/phase2.php" method="POST">
      	<td><input class="form-control btn" type="text"  name="id"    value="<?= $traducteur['id_tr'] ?>" ></td> 
        <td><input class="form-control btn" type="text"  name="nom"    value="<?= $traducteur['nom'] ?>" ></td> 
        <td><input class="form-control btn"  type="text" name="prenom" value="<?= $traducteur['prenom'] ?>"></td>
        <td><input class="form-control btn"  type="text" name="note"   value="<?= $traducteur['note'] ?>"></td>
        <td><input class="form-control btn"  type="text" name="email"  value="<?= $traducteur['email'] ?>"> </td>
        <td><input type="submit" name="modifier" value="Contacter" class="btn btn-link"></td>
      </form>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</body>
</html>