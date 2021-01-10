<?php require_once 'header.php' ?>
            <section>
                <div class="container">
                    <div class="services d-flex justify-content-center ">
                    <?php for($i=0; $i< count($service); $i++) { ?>
                        <div class=" col-lg-4">
                            <a href="#">
                                <div class="service">
                                   <img src="<?= $service[$i]['icon']?>" alt="">
                                    <h3><?= $service[$i]['basliq']?></h3>
                                    <p><?= $service[$i]['aciqlama']?></hp>
                                </div>
                            </a>
                        </div>

                    <?php } ?>
                    </div>
                </div>
            </section>
            <?php require_once 'footer.php' ?>