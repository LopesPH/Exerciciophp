<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Css/style.php" />
    <title>Exercicio 1</title>
</head>
<body>  
  <main>
    <?php
      $nome = $_POST["nome"];
      $idade = $_POST["idade"];

      if($idade >= 18){
        echo "Cadastro Realizado";
      }else{
        echo "Você não pode se cadastrar neste site.";
      }

    ?>
  </main>
</body>
</html>