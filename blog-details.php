<?php require_once "header.php";
?>
				
				<!-- Blog Details Area Start -->
				<section>
					<div class="container">
						<div class="row blog-details">
							<div class="col-lg-12">
							
									<div class="img">
										<img src="img/blogs/blog-img.jpg"  alt="">
									</div>
									<div class="content">
								
											<h4 class="title">
											<?=$blg['basliq']?>
											</h4>
										
										<div class="text-area">
											<p>
											<?=$blg['mezmun']?></p>
					
										</div>
										<span><i class="far fa-clock"></i><?=$General->DateFunct($blg['tarix'])." ".date('H:i')?></span>
									</div>
<hr/>
<div class="blg-sosial">
                            <a href="<?= $setting['instagram'] ?>" title="İnstagram"><i class="fab fa-instagram"></i></a>
                            <a href="<?= $setting['facebook'] ?>" title="Faceebook"><i class="fab fa-facebook-f"></i></a>

                        </div>
								</div>
						</div>
					</div>
				</section>
				<!-- Blog Details Area End -->

	
<?php require_once "footer.php"?>