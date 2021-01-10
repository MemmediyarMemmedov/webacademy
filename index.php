<?php require_once 'header.php';
?>
<div class="slider"><div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?=$setting['slide1']?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?=$setting['slide2']?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div></div>
<section class="training">
                <div class="container">
                    <div class="telim  d-flex justify-content-center ">
                    <?php foreach ($training as $trng) { ?>
                        <div class="card home col-lg-3 ">
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