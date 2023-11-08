<?php
    include 'config.php';

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./styles/index.css" />
    <link rel="stylesheet" href="./styles/tour.css" />
    <link rel="stylesheet" href="./styles/stylesTimeline.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body>
    <?php
    include './navigate.php';


    ?>

<div class="photo"></div>

</div>

<section class="timeline">
        <ul>
        <li>
            <div>
              <time><h2><b><?php echo $textosShow['tituloFestival']; ?></b></h2></time>
            </div>
          </li>
            <li>
                <div>
                <time><b>2023</b></time>
                <?php 
                    for($i = 0; $i <= count($timeline2023); $i++) {
                        // Accede a cada elemento del array utilizando el índice $i
                        echo $timeline2023[$i].'<br>';
                    } 
                ?> <br>
            </li>
          <li>
            <div>
              <time>2022</time> 
              <?php 
                    for($i = 0; $i <= count($timeline2022); $i++) {
                        // Accede a cada elemento del array utilizando el índice $i
                        echo $timeline2022[$i].'<br>';
                    } 
                ?> <br>
            </div>
          </li>
          <li>
            <div>
              <time>2020 - 2021</time>
              <?php 
                    for($i = 0; $i <= count($timeline20212020); $i++) {
                        // Accede a cada elemento del array utilizando el índice $i
                        echo $timeline20212020[$i].'<br>';
                    } 
                ?> <br>
            </div>
          </li>
          <li>
            <div>
            <time>2019</time>
            <?php 
                for($i = 0; $i <= count($timeline2019); $i++) {
                    // Accede a cada elemento del array utilizando el índice $i
                    echo $timeline2019[$i].'<br>';
                    } 
                ?> <br>
            </div>
          </li>
          <li>
            <div>
              <time>2018</time>
              <?php 
                for($i = 0; $i <= count($timeline2018); $i++) {
                    // Accede a cada elemento del array utilizando el índice $i
                    echo $timeline2018[$i].'<br>';
                    } 
                ?> <br>
            </div>
          </li>
          <li>
            <div>
              <time>2017</time> 
              <?php 
                for($i = 0; $i <= count($timeline2017); $i++) {
                    // Accede a cada elemento del array utilizando el índice $i
                    echo $timeline2017[$i].'<br>';
                    } 
                ?> <br>
            </div>
          </li>
          <li>
            <div>
              <time>2016</time> 
              <?php 
                for($i = 0; $i <= count($timeline2016); $i++) {
                    // Accede a cada elemento del array utilizando el índice $i
                    echo $timeline2016[$i].'<br>';
                    } 
                ?> <br>
            </div>
          </li>
          <li>
            <div>
              <time>2015</time> 
              <?php 
                for($i = 0; $i <= count($timeline2015); $i++) {
                    // Accede a cada elemento del array utilizando el índice $i
                    echo $timeline2015[$i].'<br>';
                    } 
                ?> <br>
            </div>
          </li>
          <li>
            <div>
              <time>2010 - 2014</time> 
              <?php 
                for($i = 0; $i <= count($timeline20142010); $i++) {
                    // Accede a cada elemento del array utilizando el índice $i
                    echo $timeline20142010[$i].'<br>';
                    } 
                ?> <br>
            </div>
          </li>
        </ul>
      </section>



      <script src="./js/indexTimeline.js"></script>

      <?php
    include './footer.php';
    ?>
</body>




</html>