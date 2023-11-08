<?php

if(isset($_GET['idk'])){
    if ($_GET['idk'] == "es") {
        require_once 'index.php';
    }elseif ($_GET['idk'] == "en") {
        require_once 'en/index.php';
    }elseif ($_GET['idk'] == "it") {
        require_once 'ita/index.php';
    }
}

?>