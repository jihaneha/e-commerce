<?php
include('common/head.php');
include('common/menu.php');
?>
<h1 class="text-center">Connexion</h1>
    <form class="formcontact">
        <label class="labelcontact" for="email" type="email">Email</label><br>
        <input class="inputcontact" type="email" placeholder="jane.doe@example.com" id="email">
        <br>
        <label class="labelcontact" for="motdepasse" type="motdepasse">Mot de passe</label><br>
        <input class="inputcontact" type="password" placeholder="Mot de passe" id="motdepasse">
        <br>
        <button class="btn">se connecter</button>
        <br>
        <br>
        <br>
        <p id="pcontact"><a href="register.php" target="_blank">Créer un compte</a></p>
    </form>
    <script src="main.js" type="text/javascript"></script>
<?php 
  