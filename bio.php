<?php
require "config.php";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./styles/index.css" />
    <link rel="stylesheet" href="./styles/bio.css" />
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

    <div class="container-fluid">
        <div class="paragraph">
            <div class="photo">
                <!-- Aquí puedes colocar la foto -->
                <!-- <img src="img/Bio/2 BIO.jpg" alt="Foto" style="max-width: 100%; max-height: 100%;"> -->
            </div>


            <div id="parrafoBio">
                <img id="imgBio" src="./img/6_Contacto.jpg" alt="">
                <div class="bio-content">
                    <h3>Cronopia</h3>
                    <p><?php echo $textosBio['CUERPO']; ?></p>
                </div>
            </div>
        </div>
    </div>
    <?php
    include './footer.php';
    ?>
</html>