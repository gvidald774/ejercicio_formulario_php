<?php include_once "libintern.php";
/**
 * Esta función realiza la validación de datos para la página en cuestión.
 */
    function valida()
    {
        $errores = [];
        
        if (!(isset($_POST["botonSuma"]) || isset($_POST["botonResta"]) || isset($_POST["botonMulti"]) || isset($_POST["botonDiv"])))
        {
            $errores["boton"] = "Botón no válido.";
        }
        if ($_POST["numero1"] == '')
        {
            $errores["numero1"] = "Necesario introducir número.";
        }
        else
        {
            if (!numerico($_POST["numero1"]))
            {
                $errores["numero1"] = "No es un número válido.";
            }
        }
        if ($_POST["numero2"] == '')
        {
            $errores["numero2"] = "Necesario introducir número.";
        }
        else
        {
            if (!numerico($_POST["numero2"]))
            {
                $errores["numero2"] = "No es un número válido.";
            }
        }
        return $errores;
    }

    $errores = valida();

    $correcto = (count($errores) == 0)?1:0;
    if($correcto==1) // Si el formulario está validado, puede realizarse la suma.
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
    }
    

    header("Location: ./formulario.php?resultado=$resultado&error=$correcto");
?>