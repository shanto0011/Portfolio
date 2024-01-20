<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Shanta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css" integrity="sha512-cHxvm20nkjOUySu7jdwiUxgGy11vuVPE9YeK89geLMLMMEOcKFyS2i+8wo0FOwyQO/bL8Bvq1KMsqK4bbOsPnA==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <style type="text/css">
        .header-portion {
            background: rgba(190, 197, 179, 0.25);
            height: 535px;
            width: 100%;
            box-shadow: 7px 5px 12px #888888;
            position: absolute;
            margin-top: -115px;
            border-radius: 0 0 0 85px;
            transform: skew(0, 6deg);
        }

        .cus_left {
            text-align: left;
            margin-left: 3px;
        }



        .remove-skew {
            transform: skew(0, -6deg);
            margin-top: 135px;
            padding-right: 0px !important;
            position: sticky;
            color: rgb(78, 74, 74);
        }

        .header-text-portion {
            padding-top: 50px;
        }

        img.imgHome {
            float: right;
            height: 450px;
            width: 100%;
            margin: -58px 0 0px 0;
            border-radius: 0 0 0 85px;
            transform: skew(0, 6deg);
        }

        .skew-content-padding {
            padding: 20% 30%;
        }

        img.right-img {
            float: right;
            height: 450px;
            width: 100%;
            border-radius: 85px 0 0 0;
            transform: rotateX(35deg);
        }

        .cus-padding-footer {
            padding-top: 50px;
        }

        .footer-cus {
            width: 100%;
            background-color: rgb(161, 165, 141);
            margin-top: 75px;
            padding-top: 50px;
            border-radius: 15px 15px 0px 0px;
        }

        .btn {
            background-color: rgba(115, 205, 221, 0.25);
            color: black
        }

        .btn:hover {
            color: white;
            background-color: #b2b438;
        }

        .secOne {
            height: 150px;
            background-color: rgb(79, 71, 80);
            position: relative;
            border-radius: 0 68px 0 0;
            box-shadow: 3px 8px 7px #888888;
            margin-top: 500px;
            transform: skew(0, 6deg);
        }

        .secTwo {
            height: 400px;
            background-color: rgb(79, 71, 80);
            position: relative;
            margin-top: -50px;
            box-shadow: 3px 8px 7px #888888;
            align-items: center;
            text-align: center;
            color: #e9ecef;
        }

        .sec-right1 {
            height: 400px;
            position: relative;
            border-radius: 68px 0 0 0;
            box-shadow: 3px 8px 7px #888888;
            margin-top: 100px;
            transform: skew(0, -6deg);
            background-image: url("https://raw.githubusercontent.com/shanto0011/storage_p/main/shanto.png");
            background-size: 100% 385px;
        }

        .sec-right2 {
            height: 75px;
            background-color: rgb(79, 71, 80);
            position: relative;
            margin-top: -50px;
            box-shadow: -1px -1px -1px #888888;
            align-items: center;
            text-align: center;
            color: #e9ecef;
        }
     

        .overflow-hidden-info {
            max-height: 60px;
            overflow-y: auto;
        }

       

        .sec-left {
            height: 450px;
            position: relative;
            margin-top: 175px;
            padding: auto;
            align-items: center;
            text-align: center;
        }

        .cus-sec-right {
            text-align: left;
        }

        .cus-container-card {
            padding-top: 25px;
        }

        .skew-beside {
            height: 450px;
            position: relative;
            margin-top: 650px;
            align-items: center;
            text-align: center;
        }

        .cus-icon-text-content {
            padding-bottom: 10px;
            line-height: 0cm;
        }

        .cus-sec-right h6 {
            line-height: 0.2cm;
        }

        .cus-icon {
            vertical-align: middle;
            height: 50px;
            width: 50px;
            background-color: aquamarine;
            border-radius: 50%;
            text-align: left;
            padding-top: 15px;
        }

        .container-fluid {
            padding-right: 0px !important;
        }

        .row .container-fluid {
            padding-right: 0px !important;
        }

        .row {
            margin-right: 0px !important;
            padding-right: 0px !important;
        }

        .row>* {
            margin-right: 0px !important;
            padding-right: 0px !important;
        }

        .card-img-top {
            position: absolute;
            top: -30px;
            left: 50%;
            margin-left: -30px;
            width: 60px !important;
            height: 60px;
        }

        .card {
            margin-top: 30px;
            padding-top: 30px;
            padding-bottom: 10px;
        }

        .cont {
            background-color: rgba(190, 197, 179, 0.25);
        }

        #review {
            margin-top: 30px;
        }

        #service {
            margin-top: 30px;
        }

        a {
            color: black;
        }

        a:link {
            text-decoration: none;
            color: black;
        }

        .cards {
            margin-bottom: 25px;
            transition: all 0.2s ease;
            cursor: pointer;
        }

        .cards:hover {
            box-shadow: 5px 6px 6px 2px #e9ecef;
            transform: scale(1.1);
        }

        #scrollToTopBtn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            display: none;
            background-color: #007bff;
            ;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
            z-index: 99;
        }

        .hover-message {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            z-index: 1;
        }


        .msgC {
            position: relative;
        }


        .msgC:hover .hover-message {
            display: block;
        }

        @media screen and (max-width: 995px) and (min-width: 480px) {
            .cus-column {
                width: 50%;
                padding-bottom: 10px;
            }
        }

        @media screen and (max-width: 768px) and (min-width: 480px) {
            .sec-right2 {
                height: 100px;
                margin-top: -60px;
            }
        }

        @media screen and (max-width: 397px) {
            .header-text-portion {
                display: none;
            }
        }

        @media screen and (max-width: 830px) and (min-width: 615px) {
            .skew-content-padding {
                padding: 0px 0px;
                display: d-flex;
                align-items: center;
                align-content: center;
            }
        }

        @media screen and (min-width: 767px) {
            .collapse:not(.show) {
                display: block;
            }
        }

        @media screen and (max-width: 767px) {
            .skew-beside {
                margin-top: 50px;
            }
        }
    </style>

