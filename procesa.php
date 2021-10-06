<?php include_once "libintern.php";
/**
 * Esta función realiza la validación de datos para la página en cuestión.
 */
    function valida()
    {
        $valido = false;
        if(isset($_POST["botonSuma"]) || isset($_POST["botonResta"]) || isset($_POST["botonMulti"]) || isset($_POST["botonDiv"])) // Si el botón existe, es que se ha llamado a la página desde el formulario.
        {
            // Se comprueba que los números existen y son números.
            if(isset($_POST["numero1"]) && isset($_POST["numero2"]))
            {
                $numero1 = $_POST["numero1"];
                $numero2 = $_POST["numero2"];
                if(is_numeric($numero1) && is_numeric($numero2))
                {
                    $valido = true; // Si se cumplen todas las condiciones, devuelve true.
                }
            }
        }
        return $valido;
    }

    $correcto = 1;
    $incorrecto = 0;

    $error = valida()?$correcto:$incorrecto;
    if($error==1) // Si el formulario está validado, puede realizarse la suma.
    {
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];

        if(isset($_POST["botonSuma"]))
        {
            $resultado=suma($numero1,$numero2);
        }
        else if (isset($_POST["botonResta"]))
        {
            $resultado=resta($numero1,$numero2);
        }
        else if (isset($_POST["botonMulti"]))
        {
            $resultado=multiplica($numero1,$numero2);
        }
        else if (isset($_POST["botonDiv"]))
        {
            $resultado=divide($numero1,$numero2);
        }
        else
        {
            $error = 2;
        }
    }

    header("Location: ./formulario.php?resultado=$resultado&error=$error");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <?php
        echo "El resultado de la suma es: ";
        pintor($suma);
    ?>
</head>
<body>
</body>
</html>
