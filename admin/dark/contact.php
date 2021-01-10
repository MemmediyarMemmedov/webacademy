<?php require_once "header.php";
require_once "nav.php"; require_once "../settings/code/settings.php"; ?>
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
                <h4 class="text-themecolor">Əlaqə Nizamlamalar</h4>
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
                            <div class="row ">
                                <div class="form-group col-12  ">
                                    <label for="unvan">Ünvan <i class="ti-home"></i></label>
                                    <input type="text" maxlength="255" name="unvan" value="<?= $data["unvan"] ?>"
                                        class="form-control " id="unvan" />
                                </div>
                                <div class="form-group col-12">
                                    <label for="email">E-mail <i class="ti-email"></i></label>
                                    <input type="text" maxlength="255" name="email" class="form-control "
                                        value="<?= $data["email"] ?>" id="email" />
                                </div>
                               
                                <div class="form-group col-12">
                                    <label for="mobil">Mobil <i class="ti-mobile"></i></label>
                                    <input type="text" maxlength="255" name="mobil" class="form-control "
                                        value="<?= $data["mobil"] ?>" id="mobil" />
                                </div>
                                <div class="form-group col-12">
                                    <label for="facebook">Facebook <i class="ti-facebook"></i></label>
                                    <input type="text" maxlength="255" name="facebook" class="form-control "
                                        value="<?= $data["facebook"] ?>" id="facebook" />
                                </div>
                              
                                <div class="form-group col-12">
                                    <label for="instagram">İnstagram <i class="ti-instagram"></i></label>
                                    <input type="text" maxlength="255" name="instagram" class="form-control "
                                        value="<?= $data["instagram"] ?>" id="instagram" />
                                </div>
                               
                               
                            </div>

                            <button type="submit" class="btn btn-primary contactsubmit" name="contact">Redaktə
                                Et</button>
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