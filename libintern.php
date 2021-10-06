<?php

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

function suma($n1,$n2)
{
    return $n1+$n2;
}

function resta($n1,$n2)
{
    return $n1-$n2;
}

function multiplica($n1,$n2)
{
    return $n1*$n2;
}

function divide($n1,$n2)
{
    return $n1/$n2;
}

function pintor($cosa)
{
    if(numerico($cosa))
    { // Una pavada, si es par lo pinta de verde y si es impar lo pinta de rojo.
        $color = ($cosa%2==0)?"green":"red";
        echo "<span style=\"color: $color; font-size: 32pt\">$cosa</span>";
    }
    else
    {
        if(is_array($cosa))
        {
            echo "<ul>";
            $errorString = "";
            foreach($cosa as $clave => $error)
            {
                $errorString = $errorString."<li>Error en ".$clave.": ".$error."</li>";
            }
            echo $errorString."</ul>";
        }
        else
        {
            echo $cosa;
        }
    }
    
}

function numerico($cosa)
{
    if(is_numeric($cosa))
    {
        return true;
    }
    else return false;
}