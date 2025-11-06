<?php 
    include('entete.php');
?>
        <!-- partie principale -->
        <section>
            <h2>Formulaire</h2>
            <form action="formulaire.php">
                <p><label for="id">Identifiant : </label><input type="text" name="id"></p>
                <p><label for="mdp">Mot de passe : </label><input type="password" name="mdp"></p>
                <p><input type="submit"></p>
            </form>
         </section>


<?php 
    include('pieddepage.php');
?>
