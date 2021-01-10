<?php require_once "header.php";
require_once "nav.php"; require_once "../settings/code/training.php"; require_once 'tinymce.php';


?>

<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Redaktə Et</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <!-- row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                 <form class="mt-4" method="POST" action="#" enctype="multipart/form-data">  
                        <input type="hidden" name="id" value="<?= $trainingdata['id']?>" >                       
                         <input type="hidden" name="oldimg" id="oldimg" value="../../<?= $trainingdata['sekil']?>" />

                            <div class="form-group">
                                <label for="description">Şəkil</label> <br />
                                <img height="65" width="80px" src="../../<?= $trainingdata['sekil']?>" alt="" />
                            </div>
                            
                            <div class="form-group">
                            <label for="kateqori">Kateqoriya (*)</label>
                                <select name="kateqori" class="form-control" id="kateqori">
                                <option selected hidden value="<?= $trainingdata['kateqoriya']?>"><?= $trainingdata['kateqoriya']?></option>
                                <option value="Proqramlaşdırma" >Proqramlaşdırma</option>
                                <option value="Dizayn Kursları">Dizayn Kursları</option>
                                <option value="Ofis Proqramları">Ofis Proqramları</option>
                                <option value="Sistem və Şəbəkə" >Sistem və Şəbəkə</option>
                                <option value="Web Marketing ">Web Marketing </option>

                     </select>
                     
                    </div>
                            <div class="form-group">
                                <label for="adi">Adı</label>
                                <input type="text" value="<?= $trainingdata['adi']?>" class="form-control" name="adi" id="adi">
                            </div>
                           
                            <div class="form-group">
                                <label for="mezmun">Məzmun(Haqqında)</label>
                                <textarea class="form-control txtarea" value="<?=$trainingdata['mezmun']?>"  name="mezmun" id="mezmun" cols="30" rows="10"><?=$trainingdata['mezmun']?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="mezmun1">Məzmun(Tədris)</label>
                                <textarea class="form-control txtarea" value="<?=$trainingdata['mezmun1']?>"  name="mezmun1" id="mezmun1" cols="30" rows="10"><?=$trainingdata['mezmun1']?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="vaxt">Müddət</label>
                                <input type="text" value="<?= $trainingdata['vaxt']?>" class="form-control" name="vaxt" id="vaxt">
                            </div>  
                            <div class="form-group">
                                <label for="qiymet">Qiymət</label>
                                <input type="text" value="<?= $trainingdata['qiymet']?>" class="form-control" name="qiymet" id="qiymet">
                            </div>
                          
                            <div class="form-group">
                                <label>Şəkil (Dəyişmək üçün seçim edin)</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Yüklə</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="sekil" class="custom-file-input" id="sekil">
                                        <label class="custom-file-label" for="sekil">Fayl seç</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary"   name="edit" >Redaktə Et</button>
                        </form> 
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<?php require_once "footer.php";  ?>