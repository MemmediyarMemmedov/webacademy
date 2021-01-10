<?php require_once 'header.php' ?>

           

            <section>
                <div class="container">
                    <div class="contact col-lg-12  d-flex justify-content-around   ">
                        <div >

                            <div class="adrress  d-flex  ">
                                <div> <a href="#"><i class="fas fa-map-marker-alt"></i></a>
                                </div>
                                <div>
                                    <h6><?= $setting['unvan'] ?></h6>
                                </div>
                            </div>

                        </div>
                        <div>

                            <div class="tel d-flex">
                                <div>
                                    <a href="#"> <i class="fas fa-phone"></i>
                                    </a>
                                </div>
                                <div><span><?= $setting['mobil'] ?></span></div>
                            </div>

                        </div>

                        <div>

                            <div class="email d-flex">
                                <div>
                                    <a href="#"> <i class="fas fa-envelope"></i>
                                    </a>
                                </div>
                                    <h6><?= $setting['email'] ?></h6>
                               
                            </div>

                        </div>
                    </div>

            </section>
            <div class="container">
                <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12103.071123552014!2d47.09332339215196!3d40.67908531565711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4038c371de4f3bcb%3A0x2a44a3efcbc290cf!2sVarvara%2C%20Az%C9%99rbaycan!5e0!3m2!1saz!2s!4v1600699562696!5m2!1saz!2s"
                        width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
            </div>
            <?php require_once 'footer.php' ?>