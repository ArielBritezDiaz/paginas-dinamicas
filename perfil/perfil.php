
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="Imagenes/logo.png">
    <link rel="stylesheet" href="css/style2.css">
    <title>Perfil</title>
</head>
<body>

    <?php
    

    if(isset($_GET['enviar'])){
        $usuario= $_GET['usuario'];
        $nombre= $_GET['nombre'];
        $edad= $_GET['edad'];
        $biografia= $_GET['biografia'];
        $color= $_GET['color'];
        $email= $_GET['email'];
        $fecha= $_GET['fecha'];
        $nacionalidad= $_GET['nacionalidad'];
        $sexo= $_GET['sexo'];
        if($sexo == 'femenino'){
        echo '<header>';
        echo '<img src= "Imagenes/antonella.jpg">';
        echo '<p>'.$usuario.'</p>';
        echo '</header>';
        } else{
        echo 'Error, ingrese datos válidos';
    }
    
    if($sexo == 'masculino'){
        echo '<header>';
        echo '<img src= "Imagenes/messi.jpeg">';
        echo '<p>'.$usuario.'</p>';
        echo '</header>';
        } else{
        echo 'Error, ingrese datos válidos';
    }

    echo '<p class="datos">Nombre y Apellido</p> ';
    echo '<p class="informacion">'.$nombre.'</p>';
    echo '<p class="datos">Edad</p> ';
    echo '<p class="informacion">'.$edad.'</p>';
    echo '<p class="datos">Biografia</p> ';
    echo '<p class="informacion">'.$biografia.'</p>';
    echo '<p class="datos">Color</p> ';
    echo '<p class="informacion">'.$color.'</p>';
    echo '<p class="datos">Email</p> ';
    echo '<p class="informacion">'.$email.'</p>';
    echo '<p class="datos">Fecha</p> ';
    echo '<p class="informacion">'.$fecha.'</p>';
    echo '<p class="datos">Nacionalidad</p> ';
    echo '<p class="informacion_nacionalidad">'.$nacionalidad.'</p>';
    }

    ?>

    </p>

<footer>
    <cite>© 2022 Díaz Ariel-Mariano Aguiar. Todos los derechos reservados 2022</cite>
</footer>

</body>
</html>