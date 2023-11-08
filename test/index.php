<?php
session_start(); // Iniciar la sesión si aún no está iniciada

if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}
// Obtener el idioma seleccionado
$idiomaSeleccionado = isset($_GET['lang']) ? $_GET['lang'] : 'es';
$traducciones = include('idiomas/' . $idiomaSeleccionado . '.php');
// Obtener la traducción correspondiente
$saludo = $traducciones['saludo'];
$idioma = $traducciones['idioma'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ejemplo de Cambio de Idioma</title>
</head>
<body>
<h1>Pagina 1</h1>
    <h1><?php echo $saludo; ?></h1>

    
    <form action="" method="get">
        <label for="lang"><?php echo $idioma; ?></label>
        <select name="lang" id="idioma" onchange="this.form.submit()">
            <option value="es" <?php if ($idiomaSeleccionado == 'es') echo 'selected'; ?>>Español</option>
            <option value="en" <?php if ($idiomaSeleccionado == 'en') echo 'selected'; ?>>Inglés</option>
            <option value="it" <?php if ($idiomaSeleccionado == 'it') echo 'selected'; ?>>Italiano</option>
        </select>
    </form>
    <img src="images/<?php echo $idiomaSeleccionado; ?>/flag.png" alt="Imagen de Bienvenida">
    <a href="pagina1.php?lang=<?php echo $idiomaSeleccionado; ?>">Pagina 2</a>

</body>
</html>