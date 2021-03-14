<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Flash Upload : Upload plus vite que ton ombre !</title>

  <!-- Ne pas toucher les amis (css) -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Ne pas toucher les amis (css, style)-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Ne pas toucher les amis (css, style)-->
  <link href="css/landing-page.min.css" rel="stylesheet">

</head>

<body>

  <!--Menu -->
  <nav class="navbar navbar-light bg-light static-top">
    <div class="container">
      <a class="navbar-brand" href="#">Flash Upload</a>
      <a class="btn btn-primary" href="#">Contact</a>
      
    </div>
  </nav>

  <!-- Choix -->
  <header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5">Hébergez vos fichiers gratuitement et simplement en 1 clic.</h1>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form name="upload" enctype="multipart/form-data" method="post" action="upload.php">
            <input type="file" name="file">
            <br><br>
	
			
            Expiration du fichier :<br>
            <select name="folder">
              <option value="folder01/">Jamais</option>
              <option value="folder01/">Temporaire 24h</option>
			 
              <div class="col-12 col-md-3">
		
                <input type="submit"  name="bouton_submit" class="btn btn-block btn-lg btn-primary">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </header>

  <!-- Icon -->
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-screen-desktop m-auto text-primary"></i>
            </div>
            <h3>Rapide</h3>
            <p class="lead mb-0">Vos photos et images sont accessibles 24h/24, 7J/7, et ce, 365 jours par an. Nous ne limitons actuellement pas la durée de stockage de vos images. Vous disposez cependant d'un droit de retrait de vos images, photos. N'hésitez pas à utiliser la fonction "supprimer" en passant par votre historique d'images hébergées.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-layers m-auto text-primary"></i>
            </div>
            <h3>Simple</h3>
            <p class="lead mb-0">Hébergez vos images en toute tranquillité, facilité et simplicité grâce à Flash Upload votre hébergeur d'images en un clic ! Uploadez jusqu'à 5 images simultanément et partagez les ensuite avec vos amis via les liens qui vous sont fournis. Notre service d'hébergement d'images en ligne est 100% gratuit !</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-check m-auto text-primary"></i>
            </div>
            <h3>Sécurisé</h3>
            <p class="lead mb-0">Chez Flash Upload vos images sont accessibles avec la connexion sécurisée HTTPS (SSL). De plus, si vous uploadez une images, vous seul aurez connaissance du lien pour la visualiser. Vous pourrez donc partager vos images sereinement sans risques de voir vos photos personnelles visibles ou partagées de tous.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

 <!-- Footer -->
 <footer class="footer bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
        <ul class="list-inline mb-2">
          <li class="list-inline-item">
            <a href="#">Discord</a>
          </li>
          <li class="list-inline-item">&sdot;</li>
          <li class="list-inline-item">
            <a href="#">CGU</a>
          </li>
          <li class="list-inline-item">&sdot;</li>
          <li class="list-inline-item">
            <a href="#">Contact</a>
          </li>
          <li class="list-inline-item">&sdot;</li>
          <li class="list-inline-item">
            <a href="#">Politique de confidentialité</a>
          </li>
        </ul>
        <p class="text-muted small mb-4 mb-lg-0">&copy; Flash Upload 2020. Open-Source, coded by DremoDev</p>
      </div>
     
    </div>
  </div>
</footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
