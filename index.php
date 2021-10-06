<?php include_once "libintern.php";

    if(isset($_POST["botonSuma"]) || isset($_POST["botonResta"]) || isset($_POST["botonMulti"]) || isset($_POST["botonDiv"]))
    {
        $errores = valida();

        if(count($errores) > 0)
        {
            pintor($errores);
        }
        else
        {
            $n1 = $_POST["numero1"];
            $n2 = $_POST["numero2"];
            $resultado = 0;
            if(isset($_POST["botonSuma"]))
            {
                $resultado = suma($n1,$n2);
            }
            if(isset($_POST["botonResta"]))
            {
                $resultado = resta($n1,$n2);
            }
            if(isset($_POST["botonMulti"]))
            {
                $resultado = multiplica($n1,$n2);
            }
            if(isset($_POST["botonDiv"]))
            {
                $resultado = divide($n1,$n2);
            }
            pintor($resultado);
        }

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio de formulario</title>
</head>
<body>
<form action="" method="post">
        <input type="text" name="numero1" id="numero1" />
        <input type="text" name="numero2" id="numero2" />
        <br />
        <input type="submit" name="botonSuma" id="botonSuma" value="suma" />
        <input type="submit" name="botonResta" id="botonResta" value="resta" />
        <input type="submit" name="botonMulti" id="botonMulti" value="multiplica" />
        <input type="submit" name="botonDiv" id="botonDiv" value="divide" />
    </form>
</body>
</html>