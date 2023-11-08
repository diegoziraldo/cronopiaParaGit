<?php

$idiomaSeleccionado = isset($_GET['lang']) ? $_GET['lang'] : 'es';
// Obtener el idioma seleccionado
$traducciones = include('idiomas/' . $idiomaSeleccionado . '.php');
// Obtener la traducción correspondiente
$saludo = $traducciones['saludo'];

?>

<!DOCTYPE html>
<html>

<head>
    <title>Ejemplo de Cambio de Idioma</title>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body>
    <h1>Pagina 2</h1>
    <h1><?php echo $saludo; ?></h1>

    <form action="" method="get">
        <label for="lang">Selecciona un idioma:</label>
        <select name="lang" id="idiomaSelect" onchange="this.form.submit()">
            <option value="es" data-image="./images/es/flag.png">Español</option>
            <option value="en" data-image="./images/en/flag.png">English</option>
        </select>
    </form>
    <img src="images/<?php echo $idiomaSeleccionado; ?>/flag.png" alt="Imagen de Bienvenida">
    <a href="index.php?lang=<?php echo $idiomaSeleccionado; ?>">Pagina 1</a>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#idiomaSelect').select2({
                templateResult: formatOption,
                templateSelection: formatOption
            });

            function formatOption(option) {
                if (!option.id) return option.text;
                const imgSrc = $(option.element).data('image');
                return $('<span><img src="' + imgSrc + '" class="img-flag" /> ' + option.text + '</span>');
            }
        });
    </script>
</body>

</html>
