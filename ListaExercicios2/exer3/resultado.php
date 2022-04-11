<?php
session_start();

if(!isset($_SESSION['numero'])):
    $_SESSION['numero'] = array();
endif;

if(isset($_POST['inserir'])):
$numero = $_POST['numero'];

if(in_array($numero, $_SESSION['numero'])):
    $_SESSION['numero'][] = '-';
else:
    $_SESSION['numero'][] = $numero;
endif;

endif;

if(isset($_POST['limpar'])):
    $_SESSION['numero'] = array();
endif;

header('Location: index.php');
?>