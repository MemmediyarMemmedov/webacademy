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
                <h4 class="text-themecolor">Blog</h4>
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
                                        <th>Ad Soyad</th>
                                        <th>Təvəllüd</th>
                                        <th>Cinsi</th>
                                        <th>Telefon</th>
                                        <th>Email</th>
                                        <th>Kurs</th>
                                        <th>Qeydiyyat tarixi</th>
                                        <th>Əməliyyatlar</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $i=0; foreach ($x as $data) { ?>
                                        <tr class="data">
                                            <td><?= $data['adsoyad'] ?></td>
                                            <td><?= $data['tevellud'] ?></td> 
                                            <td><?= $data['cinsi'] ?></td>                                         
                                            <td><?= $data['tel'] ?></td>                                         
                                            <td><?= $data['email'] ?></td>                                         
                                            <td><?= $data['kurs'] ?></td>  
                                            <td><?= substr($data['qeydtarix'],0,16) ?></td>                                         
                                       
                     <td><button onclick="qeydiyyatSil(<?= $data['id'] ?>)" class="btn btn-danger btn-sm">Sil</button></td>
                                    
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
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <table class="table" >
           <tr>
               <td>Şəkil</td>
               <td id="img"></td>
           </tr>
           <tr>
               <td>Başlıq</td>
               <td id="title"></td>
           </tr>
           <tr>
               <td>Məzmun</td>
               <td id="context"></td>
           </tr>
           <tr>
               <td>Oxunmasayı</td>
               <td id="readcount"></td>
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