<!DOCTYPE html>
<html lang="fr" prefix="og: https://ogp.me/ns#">

<?php 
    include('entete.php');
?>

<body>
        <!-- partie principale -->
        <section>
            <h2>Formulaire</h2>
            <form action="connexion.php">
                <label for="id">Identifiant : </label><input type="text" name="id">
                <label for="mdp">Mot de passe : </label><input type="password" name="mdp">
                <input type="submit">
            </form>
         </section>
</body>
</html>
