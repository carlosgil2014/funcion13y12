<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>number10</h1>
    <?php if(isset($valor) && !isset($valor13)){
        echo $valor;
    }?>
    <form action="index.php?accion=number10" method="POST">
        <?php //pude poner atributos del input number para aceptar solo  numeros?>
        <input type="text" name="valor">
        <input type="submit" value="Enviar">
    </form>
    <h1>number13</h1>
    <?php if(isset($valor13) && !isset($valor)){
        echo $valor13;
    }?>
    <form action="index.php?accion=number13" method="POST">
        <?php //pude poner atributos del input number para aceptar solo  numeros?>
        <input type="text" name="valor13">
        <input type="submit" value="Enviar">
    </form>

</body>
</html>