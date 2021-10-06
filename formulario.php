<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="./procesa.php" method="post">
        <input type="text" name="numero1" id="numero1" />
        <input type="text" name="numero2" id="numero2" />
        <br />
        <input type="submit" name="botonSuma" id="botonSuma" value="suma" />
        <input type="submit" name="botonResta" id="botonResta" value="resta" />
        <input type="submit" name="botonMulti" id="botonMulti" value="multiplica" />
        <input type="submit" name="botonDiv" id="botonDiv" value="divide" />
    </form>
    <?php
        include_once "libintern.php";
        
        if(isset($_GET["error"]))
        {
            if($_GET["error"] == 0)
            {
            }
        }
        if(isset($_GET["resultado"]))
        {
            pintor($_GET["resultado"]);
        }
    ?>
</body>
</html>