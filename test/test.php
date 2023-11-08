<?php
session_start();

if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}

$idiomaSeleccionado = isset($_GET['lang']) ? $_GET['lang'] : 'es';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #idiomaSelect {
            display: none;
        }

        .custom-select {
            display: inline-block;
            position: relative;
            cursor: pointer;
        }

        .custom-select:after {
            content: '';
            display: block;
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            width: 16px;
            height: 16px;
            background-size: cover;
            background-position: center;
        }

        .custom-select[data-value="es"]:after {
            background-image: url('./images/es/flag.png');
        }

        .custom-select[data-value="en"]:after {
            background-image: url('./images/en/flag.png');
        }
    </style>
</head>
<body>
    <div class="custom-select" data-value="<?php echo $idiomaSeleccionado; ?>">
        <select name="idioma" id="idiomaSelect">
            <option value="es">hola</option>
            <option value="en">hola</option>
            <!-- Agrega más opciones según sea necesario -->
        </select>
    </div>
</body>
</html>
