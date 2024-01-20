<?php
require_once "vendor/autoload.php";


function redirectTo(){
    header("Location: route.php");
}

redirectTo();

?>