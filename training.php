<?php require_once 'header.php' ?>
            <section class="training">
                <div class="container">
            <div  class="d-flex justify-content-center">
                            <ul class=" d-inline-block wow fadeInUp" data-wow-delay="0.3s">
                                <li class="kateqori active" data-filter="all">Bütün kateqoriyalar</li>
                                <?php for($i=0; $i <count($trainingkateqoriya) ; $i++) {  ?>
                                <li class="kateqori" data-filter=".<?=$General->SEO($trainingkateqoriya[$i])?>"><?=$trainingkateqoriya[$i]?></li>
                                <?php }?>
                            </ul>
                        </div>
                    <div class=" category telim d-flex justify-content-center ">
                    <?php foreach ($training as $trng) { ?>
                        <div class=" mix card col-lg-3 <?=$General->SEO($trng['kateqoriya'])?>">
                            <img  src="<?=$trng['sekil']?>" height="260px" alt="">
                            <ul>
                                <li><?=$trng['adi']?></li>
                                <li> <i class="far fa-calendar-alt"></i><?=$trng['vaxt']?></li>
                                <li>Aylıq:<?=$trng['qiymet']?></li>

                            </ul>
                            <div class="training_btn">
                                <a href="training-<?=$General->SEO($trng['adi']).'-'.$trng['id'] ?>"> <button class="btn btn-info">Ətraflı</button></a>
                            </div>
                        </div>
                    <?php }?>
                      
                    </div>
                </div>
            </section>
            
            <?php require_once 'footer.php' ?>