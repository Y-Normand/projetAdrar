<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Black+Ops+One&family=Chakra+Petch:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>W.E.A.R</title>
</head>
<body>
    <!-- Début du header -->
    <header class="navYoan">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="collapse navbar-collapse" id="navbarColor03">
            <ul class="navbar-nav me-auto centerYoan">
              <li class="nav-item ">
                <a class="nav-link borderYoan active" href="#">Nouveautés
                  <span class="visually-hidden">(current)</span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="#">Collection femme</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="#">Collection homme</a>
              </li>
            </ul>
          </div>
          <!--Image -->
          <div class="imgYoan">
            <img src="images/wear_superposer.png" alt="logo" class="logoW">
          </div>
          <!--Image -->
          <div class="collapse navbar-collapse" id="navbarColor03">
            <ul class="navbar-nav me-auto centerYoan">
              <li class="nav-item ">
                <a class="nav-link  borderYoan active" href="#">W.e.a.r
                  <span class="visually-hidden">(current)</span>
                </a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="#">Assistance</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="#">Connexion</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="<?=URL?>admin">Admin</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
  <!-- Fin du header -->
    <div><?= $content ?></div>
  <!-- Debut FOOTER ! -->
  <footer>
    <!-- Contact / Entreprise -->
    <div>
      <ul>
        <li>Qui sommes nous ?</li>
        <li>Contactez nous !</li>
        <li>Mention légales</li>
      </ul>
    </div>
    <div class="d-flex justify-content-center">
      <img class="logoW" src="images/w_superpose_for_the_legend.png" alt="Logo">
    </div>
    <div>
      <p>Logo réseaux sociaux !</p>
    </div>

  </footer>
<!-- Fin FOOTER ! -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>