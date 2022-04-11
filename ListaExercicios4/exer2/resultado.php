<?php
session_start();

if(isset($_POST['informar_lote'])):
    $_SESSION['lote']['numero_cheques'] = $_POST['numero_cheques'];
    $_SESSION['lote']['soma'] = $_POST['soma_lote'];
endif;

if(isset($_POST['informar_cheque'])):
    $_SESSION['cheques'][] = $_POST['valor_cheque'];
endif;

if(isset($_POST['verificar_lote'])):
    if(!empty($_POST['cheques'])):
        $total_cheques = array_sum($_SESSION['cheques']);

        if($total_cheques == $_SESSION['lote']['soma']):
            echo 'Lote OK';
        elseif($total_cheques < $_SESSION['lote']['soma']):
            echo 'Diferença negativa';
        endif;
    endif;
endif;