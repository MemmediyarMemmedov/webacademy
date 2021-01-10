<?php require_once 'header.php' ?>
            <section>
                <div class="container">
                    <div class="blog d-flex justify-content-center">       
                <?php foreach ($blog as $blg) { ?>      
                  <div class=" blogs col-lg-3 " >
                            <a href="#">
                                <div class="blog_img">
                                   <img src="<?=$blg['sekil']?>" height="250px"  width="100%" alt="blog">
                                   </a>
                                   <span><i class="far fa-clock"></i><?=$General->DateFunct($blg['tarix'])." ".date('H:i') ?></span>
                                    <h3><?=substr($blg['basliq'],0,25).'...'?> </h3>
                                   
                                    <p><?=substr($blg['mezmun'],0,220).'...'?></p>
                                   

                                </div>
                            
                            <a href="blog-<?=$General->SEO($blg['basliq']).'-'.$blg['id'] ?>"><button class="blog_btn btn-outline-info btn-lg">Ətraflı</button></a>
                        </div>

             <?php } ?>
                    </div>
                </div>
                <button id="loadMore">Daha Çox <i class="fas fa-angle-down"></i> </button>
                <button id="loadlees">Daha az <i class="fas fa-angle-up"></i></button>


            </section>
            <?php require_once 'footer.php' ?>