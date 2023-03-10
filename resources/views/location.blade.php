@include('includes.header')


<!-- Start of the jumbotron with main image -->
<div class="jumbotron p-t-1 text-xs-center">
  <span class="pull-xs-right appeal">Vous aussi trouvez votre place !</span>
</div>
<!-- End of the jumbotron with main image -->

<!--

~~~~~~~~~End of the top head content~~~~~~~~~~~~~

-->

<!--

~~~~~~~~~Start of the main content~~~~~~~~~~~~~

-->

<!-- Start of section with boxed content -->
<section class="container">

  <h2>Louer l'esprit serein</h2>
  <p>Selon votre situation, la location est peut-être la formule la plus adaptée à vos besoins. Louer c'est profiter d'un bien en assumant
  une part moindre de son entretient et des contriantes administratives qui y sont liées. Encore faut-il être sûr que le suivi soit assuré.
  En passant par notre agence, vous vous assurez un suivi de qualité, nos professionnels se chargeront des relations avec le propriétaire
dans l'intérêt de tous. N'attendez plus et découvrez nos biens à la location !</p>

<!-- Top green bar with search form -->
  <div class="container-fluid top_search p-x-1 p-y-1 m-b-3">

    <form>
      <div class="form-group m-x-1">
        <select class="form-control">
          <option>-Bien recherché-</option>
          <option>Maison</option>
          <option>Appartement</option>
          <option>Studio</option>
          <option>Loft</option>
        </select>
      </div>
      <div class="form-group m-x-1">
        <select class="form-control">
          <option>-Surface-</option>
          <option>- de 50m2</option>
          <option> 50 - 70 m2</option>
          <option> 70 - 100 m2</option>
          <option> 100 - 150 m2</option>
          <option> 150 - 200 m2</option>
          <option> + de 200 m2</option>
        </select>
      </div>
      <div class="form-group m-x-1">
        <input class="form-control" type="text" placeholder="Ville(s)">
      </div>
      <div class="form-group m-x-1">
        <select class="form-control">
          <option>-Budget mensuel-</option>
          <option>- 400</option>
          <option>400 à 500</option>
          <option>500 à 700</option>
          <option>700 à 1000</option>
          <option>1000 à 1500</option>
          <option>+ 1500</option>
        </select>
      </div>
      <div class="form-group m-x-1">
        <select class="form-control">
          <option>-Extérieur-</option>
          <option>Jardin</option>
          <option>Balcon</option>
          <option>Indifférent</option>
        </select>
      </div>
    </form>
    <button type="submit" class="btn" id="find_button">Envoyer</button>

  </div>

