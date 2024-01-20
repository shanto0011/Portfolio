<?php

namespace App\classes;

use App\data\BodyData;


class Body
{

  function __construct()
  {
    $this->index();
  }


  function index()
  {
    $myn = new BodyData();
    //$homeDate 
    $rightSecData = $myn->returnRighSectionData();
    $eduData = $myn->returnEducationData();
    $crdVideoData = $myn->returnCardInfoVideoData();
    $crdVideo2Data = $myn->returnCardInfoVideo2Data();
    $caroslImg = $myn->returnCarouselImgData();
    $abotData = $myn->returnAboutData();
    $contactData = $myn->returncontactDataData();
    $srvsData = $myn->returnServiceItemData();

    include  "./pages/body.php";
    // print_r($mainPageD);

  }
}
