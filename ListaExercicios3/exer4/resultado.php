<?php
$numeros = explode(',', $_POST['numero']);

$divisores = array();
foreach ($numeros as $numero):
    
    for($i = 1; $i < $numero; $i++):
        if($numero%$i == 0):
            $divisores[$numero][] = $i;
        endif;
    endfor;

endforeach;

foreach($divisores as $numero => $divisor):
    echo 'Para o número: '. $numero.'<br>';

    $divisores_numero = [];
    $soma_valores = '';
    foreach($divisor as $index => $item):
        $divisores_numero[] = $item;
        $soma_valores = array_sum($divisor);
    endforeach;
    echo implode(",", $divisores_numero). ' = '.$soma_valores;
    echo '<br>';
    
endforeach;