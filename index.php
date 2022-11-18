<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário com POST</title>
</head>
<body>
    <form action="cadastro.php" method="POST">
            <label for="marca">Marca</label>
            <input type="text" name="marca" id="marca">
            <br>
            <label for="preco">Preço</label>
            <input type="number" name="preco" id="preco">
            <br>
            <div>
                <input type="checkbox" name="opcionais[]" value="Teto solar"> Teto solar
            </div>
            <div>
                <input type="checkbox" name="opcionais[]" value="Pelicula"> Pelicula
            </div>
            <div>
                <input type="checkbox" name="opcionais[]" value="Blindado"> Blindado
            </div>
            <input type="submit" value="Enviar">
    </form>
</body>
</html>