<footer id="Foot">
    <div class="container-fluid footer-cus">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <h1>
                        SHANTA
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <div class="row cus-padding-footer">
                        <?php
                        foreach ($footerData as $innerArray) {
                            if (is_array($innerArray)) {
                        ?>
                                <div class="col-md-3 col-sm-3 cus-column">
                                    <ul class="nav flex-column ">
                                        <?php
                                        foreach ($innerArray as $key => $value) {
                                            if (is_array($value)) {
                                                //print_r($value);

                                                if ($key == "icon") {
                                        ?>
                                                    <ul class="nav flex-row">
                                                        <?php
                                                        foreach ($value as $value1) {

                                                        ?>
                                                            <li>
                                                                <div class="p-1">

                                                                    <a href="<?php echo $value1[0] ?> " target="_blank"><i class="<?php echo $value1[1] ?> "></i></a>
                                                                </div>
                                                            </li>
                                                        <?php
                                                        }
                                                        ?>
                                                    </ul>
                                                    <?php
                                                    //
                                                } else {
                                                    if ($key == 0) {
                                                    ?>
                                                        <li>
                                                            <h4>
                                                                <a href="<?php echo $value[0] ?> " target="_blank"><?php echo $value[1] ?></a>

                                                            </h4>
                                                        </li>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <li>
                                                            <h6>
                                                                <a href="<?php echo $value[0] ?> " target="_blank"><?php echo $value[1] ?></a>

                                                            </h6>
                                                        </li>
                                                    <?php
                                                    }
                                                }
                                            } else {
                                                if ($key == 0) {
                                                    ?>
                                                    <li>
                                                        <h4>
                                                            <?php echo $value ?>
                                                        </h4>
                                                    </li>
                                                <?php
                                                } else {
                                                ?>
                                                    <li>
                                                        <h6>
                                                            <?php echo $value ?>
                                                        </h6>
                                                    </li>
                                        <?php
                                                }
                                            }
                                        }
                                        ?>
                                    </ul>
                                </div>
                        <?php
                            } else {
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>
<script>
    
    var mybutton = document.getElementById("scrollToTopBtn");

    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    
    function scrollToTop() {
        document.body.scrollTop = 0; 
        document.documentElement.scrollTop = 0;
    }
</script>
</body>

</html>