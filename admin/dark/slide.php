<?php require_once "header.php";
require_once "nav.php"; require_once "../settings/code/settings.php";  ?>
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
                <h4 class="text-themecolor">Haqqında</h4>
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
                        <input type="hidden" name="old_slide1" value="<?= $data["slide1"] ?>" />
                        <input type="hidden" name="old_slide2" value="<?= $data["slide2"] ?>" />
                        <input type="hidden" name="old_slide3" value="<?= $data["slide3"] ?>" />
                        <div class="form-group">
                                <label for="description">Şəkil</label> <br />
                                <img height="125" src="../../<?= $data["slide1"] ?>" alt="" />
                            </div>
                           

                            <div class="form-group">
                                <label>Şəkil (Dəyişmək üçün seçim edin)</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Yüklə</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="slide1" class="custom-file-input" id="slide1">
                                        <label class="custom-file-label" for="slide1">Fayl seç</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description">Şəkil</label> <br />
                                <img height="125" src="../../<?= $data["slide2"] ?>" alt="" />
                            </div>
                           

                            <div class="form-group">
                                <label>Şəkil (Dəyişmək üçün seçim edin)</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Yüklə</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="slide2" class="custom-file-input" id="slide2">
                                        <label class="custom-file-label" for="slide2">Fayl seç</label>
                                    </div>
                                </div>
                            </div><div class="form-group">
                                <label for="description">Şəkil</label> <br />
                                <img height="125" src="../../<?= $data["slide3"] ?>" alt="" />
                            </div>
                           

                            <div class="form-group">
                                <label>Şəkil (Dəyişmək üçün seçim edin)</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Yüklə</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="slide3" class="custom-file-input" id="slide3">
                                        <label class="custom-file-label" for="slide3">Fayl seç</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" name="slide">Redaktə Et</button>
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