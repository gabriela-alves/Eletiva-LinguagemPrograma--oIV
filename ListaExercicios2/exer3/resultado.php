<?php
session_start();

$numero = $_POST['numero'];

if(in_array($numero, $_SESSION['numero'])):
    $_SESSION['numero'][] = '-';
else:
    $_SESSION['numero'][] = $numero;
endif;

header('Location: index.php');
?>