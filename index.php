<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SquadTracker</title>
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>SquadTracker</h1>
    </header>
    <main>
        <form action="procesar/procesar.php" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
            <fieldset>
                <legend>Participantes</legend>
                <label for="entrenador" class="titulo">Nombre del entrenador:<input type="text" name="entrenador" id="entrenador"></label>
                <label for="jugadores[]" class="titulo">Jugadores asistentes al entrenamiento:</label>
                <label><input type="checkbox" name="jugadores[]" value="Hugo"> Hugo</label>
                <label><input type="checkbox" name="jugadores[]" value="Mateo"> Mateo</label>
                <label><input type="checkbox" name="jugadores[]" value="Martín"> Martín</label>
                <label><input type="checkbox" name="jugadores[]" value="Lucas"> Lucas</label>
                <label><input type="checkbox" name="jugadores[]" value="Leo"> Leo</label>
                <label><input type="checkbox" name="jugadores[]" value="Daniel"> Daniel</label>
                <label><input type="checkbox" name="jugadores[]" value="Alejandro"> Alejandro</label>
                <label><input type="checkbox" name="jugadores[]" value="José"> José</label>
                <label><input type="checkbox" name="jugadores[]" value="Manuel"> Manuel</label>
                <label><input type="checkbox" name="jugadores[]" value="Álvaro"> Álvaro</label>
                <label><input type="checkbox" name="jugadores[]" value="Adrián"> Adrián</label>
                <label><input type="checkbox" name="jugadores[]" value="David"> David</label>
                <label><input type="checkbox" name="jugadores[]" value="Diego"> Diego</label>
                <label><input type="checkbox" name="jugadores[]" value="Mario"> Mario</label>
                <label><input type="checkbox" name="jugadores[]" value="Marcos"> Marcos</label>
                <label><input type="checkbox" name="jugadores[]" value="Javier"> Javier</label>
                <label><input type="checkbox" name="jugadores[]" value="Carlos"> Carlos</label>
                <label><input type="checkbox" name="jugadores[]" value="Izan"> Izan</label>
            </fieldset>
            <fieldset>
                <legend>Información de la sesión</legend>
                <label for="tipo" class="titulo">Tipo de la sesión:</label>
                <label><input type="radio" name="tipo" value="Técnico-Táctico"> Técnico-Táctico</label>
                <label><input type="radio" name="tipo" value="Preparación física"> Preparación física</label>
                <label><input type="radio" name="tipo" value="Partido de entrenamiento"> Partido de entrenamiento</label>
                <label><input type="radio" name="tipo" value="Recuperación"> Recuperación</label>
                <label for="lugar" class="titulo">Lugar de entreno</label>
                <label><input type="radio" name="lugar" value="Estadio"> Estadio</label>
                <label><input type="radio" name="lugar" value="Campo de entrenamiento"> Campo de entrenamiento</label>
                <label><input type="radio" name="lugar" value="Gimnasio"> Gimnasio</label>
                <label for="material[]" class="titulo">Material utilizado</label>
                <label><input type="checkbox" name="material[]" value="Balón"> Balón</label>
                <label><input type="checkbox" name="material[]" value="Conos"> Conos</label>
                <label><input type="checkbox" name="material[]" value="Petos"> Petos</label>
                <label><input type="checkbox" name="material[]" value="Pizarra"> Pizarra</label>
                <label><input type="checkbox" name="material[]" value="Equipamiento de fitness"> Equipamiento de fitness</label>
                <label><input type="checkbox" name="material[]" value="Porterías pequeñas"> Porterías pequeñas</label>
                <label for="duracion" class="titulo">Duración (en minutos)<input type="number" name="duracion" min="1"></label>
            </fieldset>
            <fieldset>
                <legend>Observaciones</legend>
                <label for="cosas">Cosas a mejorar:</label>
                <textarea name="cosas"></textarea>
            </fieldset>
                <button type="submit" class="realizar">Realizar informe</button><button type="reset" class="reset">Limpiar</button>
        </form>
    </main>
    <footer>
        Made by José Iglesias Hernández<a href="https://jose-iglesiaas.github.io/" target="_blank" rel="noopener noreferrer"> <img src="img/ico.png"></a>
    </footer>
</body>
</html>