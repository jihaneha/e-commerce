<?php
include('common/head.php');
include('common/menu.php');
?>
<h1>Créer un compte</h1>
    <form class="formcontact">
        <label class="labelcontact" for="text" type="text">Prénom</label><br>
        <input class="inputcontact" type="text" id="text" placeholder="prénom" >
        <br>
        <label class="labelcontact" for="text1" type="text1">Nom</label><br>
        <input class="inputcontact" type="text1" id="text1" placeholder="nom" >
        <br>
        <label class="labelcontact" for="email" type="email">Email</label><br>
        <input class="inputcontact" type="email" placeholder="jane.doe@example.com" id="email">
        <br>
        <label class="labelcontact" for="motdepasse" type="motdepasse">Mot de passe</label><br>
        <input class="inputcontact" type="password" placeholder="Mot de passe" id="motdepasse">
        <br>
        <button class="btn">se connecter</button>
    </form>
<?php
include('common/footer.php');