</head>

<body>
    <button id="scrollToTopBtn" onclick="scrollToTop()">^</button>
    <header>
        <section class="header-portion" id="Head">
            <div class="container-fluid remove-skew">
                <div class="row ">
                    <div class="col-9 ">
                        <div class="container ">
                            <div class="row ">
                                <div class="col-2"></div>
                                <div class="col-10">
                                    <nav class="navbar navbar-expand-md ">
                                        <div class="container"><a class="navbar-brand" href="route.php?page=home">SHANTA MIA</a><button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                                <ul class="navbar-nav mx-auto">
                                                    <?php
                                                    foreach ($navData as $key => $value) {
                                                        if (is_array($value[0])) {
                                                    ?>
                                                            <li class="nav-item dropdown ">
                                                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $key ?>
                                                                </a>
                                                                <ul class="dropdown-menu bg-warning">

                                                                    <?php
                                                                    foreach ($value as  $drowpValue) {
                                                                    ?>

                                                                        <li>
                                                                            <a class="dropdown-item" href="<?php echo $drowpValue[1] ?>"><?php echo $drowpValue[0] ?></a>
                                                                        </li>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </ul>
                                                            </li>
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <li class="nav-item">
                                                                <a class="nav-link active" aria-current="page" href="<?php echo $value[1] ?>"><?php echo $value[0]  ?></a>
                                                            </li>
                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                            <section class="collapse show" id="navbarNavDropdown">
                                <div class=" row header-text-portion">
                                    <div class="col-3">
                                    </div>
                                    <div class="col-5">
                                        <ul class="nav flex-column ">
                                            <li>
                                                <h4>
                                                    <?php echo $headerData[0] ?>
                                                </h4>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-4">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">

                                    </div>
                                    <div class="col-6">

                                        <ul class="nav flex-column ">
                                            <li>
                                                <h6>
                                                    <?php echo $headerData[1] ?>
                                                </h6>
                                            </li>

                                        </ul>
                                    </div>
                                    <div class="col-3">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-3">

                                    </div>
                                    <div class="col-6 ">
                                        <a href="https://github.com/shanto0011/storage/blob/main/shanta_CV.pdf" target="_thapa" class="msgC">
                                            <button type="button" class="btn btn-primary"><?php echo $headerData[2] ?></button>
                                            <div class="hover-message">Permitted Person Can Access </div>
                                        </a>
                                    </div>
                                    <div class="col-3">

                                    </div>
                                </div>
                            </section>
                        </div>

                    </div>
                    <div class="col-3 container-fluid">
                        <section class="imgSection">
                            <img src="<?php echo $headerImgData ?>" alt="img" class="imgHome ">
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </header>
    </section>