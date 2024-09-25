<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
   
    <?php
        echo 'Esto es una cadena sencilla .';

        echo 'También se pueden incluir nuevas líneas en
        un string de esta forma, ya que es
        correcto hacerlo así';

        // Resultado: Arnold una vez dijo: "I'll be back"
        echo 'Arnold una vez dijo: "I\'ll be back"' . "\n";
        
        // Resultado: Ha borrado C:\*.*?
        echo 'Ha borrado C:\\*.*?';

        // Resultado: Ha borrado C:\*.*?
        echo 'Ha borrado C:\*.*?';

        // Resultado: Esto no se expandirá: \n una nueva línea
        echo 'Esto no se expandirá: \n una nueva línea';

        // Resultado: Las variables $tampoco se $expandirán
        echo 'Las variables $tampoco se $expandirán';
    ?>
 
   
</body>

</html>
