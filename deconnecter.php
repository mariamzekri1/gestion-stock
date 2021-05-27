<!DOCTYPE html>
<?php

// pour commencer d'utiliser session
session_start();
// Détruit toutes les variables d'une session
// unset() détruit une variable
session_unset();
// detruit une session totalement
session_destroy();

header('location:index.php');

?>