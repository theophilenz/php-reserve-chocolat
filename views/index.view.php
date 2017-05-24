<!doctype html>
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
          <a href="index.php" class="navbar-brand">Allchocolate</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            <li>
              <a href="reserve.php">Accueil</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
<div class="container">
    <header>
    <h1>Guide de chocolats du monde entier</h1>
    <p>Découvre la plus grande référence de chocolats du monde entier, soumets des avis et des critiques</p>
    </header>
    <div class="row">
    <?php foreach ($listeChocolats as $singleChocolat): ?>
      <div class="col-sm-4">
        <div class="thumbnail">
          <div class="caption">
            <h3><?=$singleChocolat->getTitre();?></h3>
            <p><?=$singleChocolat->getDescription()?></p>
            
            <p><a href="#" class="btn btn-primary" role="button">En savoir plus</a></p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
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
