<?php require_once "header.php";
require_once "nav.php";
require_once "../settings/code/service.php"; ?>
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
                <h4 class="text-themecolor">Xidmətlər</h4>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- column -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Siyahı</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Şəkil</th>
                                        <th>Icon</th>
                                        <th>Başlıq</th>
                                        <th>Əməliyyatlar</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $i=0;foreach ($data as $x) { ?>
                                        <tr class="data">
                                            <td><?=$x['id']?></td>
                                            <td><img src="../../<?= $x['sekil']?>" height="50px"   width="70px"></td>
                                            <td><img src="../../<?= $x['icon']?>" height="50px"   width="70px"></td>
                                            <td><?= $x['basliq'] ?></td>
                                            <td>
                                            <button data-toggle="modal" onclick="ServiceView(<?= $x['id'] ?>)" data-target="#exampleModal" class="btn btn-outline-info  btn-sm">Bax</button>

                                 <a href="service-edit.php?id=<?=$x['id']?>&edit=ok "><button name="serviceedit"  class="btn btn-outline-primary btn-sm">Redaktə Et</button></a>
                                                <button onclick="ServiceSil(<?= $x['id'] ?>,'../../<?= $x['sekil'] ?>')" class="btn btn-outline-danger btn-sm">Sil</button>
                                            </td>
                                        </tr>

                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Xidmətlər</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <table class="table" >
           <tr class="data">
               <td>Şəkil</td>
               <td id="img"></td>
           </tr>
           <tr>
               <td>Icon</td>
               <td id="icon"></td>
           </tr>
           <tr>
               <td>Başlıq</td>
               <td id="title"></td>
           </tr>
           <tr>
               <td>Məzmun</td>
               <td id="context"></td>
           </tr>

       </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Bağla</button>
      
      </div>
    </div>
  </div>
</div>
<?php require_once "footer.php"; ?>