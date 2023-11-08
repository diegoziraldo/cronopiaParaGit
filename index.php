<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./styles/index.css" />
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="icon" href="./img/logoCirculo.jpg" type="image/jpg">
  
  <title>Cronopia contorsiones</title>
</head>

<body>

  <div class="slider-container">
    
    <?php

      include './navigate.php';


    ?>

    <img class="slider-image active" src="./img/1_Principal1.jpg" alt="Imagen 1" />
    <img class="slider-image" src="./img/1_Principal2.jpg" alt="Imagen 2" />
    <img class="slider-image" src="./img/1_Principal3.JPG" alt="Imagen 3" />

    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">';
      <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z" />';
    </svg>



    <div class="slider-nav">
      <a id="prevButton">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="rgba(255, 0, 0, 0.3)" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">';
          <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z" />';
        </svg>
      </a>
      <a id="nextButton">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="rgba(255, 0, 0, 0.3)" class="bi bi-arrow-right-square-fill" viewBox="0 0 16 16">';

          <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z" />';

        </svg>
      </a>
    </div>
  </div>


  

  <script src="js/index.js"></script>
</body>

</html>