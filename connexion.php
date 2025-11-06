<?php

    include('entete.php');

    $identifiant = $_REQUEST['id'];

    $_SESSION['login'] = $identifiant;

    include('pieddepage.php');


?>