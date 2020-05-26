<?php
$hora;
$minutos;
$segundo;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/png" href="favicon.png" sizes="96x96">
    <title>HOME</title>
</head>

<body>
    <h1 id="header">Pet-Feeder</h1>

    <div class="tiempo">
        <form action="index.php" method="POST" class="tiempo" id="horas">
            <p>Selecciona una hora </p>
            <input type="number" name="hora" value="<?php $_POST['hora'] ?>; " min="1" max="24" required/>
            
    </div>

    <div class="motor">
    <form action="index.php" method="POST" name="raza_lista">
            <p>Selecciona un tamaño de raza </p>
                <select name="razas">
                     <optgroup label="Tamaño de razas">
                        <option value= null >  </option>
                        <option value= 1 >Mini</option>
                        <option value= 2 >Pequeña</option>
                        <option value= 4 >Mediana</option>
                        <option value= 5 >Grande</option>
                        <option value= 7 >Gigante</option>
                     </optgroup>
                </select>
        <input type="submit" value="Configurar" required/>
    </form>
    </div>

    <div><button class="button"> Detener </button></div>

    <hr>

    <?php

	$segundos = $_POST['hora'];
	$vueltas = $_POST['razas'];
    
    if(!empty($segundos) && !empty($vueltas)) {
    /*Ejecución del script con parametros de PHP*/
    system("sudo python3 /var/www/html/script.py $segundos $vueltas");        
    }



    ?>
    
</body>
</html>
