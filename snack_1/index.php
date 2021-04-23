<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 1</title>
</head>
<body>
    <h2>Utilizzo Ciclo For</h2>
    <?php 
    $listaPartite = [
        [
        'SquadraUnoNome' => 'Milan',
        'SquadraUnoRisultato' =>  0,
        'SquadraDueNome' => 'Inter',
        'SquadraDueRisultato' =>  2,
        ],
        [
        'SquadraUnoNome' => 'Juventus',
        'SquadraUnoRisultato' =>  2,
        'SquadraDueNome' => 'Napoli',
        'SquadraDueRisultato' =>  1,
        ],
        [
        'SquadraUnoNome' => 'Cagliari',
        'SquadraUnoRisultato' =>  4,
        'SquadraDueNome' => 'Sassuolo',
        'SquadraDueRisultato' =>  2,
        ],
        [
        'SquadraUnoNome' => 'Bologna',
        'SquadraUnoRisultato' =>  1,
        'SquadraDueNome' => 'Atalanta',
        'SquadraDueRisultato' =>  0,
        ],
        [
        'SquadraUnoNome' => 'Lecce',
        'SquadraUnoRisultato' =>  0,
        'SquadraDueNome' => 'Sampdoria',
        'SquadraDueRisultato' =>  0,
        ],
    ];

// UTILIZZO CICLO FOR

    for($i = 0; $i < count($listaPartite); ++$i) {
        echo 
            $listaPartite[$i]['SquadraUnoNome']. 
            ' - ' .
            $listaPartite[$i]['SquadraDueNome'].
            ' | '.
            $listaPartite[$i]['SquadraUnoRisultato'].
            ' - '.
            $listaPartite[$i]['SquadraDueRisultato']. '<br><br>';
    }

    ?>

    <h2>Utilizzo Ciclo ForEach</h2>

    <?php
    // UTILIZZO CICLO FOREACH
        foreach ($listaPartite as $partita) {
            echo 
            $partita['SquadraUnoNome']. 
            ' - ' .
            $partita['SquadraDueNome'].
            ' | '.
            $partita['SquadraUnoRisultato'].
            ' - '.
            $partita['SquadraDueRisultato']. '<br><br>';
        }
    ?>
</body>
</html>