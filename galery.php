

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./styles/photos.css" />
    <link rel="stylesheet" href="./styles/index.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <title>php</title>
</head>


<?php
    include 'navigate.php'; 
  ?>
<body>

    <span class="linea"></span>
    <section class="galeria">
        <a href="#image1">
            <img src="./img/Galeria/baja/2022ljubljana.jpg">
        </a>
        <a href="#image2">
            <img src="./img/Galeria/baja/DSC03852.jpg">
        </a>
        <a href="#image3">
            <img src="./img/Galeria/baja/Maromas-Calin Muresan-33.JPG">
        </a>
        <a href="#image4">
            <img src="./img/Galeria/baja/2023_01_06_Festungsvariete_0256.jpg">
        </a>
        <a href="#image5">
            <img src="./img/Galeria/baja/FB_IMG_1679357167242.jpg">
        </a>
        <a href="#image6">
            <img src="./img/Galeria/baja/FB_IMG_1679357186722.jpg">
        </a>
        <a href="#image7">
            <img src="./img/Galeria/baja/FB_IMG_1687629702008.jpg">
        </a>
        <a href="#image8">
            <img src="./img/Galeria/baja/4_gallery.jpg">
        </a>

    </section>

    <?php
    // Arreglo con la información de las imágenes (puedes modificarlo según tus necesidades)
    $currentArticleID = 1;

    // Get the list of all articles
    $images = [
        [
            'id' => 1,
            'image' => './img/Galeria/alta/2022ljubljana.jpg',
        ],
        [
            'id' => 2,
            'image' => './img/Galeria/alta/DSC03852.jpg',
        ],
        [
            'id' => 3,
            'image' => './img/Galeria/alta/Maromas-Calin Muresan-33.JPG',
        ],
        [
            'id' => 4,
            'image' => './img/Galeria/alta/2023_01_06_Festungsvariete_0256.jpg',
        ],
        [
            'id' => 5,
            'image' => './img/Galeria/alta/FB_IMG_1679357167242.jpg',
        ],
        [
            'id' => 6,
            'image' => './img/Galeria/alta/FB_IMG_1679357186722.jpg',
        ],
        [
            'id' => 7,
            'image' => './img/Galeria/alta/FB_IMG_1687629702008.jpg',
        ],
        [
            'id' => 8,
            'image' => './img/Galeria/alta/4_gallery.jpg',
        ],

    ];

    $totalImages = count($images);

    for ($i = 0; $i < $totalImages; $i++) {
        $image = $images[$i];
        $currentID = $image['id'];
        $prevID = ($currentID - 2 + $totalImages) % $totalImages + 1;
        $nextID = $currentID % $totalImages + 1;

        echo '<article class="light-box" id="image' . $currentID . '">';
        echo '<a href="#image' . $prevID . '" class="prev"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="rgb(248, 107, 13)" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">';
        echo '<path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>';
        echo '</svg></a>';
        echo '<img src="' . $image['image'] . '">';
        echo '<a href="#image' . $nextID . '" class="next"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="rgb(248, 107, 13)" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">';
        echo '<path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z"/>';
        echo '</svg></a>';
        echo '<a href="#" class="close">X</a>';
        echo '</article>';
    }
    ?>
    <?php
    include './footer.php';
    ?>

</body>

</html>