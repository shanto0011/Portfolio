<?php

namespace App\classes;

use App\data\HeaderData;
use App\classes\ImageDownloader;



class Header
{
  function __construct()
  {
    $this->index();
  }
  

  function index()
  {
    
    if(isset($_GET['download'])){
      $image = new ImageDownloader();
    }
    
    $navInfo = new HeaderData();
    $navData = $navInfo->returnNavData();
    $headerData = $navInfo->returnHeaderData();
    $headerImgData = $navInfo->returnImgData();
    include  "./pages/header.php";
  }
}
