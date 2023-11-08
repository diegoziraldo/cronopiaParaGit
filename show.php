<?php
require "config.php";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./styles/show.css" />
    <link rel="stylesheet" href="./styles/index.css" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body style="background-color: black">
    <?php
    include './navigate.php';
    ?>



    <div id="parrafoShow">
        <img id="imgShow" src="./img/DSC03852.jpg" alt="">
        <div class="show-content">
            <h3>Cronopia</h3>
            <h4><?php echo $textosShow['TITULO']; ?></h4>
            <p>
                <?php echo $textosShow['CUERPO']; ?>
            </p>
                <br>
                <h4><?php echo $textosShow['FichaTecnica']; ?></h4>
                <b><?php echo $textosShow['DURACION']; ?><br>
                <b><?php echo $textosShow['MONTAJE']; ?></b><br>
                <b><?php echo $textosShow['DESMONTAJE']; ?></b><br><br>
                <h4><?php echo $textosShow['ESPACIO']; ?></h4>
                <b><?php echo $textosShow['ALTURA']; ?></b><br>
                <b><?php echo $textosShow['DIMENSION']; ?></b><br>
            </p>
        </div>
    </div>
    <?php
            include './includes/videosBio/videosBio.php';
            ?>
    <?php
    include './footer.php';
    ?>




</html>