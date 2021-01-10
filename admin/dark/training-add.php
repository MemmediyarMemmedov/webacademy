
<?php require_once "header.php";
require_once "nav.php";
require_once "../settings/code/training.php";
require_once 'tinymce.php'; ?>
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
                <h4 class="text-themecolor">Təlim Əlavə</h4>
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
                        <form  class="mt-4" method="POST" action="#" enctype="multipart/form-data">
                        <div class="form-group">
                                <label for="kateqori">Kateqoriya (*)</label>
                                <select name="kateqori"  class="form-control" id="kateqori">
                                <option>Proqramlaşdırma</option>
                                <option>Dizayn Kursları</option>
                                <option >Ofis Proqramları</option>
                                <option >Sistem və Şəbəkə</option>
                                <option >Web Marketing </option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="adi">Adı</label>
                                <input type="text" name="adi" id="adi"  class="form-control" required="required" />
                            </div>
                            <div class="form-group">
                                <label for="mezmun">Məzmun(Haqqında)</label>
                                <textarea class="form-control txtarea"  name="mezmun" id="mezmun" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="mezmun1">Məzmun(Tədris)</label>
                                <textarea class="form-control txtarea"  name="mezmun1" id="mezmun1" cols="30" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="vaxt">Müddət</label>
                                <input type="text" name="vaxt" id="vaxt"  class="form-control" required="required" />
                            </div> <div class="form-group">
                                <label for="qiymet">Qiymət</label>
                                <input type="text" name="qiymet" id="qiymet"  class="form-control" required="required" />
                            </div>
                            <div class="form-group">
                                <label for="link">Link</label>
                                <input type="file" name="link" id="link"  class="form-control" required="required" />
                            </div>
                            <div class="form-group">
                                <label>Şəkil</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Yüklə</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="sekil" required="required" class="custom-file-input" id="sekil">
                                        <label class="custom-file-label" for="sekil">Fayl seç</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" name="training_add">Əlavə Et</button>
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