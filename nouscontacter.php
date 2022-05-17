<?php
include('common/head.php');
include('common/menu.php');
?>
 <h2 class="text-center">CONTACTEZ-NOUS</h2>
    <p class="text-center">N'hésitez pas à prendre contact avec notre équipe en nous envoyant un email via le formulaire de contact ou par Téléphone : 06 00 00 00 00</p>

    <h3 class="text-center">Envoyez un message</h3>
    <form class="formcontact">
          <label for="exampleInputName2" class="labelcontact">Nom</label>
          <input type="text" class="inputcontact form-control" id="exampleInputName2" placeholder="Jane Doe">
          <label class="labelcontact" for="exampleInputEmail2">Email</label>
          <input type="email" class="form-control inputcontact " id="exampleInputEmail2" placeholder="jane.doe@example.com">
            <label for="text" class="labelcontact">Message</label>
            <textarea class="form-control" rows="3"></textarea>
        <button type="submit" class="btn btn-default  ">Envoyer</button>
      </form>
      <script src="main.js" type="text/javascript"></script>

<?php 
// include('common/footer.php');  