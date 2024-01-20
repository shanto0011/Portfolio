<?php

require_once "vendor/autoload.php";

use App\classes\Body;
use App\classes\Footer;
use App\classes\Header;
//use App\classes\ImageDownloader;


if (isset($_GET['page'])) {
    $headr = new Header();

    if ($_GET['page'] == "home") {
        $home = new Body();
    }else {

        header("Location: route.php?page=home");
        exit();
    }
    

    $footr = new Footer();
} else {
    header("Location: route.php?page=home");
    exit();
}
