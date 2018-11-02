<?php

require '../app/Autoloader.php';
\App\Autoloader::register();


if(isset($_GET['page']))
{

    $page = $_GET['page'];
} else {
    $page = 'home';
}


// Initialisation des objets

$db = new App\Database('microframework');


ob_start();

if($page === 'home')
{
    require '../pages/home.php';
} elseif($page === 'article') {

    require '../pages/single.php';
}

$content = ob_get_clean();

require '../pages/templates/default.php';