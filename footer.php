

    <footer>
    <div class="row">
          
                <div class="footer  ">
                    <div class="footer_menu col-lg-2">
                     
                        <ul>
                        <h3 >Menu</h3>
                            <li><a href="index.php">Əsas Səhifə</a></li>
                            <li><a href="training.php">Təlimlər</a></li>
                            <li><a href="services.php">Xidmətlər</a></li>
                            <li><a href="portofilo.php">Portfolio</a></li>

                            <li><a href="about.php">Haqqında</a></li>
                            <li><a href="blog.php">Blog</a></li>

                            <li><a href="contact.php">Əlaqə</a></li>


                        </ul>
                    </div>
                
                 
           
                    <div class="foot_cntct ">
                      
                        <div class="sos">
                            <ul>
                                  <h3>Əlaqə</h3>
                                <li><i class="fas fa-house-user "></i><span> <?= $setting['unvan'] ?> </span></li>
                                <li class="mobil"><i class="fas fa-mobile"></i> <span> <?= $setting['mobil'] ?></span></li>
                                <li><i class="fas fa-envelope"></i></i><span> <?= $setting['email'] ?> </span></li>
                            </ul>
                        </div>

                        <div class="social">
                            <a href="<?= $setting['instagram'] ?>" title="İnstagram"><i class="fab fa-instagram"></i></a>
                            <a href="<?= $setting['facebook'] ?>" title="Faceebook"><i class="fab fa-facebook-f"></i></a>

                        </div>
                    </div>
                </div>
        
                <div class="copy">
                    <p>  © Web Academy <?= date("Y") == "2020" ? "2020" : "2020 - " . date("Y") ?></p>
                </div>
            </footer>
            
            <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/formvalidation/0.6.2-dev/js/formValidation.min.js" integrity="sha512-DlXWqMPKer3hZZMFub5hMTfj9aMQTNDrf0P21WESBefJSwvJguz97HB007VuOEecCApSMf5SY7A7LkQwfGyVfg==" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
            <script src='https://www.google.com/recaptcha/api.js'></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.js"></script>
            <script src="assets/mixitup.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.0/mixitup.min.js"></script>         
               <script src="assets/script.js"></script>
           <script>
       
 
const currentLocation = location.href;
const menuItem = document.querySelectorAll('a');
const menuLength = menuItem.length;
for (let i = 0; i < menuItem.length; i++) {
    if (menuItem[i].href === currentLocation) {
        menuItem[i].className = 'active'
    }

}            </script>
          <script src="//code.tidio.co/jslvrabjcyazgls1gwdiyq4doiuxszxo.js" async></script>
     
           <!--Start of Tawk.to Script
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5fd63869a8a254155ab2e817/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
End of Tawk.to Script-->
         
        </body>

</html>