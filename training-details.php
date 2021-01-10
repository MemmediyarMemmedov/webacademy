<?php require_once 'header.php';
require_once 'admin/settings/code/training.php'
?>

<section>
<div class = 'container'>
<div class = 'row details '>
<div class = 'col-lg-12'>

<div class = 'img'>
<img src = "<?=$training['sekil']?>"   alt = ''>
</div>
<div class = 'training_details'>
   <ul>
        <li class ='haq active' >Haqqında</li>
         <li class = 'ted'>Tədris</li>
      <li class="login">Qeydiyyat</li>

  </ul>

<div class = 'tr_mezmun'>
<?= $training['mezmun']?>
</div>
<div class = 'tr_mezmun1'>
<?= $training['mezmun1']?>
<?= $training['adi']?> kursunun tədris proqramını <a href="<?= $training['link']?>" download="<?=$training['adi']?>"> 
 <span style="color: yellow ;" >buradan </span> </a>yükləyə bilərsiniz.
</div>
<div class="form-group register">
<form  class="needs-validation" novalidate method="POST" action="#"  >
  <div class="mb-3 ">
    <label for="adsoyad"  class="form-label">Ad Soyad (*)</label>
    <input type="text" class="form-control" id="adsoyad" name="adsoyad" required >
    <div class="invalid-feedback">
        Adınızı daxil edin
      </div>
  </div>
  <div class="mb-3">
    <label for="tevellud" class="form-label">Təvəllüd (*)  </label>
    <input type="date" class="form-control" required  min="1990-01-01"  max="2010-12-31" id="tevellud" name="tevellud">
    <div class="invalid-feedback">
      Təvəllüdünüzü daxil edin
      </div>
  </div>
<div class="mb-3">
<select class="form-select" name="cinsi" required>
  <option value="" selected disabled>Cinsi(*)</option>
  <option value="Kişi">Kişi</option>
  <option value="Qadın">Qadın</option>
</select>
<div class="invalid-feedback">
      Cinsinizi daxil edin
      </div>
</div>
<div class="mb-3">
    <label for="tel" class="form-label">Telefon (*)</label>
    <input type="text" class="form-control" id="tel" name="tel" required="required" >
    <div class="invalid-feedback">
       Telefon nömrənizi  daxil edin
      </div>
  </div>
  <div class="mb-3">
    <label for="email"  class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
    <div class="invalid-feedback">
      Düzgün email daxil edin:Məs:example@gmail.com
      </div>
  </div>
 <div class="mb-3">
 <select class="form-select" required  name="kurs" aria-label="Default select example">
   <option value="" disabled>Kurs (*)</option>
  <option value="<?=$training['adi']?>" hidden selected><?=$training['adi']?></option>
  <option value="C#">C#</option>
  <option value="Java SE">Java SE</option>
  <option value="Java SE">Java SE</option>
  <option value="Java ME">Java ME</option>
  <option value="Pyhton">Pyhton</option>
  <option value="C++">C++</option>
  <option value="Javascript">Javascript</option>
  <option value="Front end Developer">Front end Developer</option>
  <option value="Back end Developer">Back end Developer</option>
  <option value="Full Stack Developer">Full Stack Developer</option>
  <option value="Oracle">Oracle</option>

</select>
 </div>
 
<div class="mb-3">
<button name="qeydiyyat" type="submit" value="submit" class="btn btn-primary">Göndər</button>

</div></form>

</div>									</div>

</div>
</div>
</div>
</section>
<!-- Blog Details Area End -->

<?php require_once 'footer.php'?>