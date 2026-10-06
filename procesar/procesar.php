<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $entrenador = $_POST['entrenador'];
    if(!empty($_POST['cosas'])){
        $cosas = $_POST['cosas'];
    }else{
        $cosas = "Sin cosas a mejorar";
    }
    if(isset($_POST['tipo'])){
        $tipo = $_POST['tipo'];
    }else{
        $tipo = "Tipo de entrenamiento no asignado";
    }
    if(isset($_POST['lugar'])){
        $lugar = $_POST['lugar'];
    }else{
        $lugar = "Lugar no definido";
    }
    if(!empty($_POST['duracion'])){
        $duracion = $_POST['duracion'];
    }else{
        $duracion = "Duración no definida";
    }
}

$numMsg = mt_rand(1,3);
$msg = "";
switch ($numMsg) {
    case 1:
        $msg = "¡Qué bueno verte $entrenador!";
        break;
    case 2:
        $msg = "¡Hola $entrenador!";
        break;
    case 3:
        $msg = "¡Menudo equipazo $entrenador!";
    break;
    default:
        $msg = "Este mensaje de bienvenida no debería que haber salido...";
        break;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SquadTracker</title>
    <link rel="shortcut icon" href="../img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <h1>SquadTracker</h1>
    </header>
    <main>
        <h2><?= $msg ?></h2>
        <h2>Entrenamiento día <?= date("d-m-y") ?></h2>
        <section>
            <h3>Participantes</h3>
            <ul>
                <li>Entrenador: <?php if($entrenador == ""){echo "sin definir";}else{echo $entrenador;}?></li>
                <li>Jugadores 
                    <ul>
                        <?php 
                            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                                if(isset($_POST['jugadores'])){
                                    foreach ($_POST['jugadores'] as $valor) {
                                        echo "<li>$valor</li>";
                                    }
                                }else{
                                    echo "<li>Ningún jugador ha acudido al entreno</li>";
                                }
                            }
                        ?>
                    </ul>
                </li>
            </ul>
        </section>
        <section>
            <h3>Información de la sesión</h3>
            <ul>
                <li>Tipo de la sesión: <?= $tipo ?></li>
                <li>Lugar de entreno: <?= $lugar ?></li>
                <li>
                    Material utilizado:
                    <ul>
                        <?php 
                            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                                if(isset($_POST['material'])){
                                    foreach ($_POST['material'] as $valor) {
                                        echo "<li>$valor</li>";
                                    }
                                }else{
                                    echo "<li>Ningún material ha sido utilizado</li>";
                                }
                            }
                            ?>
                    </ul>
                </li>
                <li>Duración: <?= $duracion ?> minutos</li>
            </ul>
        </section>
        <section>
            <h3>Observaciones:</h3>
            <p>Cosas a mejorar: <?= $cosas ?></p>
        </section>
    </main>
    <footer>
        Made by José Iglesias Hernández<a href="https://jose-iglesiaas.github.io/" target="_blank" rel="noopener noreferrer"> <img src="../img/ico.png"></a>
    </footer>
</body>
</html>