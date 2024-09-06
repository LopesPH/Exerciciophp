<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Verifique se o número é Par ou Ímpar</h1>
    <form action="" method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Verificar</button>
    </form>
    <?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = isset($_POST['numero']) ? (int)$_POST['numero'] : 0;
    if ($numero % 2 == 0) {
       echo $resultado = "O número $numero é PAR.";
    } else {
       echo $resultado = "O número $numero é ÍMPAR.";
    }
} else {
    echo $resultado = "Nenhum número foi inserido.";
}
?>

</body>
</html>