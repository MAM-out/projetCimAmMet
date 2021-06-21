<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
  <link rel="icon" href="assets/img/favicon_amiens.png">
  <title>Gestion cartes d'accès cimetières</title>
  <meta name="description">
  <meta name="keywords">
  <meta name="author" content="MM">
  <!-- CSS dependencies -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body >

<!-- Active Directory -->

    <div class="container">
      <div class="row py-0">
        <div class="col-md-10"></div>
        <div class="col-md-2 bg-primary">
          <p class="text-center text-uppercase text-white pt-2"><b>NOM session</b></p>
        </div>
      </div>
    </div>

<!-- Entête interface cimetiere -->

    <div class="container">
      <div class="row py-2">
        <div class="col-md-1">
          <a href="index.php">
            <img class="img-fluid d-block" src="assets/img/Logo_Amiens.png"></a>
        </div>
        <div class="col-md-11">
          <h1 class="text-center text-dark"><b>GESTION&nbsp; |&nbsp; ACCES CIMETIERES</b></h1>
        </div>
      </div>
    </div>

<!-- Menu -->

    <div class="container">
      <div class="row py-2">
        <div class="col-md-12">
          <ul class="nav nav-tabs">
            <li class="nav-item"> 
              <a class="nav-link text-uppercase" href="fiche-usager.php" >
                <i class="fa fa-address-card"></i>&nbsp; Usagers</a> 
            </li>
            <li class="nav-item text-dark"> 
              <a class="nav-link text-uppercase" href="gestion-cimetieres.php"  >
                <i class="fa fa-university"></i>&nbsp; cimetieres</a> 
              </li>
            <li class="nav-item" id="fa fa-server"> 
              <a class="nav-link text-uppercase" href="gestion-utilisateurs.php" >
                <i class="fa fa-user-circle"></i>&nbsp; GESTIONNAIRES</a> 
              </li>
            <li class="nav-item" id="fa fa-server"> 
              <a class="nav-link text-uppercase" href="activites-fiches-utilisateurs.php">
                <i class="fa fa-server"></i>&nbsp; activites</a> 
              </li>
          </ul>
          <div class="tab-content mt-2">
            <div class="tab-pane fade show active" id="tabone" role="tabpanel">
              <p>Les accès sont limités selon vos droits de gestion, contactez le chef de service pour plus d'informations.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
