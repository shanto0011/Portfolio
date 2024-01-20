<?php

namespace App\classes;

use App\data\FooterData;

class Footer
{

    function __construct()
    {
        $this->index();
    }


    function index()
    {
        $footr_data = new FooterData();
        $footerData = $footr_data->ReturnData();
        include  "./pages/footer.php";
        //print_r($footer);
    }
}
