<?php
    include("Connexion/Config.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Systeme D'autocompletion</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

    <!--Mon Css -->
    <link type="text/stylesheet" rel="stylesheet" href="Css/style.css">
</head>
<body>
  <nav class="">
    <div class="nav-wrapper">
      <form method="get" action="Traitements/traitement_1.php">
        <div class="input-field">
          <input id="recherche" type="search" name="valeur" placeholder="Vous Cherchez...?">
          <label class="label-icon" for="recherche"><i class="material-icons"></i></label>
          <i class="material-icons">Fermer</i>
        </div>
      </form>
    </div>
    <div id="all">

    </div>
  </nav>

<!--JavaScript-->
<script type="text/javascript" src="Js/script.js"></script>
</body>
</html>