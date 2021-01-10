<?php require_once "header.php";
require_once "nav.php";
require_once "../settings/code/training.php"; ?>
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
                <h4 class="text-themecolor">Təlimlər</h4>
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
                                        <th>Adı</th>
                                        <th>Müddət</th>
                                        <th>Qiymət</th>
                                        <th>Əməliyyatlar</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $i=0;foreach ($data as $x) { ?>
                                        <tr class="data">
                                            <td><?=$x['id']?></td>
                                            <td><img src="../../<?= $x['sekil']?>" height="50px"   width="70px"></td>
                                            <td><?= $x['adi'] ?></td>
                                            <td><?= $x['vaxt'] ?></td>
                                            <td><?= $x['qiymet'] ?></td>

                                            <td>
                                            <button data-toggle="modal" onclick="TrainingView(<?= $x['id'] ?>)" data-target="#exampleModal" class="btn btn-outline-info  btn-sm">Bax</button>

                                 <a href="training-edit.php?id=<?=$x['id']?>&edit=ok "><button name="trainingedit"  class="btn btn-outline-primary btn-sm">Redaktə Et</button></a>
                                                <button onclick="TrainingSil(<?= $x['id'] ?>,'../../<?= $x['sekil'] ?>')" class="btn btn-outline-danger btn-sm">Sil</button>
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
        <h5 class="modal-title" id="exampleModalLabel">Təlimlər</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <table class="table" >
       <tr class="data">
               <td>Kateqoriya</td>
               <td id="kateqori"></td>
           </tr>
           <tr class="data">
               <td>Şəkil</td>
               <td id="img"></td>
           </tr>
          
           <tr>
               <td>Adı</td>
               <td id="adi"></td>
           </tr>
           <tr>
               <td>Mezmun</td>
               <td id="mezmun"></td>
           </tr>
           <tr>
               <td>Mezmun</td>
               <td id="mezmun1"></td>
           </tr>
           <tr>
               <td>Qiymət</td>
               <td id="qiymet"></td>
           </tr>
           <tr>
               <td>Vaxt</td>
               <td id="vaxt"></td>
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