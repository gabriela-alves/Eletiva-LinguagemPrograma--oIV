<?php 

    $valores = array(
        "valor1" => $_POST["valor1"],
        "valor2" => $_POST["valor2"],
        "valor3" => $_POST["valor3"],
        "valor4" => $_POST["valor4"],
        "valor5" => $_POST["valor5"],
        "valor6" => $_POST["valor6"],
        "valor7" => $_POST["valor7"],
        "valor8" => $_POST["valor8"],
        "valor9" => $_POST["valor9"],
        "valor10" => $_POST["valor10"],
    );

    $maiorvalor = 0;

    foreach ($valores as $c => $v){
        if ($maiorvalor < $v)
            $maiorvalor = $v;
    }

    echo '<br/>';

    echo $maiorvalor.$c;

?>