<?php

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
        echo $cosa;
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