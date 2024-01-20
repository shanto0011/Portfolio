<?php

namespace App\classes;


class ImageDownloader
{



  function __construct()
  {
    $this->downloadIamge();
  }

  function downloadIamge()
  {
    $pathIg = "F:/BITM/Xampp/htdocs/shanto portfolio/app/files/shanta_cv.pdf";
    if (file_exists($pathIg)) {
      header('Content-Type: application/pdf');
      header('Content-Disposition: attachment; filename="shant_cv.pdf"');
      header('Cache-Control: private, max-age=0, must-revalidate');
      header('Pragma: public');
      header('Content-Length: ' . filesize('F:/BITM/Xampp/htdocs/shanto portfolio/app/files/shanta_cv.pdf'));

      // Output the PDF to the browser
      readfile('F:/BITM/Xampp/htdocs/shanto portfolio/app/files/shanta_cv.pdf');
    } else {
      $pathIg = "file not exist";
    }
  }
}
