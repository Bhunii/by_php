<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
</head>
<body>
    <form action="Calculadora.php" method="POST">
        <input type="number" name="operador1" value="operador1" placeholder="operador1">
        <input type="number" name="operador2" value="operador2" placeholder="operador2">
        
        <select name="operacion" id="operacion">
            <option name="suma" value="suma">Sumar</option>
            <option value="resta">Restar</option>
            <option value="multiplicacion">Multiplicar</option>
            <option value="division">Dividir</option>
        </select>

        <input type="submit" value="Enviar" name="Enviar">
    </form>
</body>
</html>