<?php

    include('entete.php');

    $identifiant = $_REQUEST['id'];

    $_SESSION['login'] = $identifiant;

    echo "Bonjour", $identifiant;

    include('pieddepage.php');


?>