<?php 
    include('entete.php');

    $identifiant = $_REQUEST['id'];

    $_SESSION['login'] = $identifiant;

    
    echo "Bonjour ", $identifiant;

?>
        <!-- partie principale -->
        <section>
            <h2>Formulaire</h2>
            <form action="#">
                <p><label for="id">Identifiant : </label><input type="text" name="id" value="<?php if(!empty($_REQUEST["id"])){echo $_REQUEST["id"]; }?>"></p>
                <p><label for="mdp">Mot de passe : </label><input type="password" name="mdp"></p>
                <p><input type="submit"></p>
            </form>
         </section>


<?php 

    
    


    include('pieddepage.php');
?>
