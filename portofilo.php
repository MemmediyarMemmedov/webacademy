
<?php require_once 'header.php' ?>
<section>
<div class="row portfolio ">
                    <div class="col-lg-12 ">
                        <div  class="project-gallery-filter d-flex justify-content-center">
                            <ul class="project-gallery-menu d-inline-block wow fadeInUp" data-wow-delay="0.3s">
                                <li class="filter active" data-filter="all">Bütün kateqoriyalar</li>
                                <?php for($i=0; $i <count($portfoliokateqoriya) ; $i++) {  ?>
                                <li class="filter" data-filter=".<?=$General->SEO($portfoliokateqoriya[$i])?>"><?=$portfoliokateqoriya[$i]?></li>
                                <?php }?>
                            </ul>
                        </div>
                        <div class="row category project-gallery-item">
                            <?php for($i=0; $i <count($portfolio) ; $i++) {  ?>
                            <div class="mix  col-md-6 col-lg-4 gallery-item   <?=$General->SEO($portfolio[$i]['kateqoriya'])?>">
                                <div class="gallery-item-content wow fadeInUp">
                                    <div class="item-thumbnail">
                                        <img src="<?=$portfolio[$i]['sekil']?>" width="120" height="250" alt="">
                                        <div class="content-overlay">
                                            <div class="content">
                                                <div class="links">
                                                    <a href="<?=$portfolio[$i]['link']?>" target="_blank" class="link"><i
                                                            class="fas fa-link"></i></a>
                                                    <a class="img-popup image-preview"
                                                        href="<?=$portfolio[$i]['sekil']?>">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>



                        </div>
                    </div>
                </div>
               
            </div>
        </div>
        </section>
        <?php require_once 'footer.php' ?>