<html>

<head>
    <meta charset="utf-8">
    <title>Ma petite réserve de chocolats</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/lumen/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="/./assets/css/lumen.custom.min.css">
</head>
<body>
<div class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a href="index.php" class="navbar-brand">Ma petite réserve de chocolats</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            <li>
              <a href="reserve.php">Ma réserve</a>
            </li>
            <li>
              <a href="inventaire.php">Gestion de mon inventaire</a>
            </li>
            <li>
              <a href="profil.php">Mon profil</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
<div class="container">
    <h1>Bienvenue à ta gestion de ta petite réserve de chocolats</h1>
    <div class="col-md-8">
    <p>Cette application te permet de gérer facilement ta reserve de chocolats et tes autres sucreries</p>
    <h3>Grâce à cette plateforme tu peux</h3>
    <ul>
        <li>Ajouter ou supprimer tes chocolats</li>
        <li>Gérer la date de peremption de tes chocolats</li>
        <li>Donner une note à tes chocolats selon la qualité</li>
        <li>Encore plus à venir!</li>
    </ul>
    <h4>Qu'attends-tu? Prend le controle de ton inventaire de chocolats dès maintenant!</h4>
</div>
<div class="col-md-4">
    <h3>Connexion</h3>
    <p>Pour l'instant ce projet n'est ouvert qu'en beta, donc aucune inscription n'est permise. Par contre, pour avoir un petit apercu, connecte-toi avec ces infos:</p>
    <p><strong>Utilisateur:</strong> demo <strong>Mot de passe:</strong> chocolove </p>
    <form action="" method="post">
        <div class="form-group">
            <label for="utilisateur">Nom d'utilisateur: </label>
            <input type="text" class="form-control" id="utilisateur" name="utilisateur" required>
        </div>
        <div class="form-group">
            <label for="motdepasse">Mot de passe: </label>
            <input type="password" class="form-control" name="motdepasse" required>
        </div>

        <input type="submit" class="btn btn-default" value="Se connecter" name="connexion">
    </form>
</div>
</div>

<footer>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <p>Petit projet inutile de Théophile Nzungize</p>
        </div>
    </div>  
</div>
</footer>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>