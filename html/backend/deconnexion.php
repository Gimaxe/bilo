<?php
    session_start();

    // Détruit toutes les variables de session
    $_SESSION = array();
    session_destroy();

    header("Location: ../src/index.php");
    exit;
?>