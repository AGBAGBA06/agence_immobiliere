

<!doctype html>
<html class="no-js" lang="fr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Esgis Immo</title>
  <meta name="description" content="Bienvenue chez Esgis Immo, forts de nos 15 ans d'expérience nous nous assurons de trouver LE bien qui vous convient">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link rel="icon" type="image/ico" href="favicon.ico">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Prompt%7cOpen+Sans%7cReem+Kufi" rel="stylesheet">
  <script src="https://use.fontawesome.com/c6f237cddf.js"></script>
  <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
  <!--[if lt IE 8]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

  <!--

  ~~~~~~~~~Start of the top head content~~~~~~~~~~~~~

-->

<!-- Start of the header -->
<header id="#top">

  <!-- Back to top button -->
  <a href="#top" class="m-b-1"><i class="fa fa-arrow-up fa-lg hidden-sm-up pull-xs-right" aria-hidden="true"></i></a>
  <a href="#top" class="m-b-1 m-r-1"><i class="fa fa-arrow-up fa-2x hidden-sm-down pull-sm-right" aria-hidden="true"></i></a>

  <!-- Boxed layout inside the header -->
  <div class="container">
    <div class="row">
      <!-- Left logo -->
      <figure class="col-xs-5">
        <img src="img/logo_immo_large.jpg" alt="logo Esgis Immo" class="img-fluid hidden-md-down">
        <img src="img/logo_immo_large.jpg" alt="logo Esgis Immo" class="img-fluid hidden-xs-down hidden-lg-up">
        <img src="img/logo_immo_large.jpg" alt="logo Esgis Immo" class="img-fluid hidden-sm-up">
      </figure>
      <!-- Main title on the right -->
      <aside class="col-xs-7 text-xs-center">
        <h1>Des experts à votre service</h1>
      </aside>
    </div>
  </div>

</header>
<!-- end of the header -->

<!-- Start of the navigation -->
<nav>

<div class="pull-xs-right">
   <!-- Personnal space icon -->
   @if (Session::has('client'))
  <a href="{{ url('/logout') }}">
    <aside class="yes pull-xs-right"> <h3>logout</h3>
      <i class="fa fa-user fa-3x ml-1 hidden-xs-down" aria-hidden="false"></i>
      <i class="fa fa-user fa-2x ml-1 hidden-sm-up" id="small_user" aria-hidden="true"></i>
      </aside>
  </a>
      @else
      <a href="{{ url('/loogin') }}"><h3>login</h3>
    <aside class="non pull-xs-right m-r-2" id="personal_space">
      <i class="fa fa-user fa-3x m-r-1 hidden-xs-down" aria-hidden="true"></i>
      <i class="fa fa-user fa-2x m-r-1 hidden-sm-up" id="small_user" aria-hidden="true"></i>
      
    </aside>
  </a>
  @endif
</div>
  <!-- Navigation -->
  <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
    &#9776;
  </button>
  <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
    <ul class="nav navbar-nav">
      <li class="nav-item m-x-1 on">
        <a class="nav-link" href= "{{ url('/') }}" ><h3>Accueil</h3><span class="sr-only">(current)</span></a>
      </li>
       <!-- <div class="dropdown">
        <button href="" class="">Achat</button>
        <div class="dropdown-menu">
          <a href="" class="dropdown-item">villa</a>
          <a href="" class="dropdown-item">terrain</a>
          <a href="" class="dropdown-item">ffffffff</a>
          <a href="" class="dropdown-item">dddddddddfe</a>
        </div>
       </div> -->
      <li class="nav-item m-x-1">
        <a class="nav-link" href="{{ URL::to('/achat') }}"><h3>Achat</h3></a>
      </li>
      <li class="nav-item m-x-1">
        <a class="nav-link" href="{{ url::to('/location') }}"><h3>Location</h3></a>
      </li>
      <li class="nav-item m-x-1">
        <a class="nav-link" href="{{ url::to('/presentation') }}"><h3>Présentation</h3></a>
      </li>
      <li class="nav-item m-x-1">
        <a class="nav-link" href="{{ url::to('/agences') }}"><h3>Nos agences</h3></a>
      </li>
    </ul>
  </div>

</nav>
<!-- End of the navigation -->
