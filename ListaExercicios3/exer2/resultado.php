<?php
session_start();

if(!isset($_SESSION['nomes'])):
    $_SESSION['nomes'] = array();
endif;

if(isset($_POST['inserir'])):
$nomes = $_POST['nomes'];

if(count($_SESSION['nomes'])<10):
    if(in_array($nomes, $_SESSION['nomes'])):
        $_SESSION['nomes'][] = '-';
    else:
        $_SESSION['nomes'][] = $nomes;
    endif;

endif;

endif;

if(isset($_POST['limpar'])):
    $_SESSION['nomes'] = array();
endif;

header('Location: index.php');
?>