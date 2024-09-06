<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex2.php" method="get">
   Digite sua Nota <input type="number" name="nota" />
   <input type="submit" name="submit" value="Classificar" />
 </form> 
 <?php 
   
   if (isset($_GET['nota'])) {
       $nota = intval($_GET['nota']); // Convertendo para inteiro
       
       switch ($nota) {
            case 0:
            case 1:
            case 2:
            case 3:
            case 4:
               echo "Nota E";
               break;
            case 5:
            case 6:
               echo "Nota D";
               break;
            case 7:
            case 8:
                echo "Nota C";
                break;
            case 9:
                echo "Nota B";
                break;
            case 10:
                echo "Nota A";
                break;           
           default:
               echo "Nota não classificada ou fora do intervalo esperado.";
               break;
       }
   }


 ?>
</body>
</html>