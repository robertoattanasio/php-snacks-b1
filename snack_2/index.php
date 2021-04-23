<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 2</title>
</head>

<body>
    <?php
    $name = $_GET['name'];
    $email = $_GET['email'];
    $age = $_GET['age'];

    // CHECK DEL NOME
    if ((strlen($name) > 2) && !is_nan($name)) {

        // CHECK DELL'EMAIL
        if ((strpos($email, '.') == true) && (strpos($email, '@') == true)) {

            // CHECK DELL'ETA
            if (is_numeric($age)) {
                echo 'ACCESSO RIUSCITO';
            } else {
                echo 'ACCESSO NEGATO. Hai inserito un\'età non valida.';
            }

        } else {
            echo 'ACCESSO NEGATO. Hai inserito una mail non valida.';
        }

    } else {
        echo 'ACCESSO NEGATO. Hai inserito un nome non valido.';
    }
  
    ?>
</body>
</html>