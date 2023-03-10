@include('includes.header')

<!-- Start of the jumbotron with main image -->
<div class="jumbotron p-t-1 text-xs-center">
  <span class="pull-xs-right appeal">Nous Nous Engageons À Vos Côtés
    Vous souhaitez vous décharger des contraintes liées à la location de votre bien ?
    
    Alors n’hésitez plus et faîtes confiance à un professionnel de la gestion immobilière. !</span>
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

  <h2>3 agences dans la métrople</h2>
  <p>Avec des bureaux à Lille, Roubaix et Villeneuve d'Ascq, notre agence immobilière est présente dans les grands centres immobliers.
  Placés au coeur de notre secteur d'activité, nous nous déplaçons rapidement et ne sommes jamais loins de vous. N'hésitez pas à nous contacter
ou à venir directement nous rencontrer.</p>

<!-- Google map -->
  <iframe src="https://www.google.com/maps/d/embed?mid=18_MlsGRJLDUQEIrI_AMSmFS0_xc"></iframe>

<!-- Column content -->
  <div class="row m-t-3">

<!-- Agencies location -->
    <div class="col-xs-12 col-sm-6">
      <h3>Agence de Roubaix</h3>
      <p>47 Boulevard Gambetta</p>
      <p><i class="fa fa-phone green" aria-hidden="true"></i><a href="tel:000000000">   ## ## ## ## ##</a></p>
      <p><i class="fa fa-envelope purple" aria-hidden="true"></i><a href="mailto:agenceexempel@gmail.com">   agenceexempel@gmail.com</a></p>
      <p>Ouvert du lundi au vendre, de 8h00 à 12h00 et de 13h00 à 18h00</p>
      <h3>Agence de Lille</h3>
      <p>100 Boulevard Louis XIV</p>
      <p><i class="fa fa-phone green" aria-hidden="true"></i><a href="tel:000000000">   ## ## ## ## ##</a></p>
      <p><i class="fa fa-envelope purple" aria-hidden="true"></i><a href="mailto:agenceexempel@gmail.com">   agenceexempel@gmail.com</a></p>
      <p>Ouvert du lundi au vendre, de 8h00 à 12h00 et de 13h00 à 18h00</p>
      <h3>Agence de Villeneuve d'Ascq</h3>
      <p>16 Avenue du pont de bois</p>
      <p><i class="fa fa-phone green" aria-hidden="true"></i><a href="tel:000000000">   ## ## ## ## ##</a></p>
      <p><i class="fa fa-envelope purple" aria-hidden="true"></i><a href="mailto:agenceexempel@gmail.com">   agenceexempel@gmail.com</a></p>
      <p>Ouvert du lundi au vendre, de 8h00 à 12h00 et de 13h00 à 18h00</p>
    </div>

<!-- Contact form -->
    <div class="col-xs-12 col-sm-6">
      <h3>Nous contacter</h3>
      <form class="m-b-2">
        <fieldset class="form-group">
          <label for="firstname">Prénom</label>
          <input type="text" class="form-control" id="firstname" name="user_firstname">
          <label class="m-t-1" for="lastname">Nom</label>
          <input type="text" class="form-control" id="lastname" name="user_lastname">
          <label class="m-t-1" for="mail">Adresse mail</label>
          <input type="email" class="form-control" id="mail" name="user_email">
          <small class="text-muted">Ces informations resteront confidentielles.</small>
        </fieldset>

        <fieldset class="form-group">
          <label for="agency">Quelle agence souhaitez-vous contacter ?</label>
          <select class="form-control" id="agency" name="contact_agency">
            <option value="information_generale">Lille</option>
            <option value="devis">Roubaix</option>
            <option value="rendez_vous">Villeneuve d'Ascq</option>
          </select>
        </fieldset>

        <fieldset class="form-group">
          <label for="message">Vous pouvez indiquer votre message</label>
          <textarea class="form-control" id="message" name="user_message" rows="3"></textarea>
        </fieldset>
        <button type="submit" class="btn" id="contact_button">Envoyer</button>
      </form>
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
