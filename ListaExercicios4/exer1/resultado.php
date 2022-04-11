<?php
session_start();
$tempo = $_POST['tempo'];

if(isset($_POST['inserir_tempo'])):
    $_SESSION['voltas'][] = $tempo;
    header('Location: index.html');
endif;

if(isset($_POST['calcular'])):
    if(!empty($_SESSION['voltas'])):

        print_r($_SESSION['voltas']);
        echo '<br>';

        $numero_voltas = count($_SESSION['voltas']);
        $tempo_total = array_sum($_SESSION['voltas']);
        $media_tempo_voltas = ($tempo_total/$numero_voltas);
        
        $volta_mais_rapida = '';
        $numero_volta = '';
        foreach ($_SESSION['voltas'] as $volta => $tempo_volta):
            if(empty($volta_mais_rapida)):
                $volta_mais_rapida = $tempo_volta;
                $numero_volta = ($volta+1);
            else:
                if($tempo_volta < $volta_mais_rapida):
                    $volta_mais_rapida = $tempo_volta;
                    $numero_volta = ($volta+1);
                endif;
            endif;
        endforeach;

        echo 'O total de voltas foi de: '.$numero_voltas.'<br>';
        echo 'A volta mais foi a volta número: '.$numero_volta.' com o tempo de: '.$volta_mais_rapida.'<br>';
        echo 'A media das voltas foi de: '.$media_tempo_voltas.'<br>';

    endif;
endif;



?>