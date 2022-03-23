<?php

    $valores = [];
    $pesquisa = $_POST['pesquisa'];
    $resultado_pesquisa = [];

    foreach ($_POST['valor'] as $indice => $valor)
    {
        $valores[$indice] = $valor;
        if ($pesquisa == $valor):
            $resultado_pesquisa[] = $indice;
        endif;
    }

?>