<!-- Cards search results -->
  <div class="row">

    <div class="col-xs-12 col-sm-6 col-md-4">
      <article class="card">
        <div class="card-block text-xs-center head">
          <h4 class="card-title">T4 arboré</h4>
          <h6 class="card-subtitle">Croix, 700/mois</h6>
        </div>
        <figure>
          <img src="img/apartement_small.jpg" class="img-fluid hidden-sm-up" alt="appartement à vendre">
          <img src="img/apartement_medium.jpg" class="img-fluid hidden-xs-down hidden-lg-up" alt="appartement à vendre">
          <img src="img/apartement_large.jpg" class="img-fluid hidden-md-down" alt="appartement à vendre">
        </figure>
        <div class="card-block text-xs-center">
          <p class="card-text">Bel appartement de charme avec une vue exceptionnel sur l'hippodrome, proche commodités et transports.</p>
          <figure class="description">
            <span><i class="fa fa-bed" aria-hidden="true"></i>  2 chambres</span>
            <span><i class="fa fa-paper-plane" aria-hidden="true"></i>  Balcon</span>
            <span><i class="fa fa-tint" aria-hidden="true"></i>   2 SDB</span>
          </figure>
          <a href="#" class="card-link"><i class="fa fa-eye m-r-1" aria-hidden="true"></i>Voir</a>
        </div>
      </article>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-4">
      <article class="card">
        <div class="card-block text-xs-center head">
          <h4 class="card-title">Belle maison</h4>
          <h6 class="card-subtitle">Comines, 1100/mois</h6>
        </div>
        <figure>
          <img src="img/house_small.jpg" alt="maison bleu à vendre" class="img-fluid hidden-sm-up">
          <img src="img/house_medium.jpg" alt="maison bleue à vendre" class="img-fluid hidden-xs-down hidden-lg-up">
          <img src="img/house_large.jpg" alt="maison bleu à vendre" class="img-fluid hidden-md-down">
        </figure>
        <div class="card-block text-xs-center">
          <p class="card-text">Située dans un quartier calme et arboré, cette maison avec ses 4 chambres est idéale pour une famille.</p>
          <figure class="description">
            <span><i class="fa fa-bed" aria-hidden="true"></i>  3 chambres</span>
            <span><i class="fa fa-tree" aria-hidden="true"></i>  Jardin</span>
            <span><i class="fa fa-tint" aria-hidden="true"></i>   2 SDB</span>
          </figure>
          <a href="#" class="card-link"><i class="fa fa-eye m-r-1" aria-hidden="true"></i>Voir</a>
        </div>
      </article>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-4">
      <article class="card">
        <div class="card-block text-xs-center head">
          <h4 class="card-title">Loft d'artiste</h4>
          <h6 class="card-subtitle">Roubaix, 1000/mois</h6>
        </div>
        <figure>
          <img src="img/loft_small.jpg" alt="maison bleu à vendre" class="img-fluid hidden-sm-up">
          <img src="img/loft_medium.jpg" alt="maison bleue à vendre" class="img-fluid hidden-xs-down hidden-lg-up">
          <img src="img/loft_large.jpg" alt="maison bleu à vendre" class="img-fluid hidden-md-down">
        </figure>
        <div class="card-block text-xs-center">
          <p class="card-text">Ce loft fraîchement rénové vous offre plus de 200 m2 d'une surface agréable à vivre en toute saison. Un must !</p>
          <figure class="description">
            <span><i class="fa fa-bed" aria-hidden="true"></i>  4 chambres</span>
            <span><i class="fa fa-paper-plane" aria-hidden="true"></i>  Terrasse</span>
            <span><i class="fa fa-tint" aria-hidden="true"></i>   3 SDB</span>
          </figure>
          <a href="#" class="card-link"><i class="fa fa-eye m-r-1" aria-hidden="true"></i>Voir</a>
        </div>
      </article>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-4">
      <article class="card">
        <div class="card-block text-xs-center head">
          <h4 class="card-title">T4 arboré</h4>
          <h6 class="card-subtitle">Croix, 700/mois</h6>
        </div>
        <figure>
          <img src="img/apartement_small.jpg" class="img-fluid hidden-sm-up" alt="appartement à vendre">
          <img src="img/apartement_medium.jpg" class="img-fluid hidden-xs-down hidden-lg-up" alt="appartement à vendre">
          <img src="img/apartement_large.jpg" class="img-fluid hidden-md-down" alt="appartement à vendre">
        </figure>
        <div class="card-block text-xs-center">
          <p class="card-text">Bel appartement de charme avec une vue exceptionnel sur l'hippodrome, proche commodités et transports.</p>
          <figure class="description">
            <span><i class="fa fa-bed" aria-hidden="true"></i>  2 chambres</span>
            <span><i class="fa fa-paper-plane" aria-hidden="true"></i>  Balcon</span>
            <span><i class="fa fa-tint" aria-hidden="true"></i>   2 SDB</span>
          </figure>
          <a href="#" class="card-link"><i class="fa fa-eye m-r-1" aria-hidden="true"></i>Voir</a>
        </div>
      </article>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-4">
      <article class="card">
        <div class="card-block text-xs-center head">
          <h4 class="card-title">Belle maison</h4>
          <h6 class="card-subtitle">Comines, 1100/mois</h6>
        </div>
        <figure>
          <img src="img/house_small.jpg" alt="maison bleu à vendre" class="img-fluid hidden-sm-up">
          <img src="img/house_medium.jpg" alt="maison bleue à vendre" class="img-fluid hidden-xs-down hidden-lg-up">
          <img src="img/house_large.jpg" alt="maison bleu à vendre" class="img-fluid hidden-md-down">
        </figure>
        <div class="card-block text-xs-center">
          <p class="card-text">Située dans un quartier calme et arboré, cette maison avec ses 4 chambres est idéale pour une famille.</p>
          <figure class="description">
            <span><i class="fa fa-bed" aria-hidden="true"></i>  3 chambres</span>
            <span><i class="fa fa-tree" aria-hidden="true"></i>  Jardin</span>
            <span><i class="fa fa-tint" aria-hidden="true"></i>   2 SDB</span>
          </figure>
          <a href="#" class="card-link"><i class="fa fa-eye m-r-1" aria-hidden="true"></i>Voir</a>
        </div>
      </article>
    </div>

    <div class="col-xs-12 col-sm-6 col-md-4">
      <article class="card">
        <div class="card-block text-xs-center head">
          <h4 class="card-title">Loft d'artiste</h4>
          <h6 class="card-subtitle">Roubaix, 1000/mois</h6>
        </div>
        <figure>
          <img src="img/loft_small.jpg" alt="maison bleu à vendre" class="img-fluid hidden-sm-up">
          <img src="img/loft_medium.jpg" alt="maison bleue à vendre" class="img-fluid hidden-xs-down hidden-lg-up">
          <img src="img/loft_large.jpg" alt="maison bleu à vendre" class="img-fluid hidden-md-down">
        </figure>
        <div class="card-block text-xs-center">
          <p class="card-text">Ce loft fraîchement rénové vous offre plus de 200 m2 d'une surface agréable à vivre en toute saison. Un must !.</p>
          <figure class="description">
            <span><i class="fa fa-bed" aria-hidden="true"></i>  4 chambres</span>
            <span><i class="fa fa-paper-plane" aria-hidden="true"></i>  Terrasse</span>
            <span><i class="fa fa-tint" aria-hidden="true"></i>   3 SDB</span>
          </figure>
          <a href="#" class="card-link"><i class="fa fa-eye m-r-1" aria-hidden="true"></i>Voir</a>
        </div>
      </article>
    </div>

  </div>

</section>

<!--

~~~~~~~~~End of the main content~~~~~~~~~~~~~

-->

<!--

~~~~~~~~~Start of the footer~~~~~~~~~~~~~

-->
@include('includes.footer')
